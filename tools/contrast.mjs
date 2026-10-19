#!/usr/bin/env node
/**
 * Scan rendered patterns for text below WCAG AA, in dark and Light.
 *
 * Usage:
 *
 *     node tools/contrast.mjs <name>... [--modes=dark,light] [--width=1440] [--scope=main|body] [--no-shot]
 *
 *   <name>    One or more pages rendered by `php tools/render.php`, shot at
 *             https://<app>/_ap-render/<name>.html, or a full URL (a live
 *             template, e.g. https://<app>/blog). A URL's Light shot goes to
 *             `rebuild/live-<host, path and query, non-alphanumerics as dashes>/`.
 *   --modes   Which variations to scan. `light` applies `styles/light.json`'s
 *             palette to `:root`, the way the Light variation re-points the
 *             preset custom properties.
 *   --scope   `main` (default) scans only the page's `<main>`; `body` scans
 *             the whole page, so a live page's header and footer count too.
 *   --no-shot Skip writing `theme-light-<width>.png`.
 *
 * Each text node inside `<main>` (or the whole `<body>` with `--scope=body`) is checked against what's actually painted
 * around it: the page is screenshotted, and pixels just outside the text's
 * box are sampled, so text on gradients, media placeholders and glows is
 * measured too. The samples come from a second screenshot with all text and
 * icons hidden, so a neighbouring glyph is never mistaken for background. The text colour (with its alpha and the element's opacity)
 * is composited over each sample, and the worst ratio counts. Large text
 * (24px, or 18.66px bold) needs 3:1, everything else 4.5:1. Screen-reader
 * text (`.screen-reader-text`, `.sr-only`, any 1px clipped box),
 * `aria-hidden` subtrees and the Forms block's editor-only "Select a form"
 * placeholder are skipped. Gradient text (`background-clip: text`) is
 * measured with each gradient stop, and eight blends between each pair
 * of stops, as its colour, and the worst one counts; its gradient is dropped from the background screenshot. When
 * the text's own element
 * has a border or paints its own background (a badge or chip), samples
 * stay inside its padding box, so a tight line box doesn't measure the
 * text against its own border, or a chip against what's around it.
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
        scope: { type: 'string', default: 'main' },
        'no-shot': { type: 'boolean', default: false },
    },
});

if (!positionals.length) {
    console.error('Usage: node tools/contrast.mjs <name>... [--modes=dark,light] [--width=1440] [--scope=main|body] [--no-shot]');
    process.exit(1);
}

if (!['main', 'body'].includes(values.scope)) {
    console.error('--scope must be `main` or `body`.');
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
 * Collect every visible text node in `<main>` (or `<body>`, per `scope`): its text, resolved colour as
 * RGBA (a 1×1 canvas resolves `color-mix()` and friends), opacity, size,
 * weight and page-space box. Runs in the page.
 */
function collectTexts(scope) {
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
    const walker = document.createTreeWalker((scope === 'body' ? null : document.querySelector('main')) ?? document.body, NodeFilter.SHOW_TEXT);

    while (walker.nextNode()) {
        const node = walker.currentNode;
        const element = node.parentElement;

        if (!node.textContent.trim() || seen.has(element)) {
            continue;
        }
        seen.add(element);

        if (element.closest('.screen-reader-text, .sr-only, [aria-hidden="true"], .wp-block-artisanpack-form--placeholder')) {
            continue;
        }

        const range = document.createRange();
        range.selectNodeContents(node);
        const full = range.getBoundingClientRect();

        // Truncated text (an ellipsis chip) extends past what's painted:
        // measure only the part inside its nearest overflow-clipping box.
        // Its samples stay inside that box too, or they land on whatever is
        // painted past a scroller's edge.
        let rect = full;
        let overflowClip = null;
        for (let box = element; box && box !== document.body; box = box.parentElement) {
            if (getComputedStyle(box).overflowX !== 'visible') {
                const bounds = box.getBoundingClientRect();
                const left = Math.max(full.left, bounds.left);
                const right = Math.min(full.right, bounds.right);
                rect = { left, top: full.top, width: Math.max(0, right - left), height: full.height };
                overflowClip = [bounds.left + scrollX, bounds.top + scrollY, bounds.right + scrollX, bounds.bottom + scrollY];
                break;
            }
        }

        // Nothing painted, or a visually hidden 1px box (a clip-hidden label).
        if (rect.width <= 1 || rect.height <= 1) {
            continue;
        }

        const style = getComputedStyle(element);

        // Gradient text paints its glyphs with a clipped gradient, on the
        // element or an ancestor, and its own colour is transparent.
        let gradientText = null;
        for (let box = element; box && box !== document.body; box = box.parentElement) {
            const boxStyle = getComputedStyle(box);
            if ([boxStyle.backgroundClip, boxStyle.webkitBackgroundClip].includes('text') && boxStyle.backgroundImage !== 'none') {
                gradientText = box;
                break;
            }
        }
        const stops = gradientText
            ? (getComputedStyle(gradientText).backgroundImage.match(/(?:rgba?|hsla?|color|oklch|oklab|lch|lab)\([^()]*\)/g) ?? []).map(toRgba)
            : [];
        // Between two stops the gradient passes through blends that can sit
        // closer to the ground than either stop, so sample eight steps
        // along each pair too (sRGB, as legacy-syntax gradients interpolate).
        const gradientColors = stops.flatMap((stop, index) => {
            const next = stops[index + 1];
            if (!next) {
                return [stop];
            }
            return Array.from({ length: 8 }, (_, step) => stop.map((channel, k) => channel + ((next[k] - channel) * step) / 8));
        });
        gradientText?.setAttribute('data-ap-gradient-text', '');

        const borders = ['Top', 'Right', 'Bottom', 'Left'].map((side) => parseFloat(style[`border${side}Width`]) || 0);
        // A chip painting its own ground (a gradient term badge) is read
        // against that ground, not whatever sits around it.
        const ownBackground = gradientText !== element
            && (style.backgroundImage !== 'none' || toRgba(style.backgroundColor)[3] > 0);
        let clip = null;

        if (borders.some(Boolean) || ownBackground) {
            const outer = element.getBoundingClientRect();
            clip = [
                outer.left + scrollX + borders[3],
                outer.top + scrollY + borders[0],
                outer.right + scrollX - borders[1],
                outer.bottom + scrollY - borders[2],
            ];

            // A pill's rounded corners show what's behind it, so keep the
            // samples clear of them (a 999px radius is capped at half the
            // height, as the browser does).
            const radius = Math.min(parseFloat(style.borderTopLeftRadius) || 0, outer.height / 2);
            if (radius > 0 && clip[2] - clip[0] > radius * 2) {
                clip[0] += radius;
                clip[2] -= radius;
            }
        }

        if (overflowClip) {
            clip = clip
                ? [Math.max(clip[0], overflowClip[0]), Math.max(clip[1], overflowClip[1]), Math.min(clip[2], overflowClip[2]), Math.min(clip[3], overflowClip[3])]
                : overflowClip;
        }

        texts.push({
            text: node.textContent.trim().slice(0, 40),
            colors: stops.length ? gradientColors : [toRgba(style.color)],
            gradient: stops.length > 0,
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
            for (const color of text.colors) {
                const alpha = (color[3] / 255) * text.opacity;
                const ink = [0, 1, 2].map((k) => color[k] * alpha + ground[k] * (1 - alpha));
                worst = Math.min(worst, ratio(ink, ground));
            }
        }

        const large = text.size >= 24 || (text.size >= 18.66 && text.weight >= 700);

        return { text: text.text, ratio: worst, large, gradient: text.gradient, pass: worst >= (large ? 3 : 4.5) };
    });
}

const isUrl = (name) => /^https?:\/\//.test(name);
const urlFor = (name) => (isUrl(name) ? name : `${appUrl}/_ap-render/${name}.html`);
const dirFor = (name) => {
    if (!isUrl(name)) {
        return name;
    }

    // Host, path and query, so two live URLs never share a folder.
    const url = new URL(name);
    const slug = `${url.host}${url.pathname}${url.search}`.replace(/[^A-Za-z0-9]+/g, '-').replace(/^-+|-+$/g, '');

    return `live-${slug}`;
};

const browser = await browserType.launch({ executablePath: chromium, args: ['--ignore-certificate-errors'] });
const context = await browser.newContext({ ignoreHTTPSErrors: true, deviceScaleFactor: 1 });
const page = await context.newPage();
const scratch = await context.newPage();
let failures = 0;

for (const name of positionals) {
    for (const mode of modes) {
        await page.setViewportSize({ width, height: 900 });
        await page.goto(urlFor(name), { waitUntil: 'networkidle' });
        await page.addStyleTag({ content: '#keystone-privacy-banner-root{display:none!important}' });

        if (mode === 'light') {
            await page.addStyleTag({ content: lightCss });
        }

        await page.evaluate(() => document.fonts.ready);
        await page.waitForTimeout(300);

        const shot = await page.screenshot({ fullPage: true });

        if (mode === 'light' && !values['no-shot']) {
            const outDir = join(keystone, 'theme-pattern-report/rebuild', dirFor(name));
            mkdirSync(outDir, { recursive: true });
            writeFileSync(join(outDir, `theme-light-${width}.png`), shot);
        }

        const texts = await page.evaluate(collectTexts, values.scope);

        // Sample backgrounds with every glyph and icon hidden, so a ring
        // sample that lands on neighbouring text (a descender above, a
        // chip's `$` prompt) measures what's painted behind it instead.
        // Gradient text's clipped gradient is its glyphs, so it goes too.
        const hideText = await page.addStyleTag({ content: `${values.scope}, ${values.scope} * { color: transparent !important; -webkit-text-fill-color: transparent !important; text-shadow: none !important; } ${values.scope} svg { visibility: hidden !important; } [data-ap-gradient-text] { background: none !important; }` });
        const backgrounds = await page.screenshot({ fullPage: true });
        await hideText.evaluate((node) => node.remove());

        const results = await scratch.evaluate(measure, { png: backgrounds.toString('base64'), texts });
        const below = results.filter((result) => !result.pass);
        failures += below.length;

        console.log(`${name} [${mode}] ${results.length} texts, ${below.length} below AA`);
        for (const result of below) {
            console.log(`  ${result.ratio.toFixed(2)}:1 ${result.large ? '(large) ' : ''}${result.gradient ? '(gradient) ' : ''}"${result.text}"`);
        }
    }
}

await browser.close();
process.exit(failures ? 1 : 0);
