#!/usr/bin/env node
/**
 * Scan rendered patterns for text below WCAG AA, in dark and Light.
 *
 * Usage:
 *
 *     node tools/contrast.mjs <name>... [--modes=dark,light] [--width=1440] [--no-shot]
 *
 *   <name>    One or more pages rendered by `php tools/render.php`, shot at
 *             https://<app>/_ap-render/<name>.html.
 *   --modes   Which variations to scan. `light` applies `styles/light.json`'s
 *             palette to `:root`, the way the Light variation re-points the
 *             preset custom properties.
 *   --no-shot Skip writing `theme-light-<width>.png`.
 *
 * Each text node inside `<main>` is checked against what's actually painted
 * around it: the page is screenshotted, and pixels just outside the text's
 * box are sampled, so text on gradients, media placeholders and glows is
 * measured too. The text colour (with its alpha and the element's opacity)
 * is composited over each sample, and the worst ratio counts. Large text
 * (24px, or 18.66px bold) needs 3:1, everything else 4.5:1. Screen-reader
 * text and `aria-hidden` subtrees are skipped. When the text's own element
 * has a border (a badge or chip), samples stay inside its padding box, so
 * a tight line box doesn't measure the text against its own border.
 *
 * The Light screenshot goes to `<keystone>/theme-pattern-report/rebuild/<name>/`.
 * Exits 1 when any text is below AA.
 *
 * Needs Playwright from the Keystone app's node_modules and the headless
 * Chromium shell below. Override the browser with AP_CHROMIUM and the app
 * root with KEYSTONE_PATH.
 */

import { createRequire } from 'node:module';
import { mkdirSync, readFileSync, writeFileSync } from 'node:fs';
import { homedir } from 'node:os';
import { dirname, join, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';
import { parseArgs } from 'node:util';

const themeDir = resolve(dirname(fileURLToPath(import.meta.url)), '..');
const keystone = process.env.KEYSTONE_PATH ?? resolve(themeDir, '../..');
const chromium = process.env.AP_CHROMIUM ?? join(
    homedir(),
    'Library/Caches/ms-playwright/chromium_headless_shell-1234/chrome-headless-shell-mac-arm64/chrome-headless-shell',
);

const { values, positionals } = parseArgs({
    allowPositionals: true,
    options: {
        modes: { type: 'string', default: 'dark,light' },
        width: { type: 'string', default: '1440' },
        'no-shot': { type: 'boolean', default: false },
    },
});

if (!positionals.length) {
    console.error('Usage: node tools/contrast.mjs <name>... [--modes=dark,light] [--width=1440] [--no-shot]');
    process.exit(1);
}

const require = createRequire(join(keystone, 'package.json'));
const { chromium: browserType } = require('playwright');

const appUrl = (readFileSync(join(keystone, '.env'), 'utf8').match(/^APP_URL=(.*)$/m)?.[1] ?? '')
    .trim()
    .replace(/^http:/, 'https:');
const modes = values.modes.split(',');
const width = Number(values.width);

const light = JSON.parse(readFileSync(join(themeDir, 'styles/light.json'), 'utf8'));
const lightCss = ':root{' + light.settings.color.palette
    .map((preset) => `--wp--preset--color--${preset.slug}:${preset.color} !important`)
    .join(';') + '}';

/**
 * Collect every visible text node in `<main>`: its text, resolved colour as
 * RGBA (a 1×1 canvas resolves `color-mix()` and friends), opacity, size,
 * weight and page-space box. Runs in the page.
 */
function collectTexts() {
    const canvas = document.createElement('canvas');
    canvas.width = canvas.height = 1;
    const context = canvas.getContext('2d', { willReadFrequently: true });
    const toRgba = (color) => {
        context.clearRect(0, 0, 1, 1);
        context.fillStyle = '#000';
        context.fillStyle = color;
        context.fillRect(0, 0, 1, 1);
        return [...context.getImageData(0, 0, 1, 1).data];
    };

    const texts = [];
    const seen = new Set();
    const walker = document.createTreeWalker(document.querySelector('main') ?? document.body, NodeFilter.SHOW_TEXT);

    while (walker.nextNode()) {
        const node = walker.currentNode;
        const element = node.parentElement;

        if (!node.textContent.trim() || seen.has(element)) {
            continue;
        }
        seen.add(element);

        if (element.closest('.screen-reader-text, [aria-hidden="true"]')) {
            continue;
        }

        const range = document.createRange();
        range.selectNodeContents(node);
        const rect = range.getBoundingClientRect();

        if (!rect.width || !rect.height) {
            continue;
        }

        const style = getComputedStyle(element);
        const borders = ['Top', 'Right', 'Bottom', 'Left'].map((side) => parseFloat(style[`border${side}Width`]) || 0);
        let clip = null;

        if (borders.some(Boolean)) {
            const outer = element.getBoundingClientRect();
            clip = [
                outer.left + scrollX + borders[3],
                outer.top + scrollY + borders[0],
                outer.right + scrollX - borders[1],
                outer.bottom + scrollY - borders[2],
            ];
        }

        texts.push({
            text: node.textContent.trim().slice(0, 40),
            color: toRgba(style.color),
            opacity: Number(style.opacity),
            size: parseFloat(style.fontSize),
            weight: Number(style.fontWeight) || 400,
            box: [rect.left + scrollX, rect.top + scrollY, rect.width, rect.height],
            clip,
        });
    }

    return texts;
}

/**
 * Decode the screenshot on a canvas and measure each text against the
 * pixels on a ring 3px outside its box (kept inside a bordered element's
 * padding box). Runs in a blank page.
 */
async function measure({ png, texts }) {
    const image = new Image();
    image.src = `data:image/png;base64,${png}`;
    await image.decode();

    const canvas = document.createElement('canvas');
    canvas.width = image.width;
    canvas.height = image.height;
    const context = canvas.getContext('2d', { willReadFrequently: true });
    context.drawImage(image, 0, 0);

    const luminance = (rgb) => {
        const channel = (value) => {
            const v = value / 255;
            return v <= 0.03928 ? v / 12.92 : ((v + 0.055) / 1.055) ** 2.4;
        };
        return 0.2126 * channel(rgb[0]) + 0.7152 * channel(rgb[1]) + 0.0722 * channel(rgb[2]);
    };
    const ratio = (a, b) => {
        const [light, dark] = [luminance(a), luminance(b)].sort((x, y) => y - x);
        return (light + 0.05) / (dark + 0.05);
    };

    return texts.map((text) => {
        const [left, top, w, h] = text.box;
        const pad = 3;
        const points = [];

        for (let i = 0; i <= 8; i++) {
            const x = left + (w * i) / 8;
            points.push([x, top - pad], [x, top + h + pad]);
        }
        for (let i = 0; i <= 4; i++) {
            const y = top + (h * i) / 4;
            points.push([left - pad, y], [left + w + pad, y]);
        }

        const alpha = (text.color[3] / 255) * text.opacity;
        let worst = Infinity;

        for (let [x, y] of points) {
            if (text.clip) {
                x = Math.min(Math.max(x, text.clip[0] + 1), text.clip[2] - 1);
                y = Math.min(Math.max(y, text.clip[1] + 1), text.clip[3] - 1);
            }
            if (x < 0 || y < 0 || x >= canvas.width || y >= canvas.height) {
                continue;
            }
            const ground = [...context.getImageData(Math.round(x), Math.round(y), 1, 1).data];
            const ink = [0, 1, 2].map((k) => text.color[k] * alpha + ground[k] * (1 - alpha));
            worst = Math.min(worst, ratio(ink, ground));
        }

        const large = text.size >= 24 || (text.size >= 18.66 && text.weight >= 700);

        return { text: text.text, ratio: worst, large, pass: worst >= (large ? 3 : 4.5) };
    });
}

const browser = await browserType.launch({ executablePath: chromium, args: ['--ignore-certificate-errors'] });
const context = await browser.newContext({ ignoreHTTPSErrors: true, deviceScaleFactor: 1 });
const page = await context.newPage();
const scratch = await context.newPage();
let failures = 0;

for (const name of positionals) {
    for (const mode of modes) {
        await page.setViewportSize({ width, height: 900 });
        await page.goto(`${appUrl}/_ap-render/${name}.html`, { waitUntil: 'networkidle' });

        if (mode === 'light') {
            await page.addStyleTag({ content: lightCss });
        }

        await page.evaluate(() => document.fonts.ready);
        await page.waitForTimeout(300);

        const shot = await page.screenshot({ fullPage: true });

        if (mode === 'light' && !values['no-shot']) {
            const outDir = join(keystone, 'theme-pattern-report/rebuild', name);
            mkdirSync(outDir, { recursive: true });
            writeFileSync(join(outDir, `theme-light-${width}.png`), shot);
        }

        const texts = await page.evaluate(collectTexts);
        const results = await scratch.evaluate(measure, { png: shot.toString('base64'), texts });
        const below = results.filter((result) => !result.pass);
        failures += below.length;

        console.log(`${name} [${mode}] ${results.length} texts, ${below.length} below AA`);
        for (const result of below) {
            console.log(`  ${result.ratio.toFixed(2)}:1 ${result.large ? '(large) ' : ''}"${result.text}"`);
        }
    }
}

await browser.close();
process.exit(failures ? 1 : 0);
