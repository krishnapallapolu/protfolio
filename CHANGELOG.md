# Changelog

All notable changes to this project are documented here. This file was generated on 2026-02-02 and summarizes recent edits made during an interactive development session.

## [Unreleased] - 2026-02-02

### Added
- `.github/copilot-instructions.md` — merged and created actionable AI agent instructions from existing `CLAUDE.md` and repository inspection.
- `inc/case-studies.php` — extracted Case Studies section into a reusable include.
- `assets/krishnap-cv.pdf` — (already present) linked from the hero profile card as the resume download.
- `CHANGELOG.md` — created to document these edits and provide an audit trail for changes made during this session.

### Changed
- `index.php` — major UI updates:
  - Added a combined hero + about section with animated name and typewriter subtitle.
  - Replaced profile photo references with `images/krishna-headshot2.png` and increased hero/profile thumbnail size.
  - Merged About and Hero sections and added "Valid UAE driving license" to profile card.
  - Replaced in-page Case Studies section with `include_once('inc/case-studies.php')`.
  - Added new Case Study: "ETL Pipeline & Social Media Automation" (n8n, OpenAI, Social APIs).
  - Updated contact/CTA buttons and improved layout/responsive behavior.
  - Meeting Minds responsibilities: added production PostgreSQL deployments and Supabase usage; implemented AI-driven automation using `n8n` for data enrichment and social publishing workflows.
- `inc/header.php` — fixed stylesheet link to use absolute path `/style.css` (fixes nested page CSS load); corrected theme initialization logic to respect saved preference and system setting.
- `inc/footer.php` —
  - Added "Go to top" button markup and JS for smooth scrolling and show/hide behavior.
  - Improved theme toggle behavior: updates `aria-pressed`, toggles Bootstrap utility classes (navbar, bg-dark, text-white) to reflect the active theme, and prevents flash of wrong theme on load.
  - Ensures theme classes are applied on page load (`setTheme(initTheme)`) so UI updates without needing a manual refresh.
- `style.css` —
  - Added/adjusted hero styles, `.profile-thumb`, `.btn-accent`, and go-to-top button styles.
  - Improved case studies styles and ensured responsive rules apply correctly.
  - Added light theme variables and light-mode overrides for Bootstrap utility classes to ensure consistent light-theme appearance (white backgrounds, adjusted text, borders, shadows).
  - Slightly darkened light-theme text and border colors for improved contrast.
  - Added Skills UI styles and package chip styling for the new skills card grid.
- `index.php` — Redesigned Technical Skills into a professional card-based grid with skill badges, progress indicators, and package lists; updated Frontend card to include JavaScript, Bootstrap, MUI, React component badges and a "Popular packages" list (react-router, redux-toolkit, axios, formik, react-hook-form, @mui/material, react-bootstrap).

### Fixed
- Resolved CSS loading issue on nested pages by changing stylesheet link to absolute path in `inc/header.php`.
- Fixed theme toggle defaulting incorrectly and ensured UI classes are updated to show light/dark theme properly.
- `inc/footer.php` — Theme toggle now applies UI updates immediately on page load (no refresh required) and toggles relevant Bootstrap utility classes for accurate light/dark rendering.

### Notes
- The `text2image.php` endpoint reads `OPENAI_API_KEY` from the environment; ensure the key is set for that feature to work.
- Assets and images are stored in `images/` and `assets/` (resume PDF).

---

If you'd like this changelog entry edited (formatting, additional technical notes, or semantic versioning), say so and I will update it before pushing.
