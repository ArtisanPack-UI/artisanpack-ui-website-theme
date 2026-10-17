#!/usr/bin/env node
/**
 * Validate block markup with the Site Editor's own block library, and print
 * the markup the editor would save.
 *
 * Usage:
 *
 *     node tools/editor.mjs <pattern-slug|path/to/file> [--write] [--out=FILE]
 *
 * Logs in headlessly, opens the Site Editor, and runs the markup through the
 * editor's registered `@wordpress/blocks` (`window.ApSiteEditor.libs.blocks`):
 * `parse()` flags every block whose saved HTML doesn't match its `save()`
 * (the canvas's "invalid block" state) or whose name isn't registered, and
 * `serialize()` returns the markup the editor itself would write. Nothing is
 * saved to the site.
 *
 *   --write  Replace the pattern's body with the serialized markup, keeping
 *            its PHP header. Refused while any block is invalid.
 *   --out    Write the serialized markup to FILE instead of stdout.
 *
 * Exits 1 when any block is invalid or unregistered.
 *
 * Credentials come from AP_ADMIN_EMAIL / AP_ADMIN_PASSWORD in the Keystone
 * `.env` (or the environment) and are never printed. The session cookie is
 * cached in the OS temp directory between runs. See tools/README.md for the
 * other overrides (KEYSTONE_PATH, AP_CHROMIUM).
 */

import { createRequire } from 'node:module';
import { existsSync, readFileSync, writeFileSync } from 'node:fs';
import { homedir, tmpdir } from 'node:os';
import { dirname, join, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';
import { parseArgs } from 'node:util';

const themeDir = resolve(dirname(fileURLToPath(import.meta.url)), '..');
const keystone = process.env.KEYSTONE_PATH ?? resolve(themeDir, '../..');
const chromium = process.env.AP_CHROMIUM ?? join(
    homedir(),
    'Library/Caches/ms-playwright/chromium_headless_shell-1234/chrome-headless-shell-mac-arm64/chrome-headless-shell',
);
const statePath = join(tmpdir(), 'ap-theme-editor-state.json');

const { values, positionals } = parseArgs({
    allowPositionals: true,
    options: {
        write: { type: 'boolean', default: false },
        rebuild: { type: 'boolean', default: false },
        out: { type: 'string' },
    },
});

const target = positionals[0];

if (!target) {
    console.error('Usage: node tools/editor.mjs <pattern-slug|file> [--write] [--out=FILE]');
    process.exit(1);
}

const file = existsSync(target) ? resolve(target) : join(themeDir, 'patterns', `${target}.php`);

if (!existsSync(file)) {
    console.error(`No pattern or file at ${file}`);
    process.exit(1);
}

const source = readFileSync(file, 'utf8');
const header = source.match(/^\s*<\?php.*?\?>\s*/s)?.[0] ?? '';
const markup = source.slice(header.length);

const dotenv = Object.fromEntries(
    readFileSync(join(keystone, '.env'), 'utf8')
        .split('\n')
        .map((line) => line.match(/^([A-Z_]+)=(.*)$/))
        .filter(Boolean)
        .map(([, key, value]) => [key, value.trim().replace(/^(["'])(.*)\1$/, '$2')]),
);
const env = (key) => process.env[key] ?? dotenv[key];
const appUrl = (env('APP_URL') ?? '').replace(/^http:/, 'https:').replace(/\/$/, '');

const require = createRequire(join(keystone, 'package.json'));
const { chromium: browserType } = require('playwright');

const browser = await browserType.launch({ executablePath: chromium });

/**
 * Open the Site Editor, logging in first when the cached session is missing
 * or expired.
 */
async function openEditor() {
    const context = await browser.newContext({
        ignoreHTTPSErrors: true,
        storageState: existsSync(statePath) ? statePath : undefined,
    });
    const page = await context.newPage();

    await page.goto(`${appUrl}/admin/site-editor`, { waitUntil: 'networkidle' });

    if (new URL(page.url()).pathname.startsWith('/login')) {
        if (!env('AP_ADMIN_EMAIL') || !env('AP_ADMIN_PASSWORD')) {
            throw new Error('Set AP_ADMIN_EMAIL and AP_ADMIN_PASSWORD in the Keystone .env');
        }

        await page.goto(`${appUrl}/login`, { waitUntil: 'networkidle' });
        await page.fill('input[name=login]', env('AP_ADMIN_EMAIL'));
        await page.fill('input[name=password]', env('AP_ADMIN_PASSWORD'));
        // Wait for the login POST itself. Inertia follows its redirect to the
        // intended /admin/site-editor over XHR, gets that non-Inertia page
        // back, and stays on /login, so navigate there explicitly instead.
        const [response] = await Promise.all([
            page.waitForResponse((res) => res.request().method() === 'POST' && new URL(res.url()).pathname === '/login'),
            page.press('input[name=password]', 'Enter'),
        ]);

        const location = response.headers().location ?? '';

        if (response.status() >= 400 || location === '' || new URL(location, appUrl).pathname.startsWith('/login')) {
            throw new Error('Login failed: check AP_ADMIN_EMAIL / AP_ADMIN_PASSWORD (an account with 2FA enforced cannot log in headlessly)');
        }

        await context.storageState({ path: statePath });
        await page.goto(`${appUrl}/admin/site-editor`, { waitUntil: 'networkidle' });
    }

    await page.waitForFunction(
        () => window.ApSiteEditor?.libs?.blocks?.getBlockTypes?.().some((type) => type.name.startsWith('artisanpack/')),
        null,
        { timeout: 30000 },
    );

    return page;
}

let result;

try {
    const page = await openEditor();

    result = await page.evaluate(({ input, rebuild }) => {
        const { parse, serialize, getBlockType, createBlock } = window.ApSiteEditor.libs.blocks;
        const blocks = parse(input);
        const problems = [];
        const migrations = [];

        // Raw comment attributes, in document (pre-)order, to spot blocks a
        // deprecation silently migrated: parse() reports those as valid
        // even when attributes were dropped or rewritten.
        const raw = [...input.matchAll(/<!--\s+wp:([a-z0-9-]+(?:\/[a-z0-9-]+)?)(\s+(\{.*?\}))?\s*\/?-->/g)]
            .filter((match) => getBlockType(match[1].includes('/') ? match[1] : `core/${match[1]}`))
            .map((match) => {
                try {
                    return match[3] ? JSON.parse(match[3]) : {};
                } catch {
                    // parse() silently drops attributes it can't read.
                    problems.push({ path: match[1], issue: `invalid comment JSON: ${match[3].slice(0, 120)}` });

                    return {};
                }
            });
        let rawIndex = 0;
        const rawFor = new Map();
        const canonical = (value) => JSON.stringify(value, (key, inner) => (inner && typeof inner === 'object' && !Array.isArray(inner)
            ? Object.fromEntries(Object.entries(inner).sort(([a], [b]) => a.localeCompare(b)))
            : inner));

        const walk = (list, trail) => list.forEach((block, index) => {
            const path = `${trail}${trail ? ' > ' : ''}${block.name ?? 'freeform'}[${index}]`;

            if (block.name === 'core/missing') {
                problems.push({ path, issue: `unregistered block ${block.attributes?.originalName}` });
            } else if (block.isValid === false) {
                const issues = (block.validationIssues ?? []).map((issue) => {
                    const args = (issue.args ?? []).map((arg) => (typeof arg === 'string' ? arg : JSON.stringify(arg)));
                    return args.length ? args.join(' ').replace(/%[so]/g, '').replace(/\s+/g, ' ').trim().slice(0, 600) : String(issue);
                });
                problems.push({ path, issue: issues.join(' | ') || 'invalid' });
            }

            const before = raw[rawIndex++] ?? {};
            rawFor.set(block, before);
            const changed = Object.keys(before).filter((key) => canonical(before[key]) !== canonical(block.attributes?.[key]));

            if (changed.length) {
                migrations.push({ path, keys: changed });
            }

            walk(block.innerBlocks ?? [], path);
        });

        walk(blocks, '');

        // parse() drops blocks whose type isn't registered, so check every
        // name in the raw markup as well.
        const names = new Set([...input.matchAll(/<!--\s+wp:([a-z0-9-]+(?:\/[a-z0-9-]+)?)[\s/]/g)].map((match) => match[1]));

        for (const name of names) {
            const qualified = name.includes('/') ? name : `core/${name}`;

            if (!getBlockType(qualified)) {
                problems.push({ path: qualified, issue: 'unregistered block type; parse() drops it from the output' });
            }
        }

        // --rebuild: recreate every block from its comment attributes (they
        // win over whatever a deprecation migrated) plus the content parse()
        // read from the HTML, then save it through the block's own save().
        // Hand-written HTML then never has to match save() exactly.
        if (rebuild) {
            // Comment-stored attributes come only from the comment; only
            // attributes the block sources from its HTML (text, links) come
            // from parse(). For a block that failed validation, parse()
            // folds stray root classes into `className`, so trusting its
            // comment attributes would carry broken markup forward.
            const recreate = (block) => {
                const schema = getBlockType(block.name)?.attributes ?? {};
                const fromHtml = Object.fromEntries(
                    Object.entries(block.attributes ?? {}).filter(([key]) => schema[key]?.source !== undefined),
                );

                return createBlock(
                    block.name,
                    { ...fromHtml, ...(rawFor.get(block) ?? {}) },
                    (block.innerBlocks ?? []).map(recreate),
                );
            };
            const rebuilt = blocks.map(recreate);

            return {
                problems: problems.filter((problem) => problem.issue.startsWith('unregistered')),
                migrations: [],
                serialized: serialize(rebuilt),
                count: rebuilt.length,
                rebuilt: true,
            };
        }

        return { problems, migrations, serialized: serialize(blocks), count: blocks.length };
    }, { input: markup, rebuild: values.rebuild });
} finally {
    await browser.close();
}

for (const migration of result.migrations) {
    console.error(`MIGRATED ${migration.path}\n  a deprecation rewrote: ${migration.keys.join(', ')} (check the serialized markup before keeping it)`);
}

for (const problem of result.problems) {
    console.error(`INVALID ${problem.path}\n  ${problem.issue}`);
}

const output = `${result.serialized}\n`;

// `--out` aimed at the input file is a rewrite in place: route it through
// `--write`, which keeps the PHP header and refuses while any block is
// invalid (serialize() drops unregistered blocks, so writing then would
// lose them).
if (values.out && resolve(values.out) === file) {
    values.write = true;
}

if (values.write) {
    if (result.problems.length || result.migrations.length) {
        console.error('Not written: fix the invalid or migrated blocks first (or pass --rebuild).');
        process.exit(1);
    }

    writeFileSync(file, header + output);
    console.error(`Wrote editor-serialized markup to ${file}`);
} else if (values.out) {
    writeFileSync(values.out, output);
    console.error(`Wrote ${values.out}`);
} else {
    process.stdout.write(output);
}

console.error(result.problems.length ? `${result.problems.length} invalid block(s).` : `All blocks valid (${result.count} top-level).`);
process.exit(result.problems.length ? 1 : 0);
