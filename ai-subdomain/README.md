# ai.skrishnap.com — landing page

Single-page lead-gen site for Krishna's AI agency. Deployed to the
`ai.skrishnap.com` subdomain on Hostinger via GitHub Actions FTP.

## Stack

- **PHP** (`index.php`) — kept thin: a few shared constants (`$WHATSAPP_NUMBER`,
  `$EMAIL`, `$SITE_URL`, `$GA_ID`) and a `wa()` helper for prefilled WhatsApp
  links. No DB, no framework. Hostinger serves it as-is.
- **Tailwind CSS 3** — compiled to `dist/styles.css` at build time. The
  compiled CSS is what ships; **no Tailwind CDN, no JS framework, no Node on
  the server**.
- Google Analytics (shared GA4 property `G-VPZK0V35K0`).

### Where Node fits

Node only runs in the GitHub Actions CI step that compiles Tailwind. Hostinger
never sees Node or npm — it only receives the final `index.php`, `styles.css`,
`favicon.jpg`, and `.htaccess` via FTP.

## Local development

```bash
cd ai-subdomain
npm install
npm run dev          # watches src/input.css → dist/styles.css
# In a second shell:
php -S 127.0.0.1:8000 index.php
# Open http://127.0.0.1:8000/ — note styles.css is served from /dist/, so for
# local testing edit the <link rel="stylesheet"> href or just rebuild and copy.
```

## Build

```bash
npm run build        # writes dist/styles.css (minified)
```

## Deploy

Pushes to `main` that touch `ai-subdomain/**` trigger
`.github/workflows/deploy-ai-subdomain.yml`, which:

1. Installs Tailwind in CI and runs `npm run build`
2. Stages `index.php`, `dist/styles.css` (as `/styles.css`), `favicon.jpg`,
   and `.htaccess` into a `deploy/` folder
3. FTP-syncs `deploy/` to
   `/domains/skrishnap.com/public_html/ai.skrishnap.com/`

Manual deploy: GitHub Actions tab → **Deploy ai.skrishnap.com** → Run workflow.

## Editing copy

All copy lives in `index.php`. CTAs are generated through `wa(...)` so you
change the number once at the top of the file. After edits, push — CI rebuilds
Tailwind so any new utility classes you used get included.

## Contact wiring

- `$WHATSAPP_NUMBER = '971503242537'` — the +971 50 324 2537 line from the
  main portfolio. WhatsApp links pass a `?text=` payload specific to each CTA
  position so you can tell in WhatsApp which button they clicked.
- `$EMAIL = 'krishna.naidu24@gmail.com'`
- Update both at the top of `index.php` if either changes.
