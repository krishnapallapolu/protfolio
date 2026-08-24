# Brief: Ship `ai.skrishnap.com`

Hand this file to a Claude Code agent running in the skrishnap.com repo (or wherever its source is deployed from). Read top to bottom before starting.

---

## Context

I run **skrishnap.com** — a single-page PHP portfolio positioning me as a Senior Full-Stack Developer & Tech Lead. It is aimed at recruiters and hiring managers and should **not be modified** by this task.

Separately, I'm launching a productized AI-services offering for Dubai SMEs and marketing agencies. I want this on a **subdomain** — `ai.skrishnap.com` — so the two audiences (recruiters vs SME buyers) never contaminate each other.

The landing page content is already written and lives at `landing-page.html` in this working directory. The supporting demo-video specs live at `demo-scripts.md`. You don't need to rewrite the copy.

---

## Goal

A live, public, mobile-fast landing page at **https://ai.skrishnap.com** that:

1. Renders `landing-page.html` as the homepage of that subdomain
2. Has working WhatsApp + calendar CTAs
3. Has correct meta tags, OG image, favicon
4. Is fully decoupled from the PHP main site — nothing about this should be able to break skrishnap.com
5. Loads in < 1.5s on mobile (4G) — Dubai SME buyers will open this on phones

---

## Decision: hosting

Host `ai.skrishnap.com` as **static** (not on the PHP host). The landing page is pure HTML/Tailwind/CDN — zero PHP. Putting it on the PHP server adds risk and gains nothing.

Pick **one** of these in order of preference:

1. **Cloudflare Pages** — free, fastest CDN, easiest DNS (Cloudflare handles SSL automatically if the root domain is already on Cloudflare). Recommended.
2. **Netlify** — free, also fine, drag-and-drop deploy or git-linked.
3. **GitHub Pages** — free, fine, slightly slower CDN.

Do NOT use the PHP shared hosting. Keep the static site isolated.

If the user's DNS is already on Cloudflare, default to Cloudflare Pages and skip option 2/3.

---

## Tasks

Work through these in order. Surface blockers to the user immediately rather than guessing.

### 1. Set up the repo / deploy target

- Create a new directory `ai-skrishnap/` (or a sibling repo) — do **not** put this inside the existing PHP portfolio's source tree. They deploy independently.
- Move `landing-page.html` into it, renamed to `index.html`.
- Copy `demo-scripts.md` in as reference but do not deploy it publicly (gitignore or put in a `/docs` subfolder).

### 2. Fill the placeholders in `index.html`

These exist in the file as literal strings — find-and-replace:

| Placeholder | Replace with |
|---|---|
| `{YOUR NAME}` | `Krishna Pallapolu` |
| `971XXXXXXXXX` | (ask the user for their WhatsApp number, full international format, digits only, no `+` or spaces) |
| `{YOUR CALENDAR LINK}` | (ask the user for their Cal.com or Calendly URL — if they don't have one yet, tell them to create a free Cal.com account, takes 5 minutes, and pause until they have a link) |
| `{YOUR EMAIL}` | (ask the user — likely the email they use for skrishnap.com contact) |

Do not deploy with placeholders in place. Fail loudly if any remain.

### 3. Add SEO + social metadata

In the `<head>` of `index.html`, add (after the existing `<title>` and description):

```html
<!-- Canonical -->
<link rel="canonical" href="https://ai.skrishnap.com/">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://ai.skrishnap.com/">
<meta property="og:title" content="AI agents for Dubai SMEs — Krishna Pallapolu">
<meta property="og:description" content="Voice agents, WhatsApp responders, document automations. Live in 2 weeks. Fixed prices. Cancel anytime.">
<meta property="og:image" content="https://ai.skrishnap.com/og.png">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="AI agents for Dubai SMEs — Krishna Pallapolu">
<meta name="twitter:description" content="Voice agents, WhatsApp responders, document automations. Live in 2 weeks.">
<meta name="twitter:image" content="https://ai.skrishnap.com/og.png">

<!-- Favicon -->
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
```

Generate a basic OG image (1200×630 PNG):
- Black background (#0a0a0a)
- White headline: "Stop losing leads, missing calls, and drowning in manual work."
- Emerald accent line
- Small bottom-right: "ai.skrishnap.com"

If you can't generate the OG image programmatically, create a 1200×630 placeholder PNG with the headline as text and flag it for the user to replace with a real designed version later. Do not block deploy on this.

Generate a simple SVG favicon — an emerald square with a white "K" or a stylized waveform — and save as `favicon.svg`.

### 4. Replace Tailwind CDN with a built CSS file before launch

The current `index.html` uses `https://cdn.tailwindcss.com` — fine for development, **not for production** (slow first paint, flagged by Lighthouse, console warns about prod use).

Install Tailwind CLI:

```bash
npm init -y
npm install -D tailwindcss@latest
npx tailwindcss init
```

Configure `tailwind.config.js` to scan `./index.html`. Create `src/input.css` with the three `@tailwind` directives. Build to `dist/output.css`:

```bash
npx tailwindcss -i ./src/input.css -o ./dist/output.css --minify
```

Replace the CDN `<script>` tag in `index.html` with:

```html
<link rel="stylesheet" href="/dist/output.css">
```

Add a build step to the deploy config so this runs on every push.

### 5. Replace Google Fonts CDN with self-hosted (optional optimization)

The current page loads Inter from Google Fonts. For Dubai mobile networks, self-hosting is ~200ms faster. If time permits, download Inter (weights 400/500/600/700/800), serve from `/fonts/`, and update the `<link>` to a local `@font-face` declaration. If not, leave the Google Fonts link in — it's not critical.

### 6. Deploy

For Cloudflare Pages:

1. Create a new Pages project, connect it to the repo (or upload the directory directly).
2. Build command: `npx tailwindcss -i ./src/input.css -o ./dist/output.css --minify`
3. Build output directory: `/` (root, since `index.html` is at root)
4. Add custom domain: `ai.skrishnap.com`
5. Cloudflare will prompt to add the DNS record automatically if the root domain is on Cloudflare. Accept it.

For Netlify: same idea, build command and publish directory as above, add custom domain in site settings, follow their DNS instructions.

### 7. DNS

If the root domain is on Cloudflare, the Pages flow above handles this. Otherwise, the user needs to add at their DNS provider:

```
Type: CNAME
Name: ai
Value: (the deploy target's hostname, e.g. krishna-ai.pages.dev or krishna-ai.netlify.app)
Proxy: orange cloud / proxied (Cloudflare) or default
TTL: auto
```

Surface the exact CNAME target to the user so they can paste it into their registrar if needed.

### 8. Verify

After DNS propagates (usually under 5 minutes on Cloudflare):

- [ ] `https://ai.skrishnap.com` resolves and serves the page
- [ ] SSL works (no browser warning)
- [ ] WhatsApp CTAs open WhatsApp with the correct number
- [ ] Calendar CTA opens the booking link in a new tab (add `target="_blank" rel="noopener"` if not present)
- [ ] Page renders correctly on mobile (test at 375px width)
- [ ] Lighthouse mobile score ≥ 95 for Performance and Accessibility (run `npx lighthouse https://ai.skrishnap.com --view`)
- [ ] OG preview renders correctly — test at https://www.opengraph.xyz/url/https%3A%2F%2Fai.skrishnap.com
- [ ] No console errors or warnings in Chrome DevTools
- [ ] No leftover placeholder strings anywhere in the deployed HTML

### 9. Do not touch

- `skrishnap.com` source code or hosting
- DNS records other than the new `ai` CNAME
- The user's email or Calendly/Cal.com account configuration (just consume the link they provide)

---

## Constraints

- **No JavaScript frameworks.** Plain HTML + Tailwind. No React, no Next.js, no build complexity beyond Tailwind CLI.
- **No analytics yet.** Don't add Google Analytics, Plausible, or anything else without asking. The user will decide later.
- **No contact forms.** WhatsApp + calendar only. Forms have ~10% the conversion in this market.
- **No third-party scripts** beyond what's already in `index.html` (Tailwind during dev, Google Fonts). Every script tag added is a perf and privacy cost.
- **Mobile-first.** Test everything at 375px before celebrating.
- **If you find a bug or a better idea**, surface it to the user before silently changing anything visible. The copy and structure were deliberately chosen.

---

## Acceptance

Task is done when:
1. `https://ai.skrishnap.com` is live, SSL-secured, and renders correctly on mobile + desktop
2. All CTAs work end-to-end (WhatsApp opens, calendar opens)
3. Lighthouse mobile Performance ≥ 95
4. OG image renders in social previews
5. `skrishnap.com` is verifiably unchanged (visit it, diff the source)
6. The user has the URL and can forward it to a contact

Report back with the live URL and Lighthouse scores when finished.

---

## Reference files in this directory

- `landing-page.html` — the page content, copy-final, placeholders marked
- `demo-scripts.md` — video specs (not part of this deploy; record separately)
- `instructions.md` — this file
