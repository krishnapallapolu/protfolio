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
- `inc/header.php` — sets fonts, CDNs, Google Analytics, theme initialization script and links to `/style.css`. **Preserve preconnects and meta**.
- `inc/footer.php` — footer markup and deferred scripts; contains theme toggle logic and additional UI scripts (theme toggle, go-to-top button). Theme JS now toggles Bootstrap utility classes and calls `setTheme(initTheme)` on load.
- `inc/case-studies.php` — new: extracted Case Studies markup; include with `include_once('inc/case-studies.php')` in any page.
- `style.css` — global styles, CSS variables (dark/light), light-theme overrides for Bootstrap utility classes, Skills UI styles, and Case Studies rules.
- `text2image.php` & `text2image.html` — backend proxy to OpenAI Images API; **reads `OPENAI_API_KEY` from env**.
- `assets/` — PDFs and downloadable assets (e.g., `assets/krishnap-cv.pdf`).
- `images/` — headshots and icons (e.g., `images/krishna-headshot2.png`).
- `.github/workflows/deploy.yml` — FTP deploy to Hostinger on push to `main` (secrets required).

## Patterns & conventions to follow ⚙️
- Pages should include header/footer via `include_once('inc/header.php')` or `include_once('../inc/header.php')` when in subfolders — keep relative paths correct. **When adding new includes, prefer absolute `/style.css` in header to avoid broken styles on nested pages.**
- Keep Bootstrap & Font Awesome usage via CDN unless there's a reason to vendor them.
- Preserve theme mechanism: `data-theme` attribute and `#theme-toggle` hook (JS in `inc/footer.php`). Theme script toggles utility classes (`.bg-dark`, `.text-white`, `navbar-dark`/`navbar-light`) and calls `setTheme(initTheme)` on load so UI updates without refresh — test this in DevTools when modifying theme code.
- Images and static assets are stored in repo (`images/`, `assets/`, or `itenary/images/`). Add assets in those locations and reference relative paths.
- For reusable content, extract to `inc/` (e.g., `inc/case-studies.php`) and include in pages to keep `index.php` lean.

## Integrations & secrets 🔐
- Hostinger FTP deploy in `.github/workflows/deploy.yml` requires secrets: `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`, `FTP_SERVER_DIR`.
- `text2image.php` calls OpenAI's Images API. Set `OPENAI_API_KEY` in the environment (do not commit it).

## Testing & quality checks 🧪
- There are no automated tests in the repo. Manual checks:
  - Run site locally: `php -S localhost:8000` and test both the root page and nested pages (e.g., `/itenary/index.php`) to ensure `style.css` loads correctly.
  - Theme toggle: verify switching themes applies changes immediately without a refresh (inspect `data-theme`, `aria-pressed`, and that `.bg-dark`/`.text-white` classes are toggled).
  - UI checks: verify `inc/case-studies.php` renders correctly on the homepage and that the Skills card grid displays and is responsive.
  - Go-to-top button: scroll past 200px and confirm the button appears and scrolls smoothly to top.
  - For `text2image`: confirm successful API response and image display; ensure `OPENAI_API_KEY` is set and sanitize inputs server-side before sending to API.
- When adding features that require build tooling, document the change and add minimal scripts rather than introducing unnecessary complexity.
- Update `CHANGELOG.md` for every meaningful set of changes (new features, UI updates, fixes) and include a short explanation and date.

## Security & best practices ⚠️
- Never commit API keys or secrets. Use environment variables locally and GitHub Secrets for CI/deploy.
- Sanitize and validate inputs for any future server-side endpoints (e.g., `text2image.php` currently trusts input description).

## PR guidelines / agent constraints 🧭
- Preserve header metadata (fonts, analytics). Avoid removing preconnects or analytics unless explicitly requested.
- When adding new pages inside subfolders, verify include paths and navigation updates in `index.php`.
- Keep changes minimal and reversible; this is a small, live portfolio site — avoid large refactors without owner approval.
- Commit messages should be short and prefixed (e.g., `feat:`, `fix:`, `chore:`). Update `CHANGELOG.md` for any non-trivial change before pushing.
- Direct pushes to `main` are fine for small edits; for bigger work prefer creating a branch and opening a PR for review.
- The GitHub Actions deploy job uses FTP and excludes the `.github/` folder and local docs (`CLAUDE.md`, `README.md`) — do not attempt to deploy secret files.

---

If any part of the workflow or environment is unclear, tell me which area you'd like expanded (deployment, local dev, integrations, or coding conventions) and I will iterate. ✅
