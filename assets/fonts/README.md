# Fonts

All fonts are bundled, so the theme makes no external font requests. They are
declared as `fontFace` entries in `theme.json`, which Keystone emits as
`@font-face` rules pointing at this directory.

| Family | Files | Use |
|---|---|---|
| Poppins | `poppins-{300,400,500,600,700,800}.woff2`, `poppins-{400,500,600}-italic.woff2` | headings and body |
| Space Mono | `space-mono-{400,700}.woff2`, `space-mono-{400,700}-italic.woff2` | code, versions, meta, placeholder labels |

The files are the Google Fonts `latin` subset (woff2). Poppins is © The Poppins
Project Authors and Space Mono © Google. Both are licensed under the SIL
Open Font License 1.1 (`OFL.txt`).
