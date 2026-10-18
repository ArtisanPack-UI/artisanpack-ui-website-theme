# Theme tools

Dev-only scripts for checking patterns against the Claude Design export.
They run from a Keystone install with this theme in `themes/artisanpack-ui`,
and are left out of the release ZIP (`.gitattributes` `export-ignore`).

## Render a pattern

```bash
php tools/render.php features-bento          # a pattern slug
php tools/render.php tools/fixtures/x.html   # or any block-markup file
php tools/render.php --clean                 # delete public/_ap-render when done
```

Options can go before or after the target.

Runs the markup through Keystone's real `BlockRenderer::renderMarkup()`,
drains the collected support CSS, and wraps it in the `<head>` of the live
`/packages` page. That page uses the block-theme layout, so the render gets
the current global styles, variations, `style.css` and enqueued assets. Writes
`public/_ap-render/<name>.html` and prints its URL.

Query blocks are expanded as `<x-ve-blocks>` expands them, so a query over
published records renders real cards. Top-level `post-*` blocks still render
empty, because there's no host post in scope.

## Screenshot against the design

```bash
node tools/shoot.mjs features-bento --design=FeaturesBento
node tools/shoot.mjs specimen --design=tools/fixtures/specimen.jsx
```

Shoots the rendered page and the design side at 1440px and 375px (full page),
and writes `theme-<w>.png`, `design-<w>.png` and a side-by-side
`compare-<w>.png` to `theme-pattern-report/rebuild/<name>/` in the Keystone
root.

- `--design` takes a component name exported by `_ds_bundle.js`, rendered
  with `--props='{"…":…}'`, a `.jsx` file that renders into `#root`, or a
  full-page design, shot as it is: `--design=templates/blog/Blog.dc.html`
  (relative to the design export, or absolute). The bundle's exports are
  available as `DS`.
- `--theme=URL` shoots another page, e.g. a live template
  (`--theme=https://artisanpack-ui.test/blog`); `--widths=1440,768,375`
  changes widths; `--out-dir` changes the output folder.
- The cookie-consent banner (`#keystone-privacy-banner-root`) is hidden, so
  it doesn't cover a live page.

## Validate markup in the editor

```bash
node tools/editor.mjs element-feature          # report invalid blocks, print saved markup
node tools/editor.mjs element-feature --write  # replace the pattern body with it
node tools/editor.mjs templates/archive-post.html   # a template or part
```

A template or part is validated as the Site Editor loads it: its
`core/template-part` references become the editor's `artisanpack/template-part`
fork (as visual-editor's `TemplateAdapter` does), and the serialized markup
writes them back as `core/template-part`.

Logs in headlessly (`AP_ADMIN_EMAIL` / `AP_ADMIN_PASSWORD` from the Keystone
`.env`), opens the Site Editor and runs the markup through the editor's own
block library (`window.ApSiteEditor.libs.blocks`). `parse()` flags each block
whose HTML doesn't match its `save()` (the canvas's "invalid block" state),
unregistered block names are flagged too (`parse()` drops them silently), and
`serialize()` gives the markup the editor would save. Nothing is saved to the
site. Exits 1 on any invalid block; `--write` refuses until all are valid.

Hand-write a pattern, then `--write` it: the file ends up exactly as the
editor would save it, which is what §11 step 3 of the rebuild report asks for.

`--rebuild` recreates every block from its comment attributes, so hand-written
HTML doesn't have to match `save()`. Use it for new markup, not for bulk edits
to existing patterns: on a block whose saved HTML has gone stale, the editor can
read the whole root element as the block's rich-text content and nest it
(`<p><p>…</p></p>`). The tool refuses a rebuild that changes the pattern's
visible text. To change attributes in bulk, edit the comment JSON and the
matching inline `style` together, then validate without `--rebuild`.

## Check contrast in dark and Light

```bash
node tools/contrast.mjs text-media-split pricing   # one or more rendered pages
node tools/contrast.mjs pricing --modes=light --no-shot
node tools/contrast.mjs https://artisanpack-ui.test/blog   # a live template
```

A full URL is scanned as it is (the consent banner is hidden); its Light
shot goes to `rebuild/live-<path, slashes as dashes>/`.

Scans pages rendered by `tools/render.php` for text below WCAG AA (4.5:1,
or 3:1 for large text), in the default (dark) variation and in Light.
Light applies `styles/light.json`'s palette to `:root`, which is how the
variation re-points the preset custom properties. Each Light pass also
writes `theme-light-<width>.png` next to the other shots (`--no-shot`
skips it).

Each text node in `<main>` is measured against the pixels just outside
its box on a screenshot, so text on gradients, media placeholders and
glows counts too. When the text's own element has a border (a badge), the
samples stay inside its padding box. Screen-reader text and `aria-hidden`
subtrees are skipped. Failing texts are listed with their ratio, and the
script exits 1 if there are any.

Options: `--modes=dark,light` (default both), `--width=1440`, `--no-shot`.

## Night token block

```bash
node tools/night-css.mjs          # regenerate style.css §6 from theme.json
node tools/night-css.mjs --check  # exit 1 if it's stale
```

The Night Group style keeps the dark palette inside a band in every
variation. `style.css` §6 re-declares, on `.is-style-night`, every palette
colour that differs in `styles/light.json`, plus every colour, gradient and
shadow preset that references another preset. Run it after changing any of
those in theme.json.

## Requirements

| What | Default | Override |
|---|---|---|
| Keystone root | three levels up from `tools/` | `KEYSTONE_PATH` |
| Design export | `~/Downloads/ArtisanPack UI Design System` | `AP_DESIGN_PATH` |
| Headless Chromium | `~/Library/Caches/ms-playwright/chromium_headless_shell-1234/…/chrome-headless-shell` | `AP_CHROMIUM` |
| Playwright | the Keystone app's `node_modules` | — |
| Admin login (editor.mjs) | `AP_ADMIN_EMAIL` / `AP_ADMIN_PASSWORD` in the Keystone `.env` | the same environment variables |

The design side loads React, Babel and Font Awesome from CDNs, so it needs a
network connection.
