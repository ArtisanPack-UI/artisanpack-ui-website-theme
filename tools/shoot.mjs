#!/usr/bin/env node
/**
 * Screenshot a rendered pattern next to its design at 1440px and 375px.
 *
 * Usage:
 *
 *     node tools/shoot.mjs <name> [--theme=URL] [--design=Component|path.jsx] [--props=JSON]
 *                                 [--widths=1440,375] [--out-dir=DIR]
 *
 *   --theme   A page to shoot as the theme side, normally the URL that
 *             `php tools/render.php` printed. Defaults to
 *             https://<app>/_ap-render/<name>.html.
 *   --design  A component exported by the design bundle (`FeaturesBento`),
 *             rendered as `<Component {...props} />`, a .jsx file whose
 *             code renders into `#root` (see tools/fixtures/), or a
 *             full-page design (`templates/blog/Blog.dc.html`, relative to
 *             the design export or absolute), shot as it is. Omit it to
 *             shoot the theme side only.
 *
 * The site's cookie-consent banner (`#keystone-privacy-banner-root`) is
 * hidden on the theme side, so a live page shot isn't covered by it.
 *
 * Output goes to `<keystone>/theme-pattern-report/rebuild/<name>/`:
 * `theme-<w>.png`, `design-<w>.png` and `compare-<w>.png` (design left,
 * theme right), all full-page.
 *
 * Needs Playwright from the Keystone app's node_modules and the headless
 * Chromium shell below. The design export path defaults to
 * ~/Downloads/ArtisanPack UI Design System (override with AP_DESIGN_PATH).
 * Override the browser with AP_CHROMIUM and the app root with KEYSTONE_PATH.
 */

import { createRequire } from 'node:module';
import { existsSync, mkdirSync, mkdtempSync, readFileSync, writeFileSync } from 'node:fs';
import { homedir, tmpdir } from 'node:os';
import { dirname, extname, isAbsolute, join, resolve } from 'node:path';
import { fileURLToPath, pathToFileURL } from 'node:url';
import { parseArgs } from 'node:util';

const themeDir = resolve(dirname(fileURLToPath(import.meta.url)), '..');
const keystone = process.env.KEYSTONE_PATH ?? resolve(themeDir, '../..');
const designPath = process.env.AP_DESIGN_PATH ?? join(homedir(), 'Downloads/ArtisanPack UI Design System');
const chromium = process.env.AP_CHROMIUM ?? join(
    homedir(),
    'Library/Caches/ms-playwright/chromium_headless_shell-1234/chrome-headless-shell-mac-arm64/chrome-headless-shell',
);

const { values, positionals } = parseArgs({
    allowPositionals: true,
    options: {
        theme: { type: 'string' },
        design: { type: 'string' },
        props: { type: 'string', default: '{}' },
        widths: { type: 'string', default: '1440,375' },
        'out-dir': { type: 'string' },
    },
});

const name = positionals[0];

if (!name) {
    console.error('Usage: node tools/shoot.mjs <name> [--theme=URL] [--design=Component|path.jsx] [--props=JSON]');
    process.exit(1);
}

const require = createRequire(join(keystone, 'package.json'));
const { chromium: browserType } = require('playwright');

const appUrl = (readFileSync(join(keystone, '.env'), 'utf8').match(/^APP_URL=(.*)$/m)?.[1] ?? '')
    .trim()
    .replace(/^http:/, 'https:');
const themeUrl = values.theme ?? `${appUrl}/_ap-render/${name}.html`;
const widths = values.widths.split(',').map(Number);
const outDir = values['out-dir'] ?? join(keystone, 'theme-pattern-report/rebuild', name);

mkdirSync(outDir, { recursive: true });

/**
 * Write a page that renders one design-bundle component (or a JSX fixture)
 * on the design's own tokens, loaded the way the exploration boards do.
 */
function designPage(design, props) {
    if (design.endsWith('.html')) {
        // Relative paths are relative to the design export, as documented.
        const file = isAbsolute(design) ? design : join(designPath, design);

        if (!existsSync(file)) {
            console.error(`No design page at ${file}`);
            process.exit(1);
        }

        return pathToFileURL(file).href;
    }

    const base = pathToFileURL(designPath + '/').href;
    const code = extname(design) === '.jsx'
        ? readFileSync(resolve(design), 'utf8')
        : `const C = window.ArtisanPackUIDesignSystem_151903[${JSON.stringify(design)}];
ReactDOM.createRoot(document.getElementById('root')).render(<C {...${props}} />);`;

    const html = `<!doctype html>
<html lang="en"><head><meta charset="utf-8">
<base href="${base}">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<style>body{margin:0;background:var(--color-base);color:var(--color-text);font-family:var(--font-body)}</style>
<script src="https://unpkg.com/react@18.3.1/umd/react.development.js"></script>
<script src="https://unpkg.com/react-dom@18.3.1/umd/react-dom.development.js"></script>
<script src="https://unpkg.com/@babel/standalone@7.29.0/babel.min.js"></script>
<script src="_ds_bundle.js"></script>
</head><body><div id="root"></div>
<script type="text/babel">
const DS = window.ArtisanPackUIDesignSystem_151903;
${code}
</script></body></html>`;

    const file = join(mkdtempSync(join(tmpdir(), 'ap-design-')), 'design.html');
    writeFileSync(file, html);

    return pathToFileURL(file).href;
}

async function shoot(page, url, width, file) {
    await page.setViewportSize({ width, height: 200 });
    await page.goto(url, { waitUntil: 'networkidle' });
    await page.addStyleTag({ content: '#keystone-privacy-banner-root{display:none!important}' });
    await page.evaluate(() => document.fonts.ready);
    await page.waitForTimeout(300);
    await page.screenshot({ path: file, fullPage: true });
}

async function composite(page, left, right, width, file) {
    const img = (src, label) => `<figure><figcaption>${label}</figcaption><img src="${pathToFileURL(src).href}" width="${width}"></figure>`;
    const html = `<!doctype html><style>
body{margin:0;background:#000;display:flex;gap:16px;padding:16px;align-items:flex-start;font:600 14px system-ui;color:#fff}
figure{margin:0}figcaption{padding:0 0 8px}img{display:block;outline:1px solid #444}</style>
${img(left, 'Design')}${img(right, 'Theme')}`;
    const tmp = join(mkdtempSync(join(tmpdir(), 'ap-compare-')), 'compare.html');
    writeFileSync(tmp, html);
    await page.setViewportSize({ width: width * 2 + 48, height: 200 });
    await page.goto(pathToFileURL(tmp).href, { waitUntil: 'load' });
    await page.screenshot({ path: file, fullPage: true });
}

if (!existsSync(chromium)) {
    console.error(`No headless Chromium at ${chromium}`);
    process.exit(1);
}

const browser = await browserType.launch({ executablePath: chromium, args: ['--ignore-certificate-errors'] });
const context = await browser.newContext({ ignoreHTTPSErrors: true, deviceScaleFactor: 1 });
const page = await context.newPage();
const designUrl = values.design ? designPage(values.design, values.props) : null;

page.on('pageerror', (error) => console.error(`page error: ${error.message}`));

for (const width of widths) {
    const themeFile = join(outDir, `theme-${width}.png`);
    await shoot(page, themeUrl, width, themeFile);
    console.log(themeFile);

    if (designUrl) {
        const designFile = join(outDir, `design-${width}.png`);
        await shoot(page, designUrl, width, designFile);
        console.log(designFile);

        const compareFile = join(outDir, `compare-${width}.png`);
        await composite(page, designFile, themeFile, width, compareFile);
        console.log(compareFile);
    }
}

await browser.close();
