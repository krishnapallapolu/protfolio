# Copilot / AI Agent Instructions for this repo 🤖

**Purpose:** Help an AI coding agent become productive quickly when working on Krishna Pallapolu's portfolio site.

## Quick context
- Small PHP-based portfolio site using **Bootstrap 5**, **Font Awesome**, and custom `style.css`.
- Layout uses PHP includes: `inc/header.php` (meta, fonts, theme init) and `inc/footer.php` (scripts, theme toggle).
- Minimal tooling: no Node/Composer build steps. Hosted via FTP using GitHub Actions on the `main` branch.

## Run & debug locally ✅
- From project root: `php -S localhost:8000` then open `http://localhost:8000`.
- For nested pages (e.g., `itenary/index.php`) access via `/itenary/index.php` in the browser.
- To test `text2image` features, set the OpenAI key locally before running:
  - `export OPENAI_API_KEY=sk-...`
- Enable PHP errors for debugging if needed:
  - `error_reporting(E_ALL); ini_set('display_errors', 1);`

## Key files / entry points 🔍
- `index.php` — main portfolio page and primary example of patterns used.
- `inc/header.php` — important: sets fonts, CDNs, Google Analytics, theme initialization script. Keep meta and preconnects intact.
- `inc/footer.php` — footer markup and deferred scripts; contains theme toggle logic (expects an element with `id="theme-toggle"`).
- `style.css` — global styles and variables (accent color and dark theme usage).
- `text2image.php` & `text2image.html` — backend proxy to OpenAI Images API; **reads `OPENAI_API_KEY` from env**.
- `itenary/` — example of subpages; note how includes use relative paths (`../inc/header.php`).
- `.github/workflows/deploy.yml` — FTP deploy to Hostinger on push to `main` (secrets required).

## Patterns & conventions to follow ⚙️
- Pages should include header/footer via `include_once('inc/header.php')` or `include_once('../inc/header.php')` when in subfolders — keep relative paths correct.
- Keep Bootstrap & Font Awesome usage via CDN unless there's a reason to vendor them.
- Preserve theme mechanism: `data-theme` attribute and `#theme-toggle` hook (JS in `inc/footer.php`).
- Images and static assets are stored in repo (`images/`, root images, or `itenary/images/`). Add assets in those locations and reference relative paths.

## Integrations & secrets 🔐
- Hostinger FTP deploy in `.github/workflows/deploy.yml` requires secrets: `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`, `FTP_SERVER_DIR`.
- `text2image.php` calls OpenAI's Images API. Set `OPENAI_API_KEY` in the environment (do not commit it).

## Testing & quality checks 🧪
- There are no automated tests in the repo. Manual checks:
  - Run site locally, verify nav anchors, layout, and theme toggle.
  - For `text2image`, confirm successful API response and image display; check network tab for response details.
- When adding features that require build tooling, document the change and add minimal scripts rather than introducing unnecessary complexity.

## Security & best practices ⚠️
- Never commit API keys or secrets. Use environment variables locally and GitHub Secrets for CI/deploy.
- Sanitize and validate inputs for any future server-side endpoints (e.g., `text2image.php` currently trusts input description).

## PR guidelines / agent constraints 🧭
- Preserve header metadata (fonts, analytics). Avoid removing preconnects or analytics unless explicitly requested.
- When adding new pages inside subfolders, verify include paths and navigation updates in `index.php`.
- Keep changes minimal and reversible; this is a small, live portfolio site — avoid large refactors without owner approval.

---

If any part of the workflow or environment is unclear, tell me which area you'd like expanded (deployment, local dev, integrations, or coding conventions) and I will iterate. ✅
