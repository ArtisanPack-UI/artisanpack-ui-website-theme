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

Runs the markup through Keystone's real `BlockRenderer::renderMarkup()`,
drains the collected support CSS, and wraps it in the `<head>` of the live
`/packages` page. That page uses the block-theme layout, so the render gets
the current global styles, variations, `style.css` and enqueued assets. Writes
`public/_ap-render/<name>.html` and prints its URL.

`post-*` and query blocks render empty, because there's no post in scope.

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
  with `--props='{"…":…}'`, or a `.jsx` file that renders into `#root`. The
  bundle's exports are available as `DS`.
- `--theme=URL` shoots another page; `--widths=1440,768,375` changes widths;
  `--out-dir` changes the output folder.

## Requirements

| What | Default | Override |
|---|---|---|
| Keystone root | three levels up from `tools/` | `KEYSTONE_PATH` |
| Design export | `~/Downloads/ArtisanPack UI Design System` | `AP_DESIGN_PATH` |
| Headless Chromium | `~/Library/Caches/ms-playwright/chromium_headless_shell-1234/…/chrome-headless-shell` | `AP_CHROMIUM` |
| Playwright | the Keystone app's `node_modules` | — |

The design side loads React, Babel and Font Awesome from CDNs, so it needs a
network connection.
