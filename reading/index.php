<?php
// The Reading Room — auto-generated shelf of every .html page in this folder.
// To add a page: drop a self-contained .html file here. It needs a <title>.
// Optional: <meta name="description" content="...">, <meta name="topic" content="...">,
// and <meta name="minutes" content="45"> to override the reading-time estimate
// (needed for pages that render their content from JavaScript).

function meta_content(string $raw, string $name): ?string {
    $n = preg_quote($name, '/');
    if (preg_match('/<meta[^>]*\bname=["\']' . $n . '["\'][^>]*\bcontent=("|\')(.*?)\1/is', $raw, $m)) {
        return trim(html_entity_decode($m[2], ENT_QUOTES));
    }
    if (preg_match('/<meta[^>]*\bcontent=("|\')(.*?)\1[^>]*\bname=["\']' . $n . '["\']/is', $raw, $m)) {
        return trim(html_entity_decode($m[2], ENT_QUOTES));
    }
    return null;
}

$pages = [];
foreach (glob(__DIR__ . '/*.html') as $path) {
    $raw = file_get_contents($path, false, null, 0, 400000);
    if ($raw === false) continue;

    $title = preg_match('/<title>(.*?)<\/title>/si', $raw, $m)
        ? trim(html_entity_decode($m[1], ENT_QUOTES))
        : ucwords(str_replace('-', ' ', basename($path, '.html')));

    $text  = preg_replace('/<(style|script|svg)\b.*?<\/\1>/si', ' ', $raw);
    $words = str_word_count(strip_tags($text));

    // JS-rendered pages have almost no static text; skip the estimate unless overridden.
    $mins = (int) (meta_content($raw, 'minutes') ?? 0);
    if ($mins < 1) {
        $mins = $words >= 150 ? max(1, (int) round($words / 200)) : null;
    }

    $pages[] = [
        'href'  => basename($path),
        'title' => $title,
        'desc'  => meta_content($raw, 'description'),
        'topic' => meta_content($raw, 'topic'),
        'mins'  => $mins,
        'mtime' => filemtime($path),
    ];
}
usort($pages, fn($a, $b) => $b['mtime'] <=> $a['mtime']);
$count = count($pages);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<title>The Reading Room</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;700;800&family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400&family=JetBrains+Mono:wght@400;600&display=swap">
<style>
  :root {
    --bg: #FAF6EF;
    --surface: #FFFFFF;
    --ink: #2B2620;
    --muted: #8A7F70;
    --line: #E6DECF;
    --org-a: #0E9C8D;
    --org-a-bg: #DCF2EE;
    --org-b: #DB8A10;
    --org-b-bg: #F9EBD2;
    --code-bg: #F1EADC;
    --shadow: 0 2px 0 var(--line);
  }
  @media (prefers-color-scheme: dark) {
    :root:not([data-theme="light"]) {
      --bg: #1A1712;
      --surface: #23201A;
      --ink: #F0EAE0;
      --muted: #9C9284;
      --line: #3B352B;
      --org-a: #3BC6B5;
      --org-a-bg: #143430;
      --org-b: #F0A93F;
      --org-b-bg: #3B2D13;
      --code-bg: #2C2820;
      --shadow: 0 2px 0 rgba(0,0,0,.35);
    }
  }
  :root[data-theme="dark"] {
    --bg: #1A1712;
    --surface: #23201A;
    --ink: #F0EAE0;
    --muted: #9C9284;
    --line: #3B352B;
    --org-a: #3BC6B5;
    --org-a-bg: #143430;
    --org-b: #F0A93F;
    --org-b-bg: #3B2D13;
    --code-bg: #2C2820;
    --shadow: 0 2px 0 rgba(0,0,0,.35);
  }

  * { box-sizing: border-box; }
  html { scroll-behavior: smooth; }
  body {
    margin: 0;
    background: var(--bg);
    background-image: radial-gradient(var(--line) 1px, transparent 1px);
    background-size: 26px 26px;
    color: var(--ink);
    font-family: "Atkinson Hyperlegible", "Segoe UI", system-ui, sans-serif;
    font-size: 1.04rem;
    line-height: 1.65;
  }
  .wrap { max-width: 760px; margin: 0 auto; padding: 64px 24px 96px; }

  header { margin-bottom: 44px; }
  .eyebrow {
    font-family: "JetBrains Mono", monospace;
    font-size: .78rem;
    font-weight: 600;
    letter-spacing: .14em;
    text-transform: uppercase;
    color: var(--org-a);
    margin: 0 0 10px;
  }
  h1 {
    font-family: "Baloo 2", cursive;
    font-weight: 800;
    font-size: clamp(2.4rem, 6vw, 3.4rem);
    line-height: 1.08;
    margin: 0 0 12px;
    letter-spacing: -.01em;
  }
  .dek { color: var(--muted); font-size: 1.08rem; max-width: 34em; margin: 0 0 22px; }

  /* decorative shelf of book spines */
  .shelf { display: flex; align-items: flex-end; gap: 5px; height: 44px; border-bottom: 3px solid var(--line); padding: 0 4px; width: max-content; }
  .spine { width: 11px; border-radius: 3px 3px 0 0; }
  .spine.a  { background: var(--org-a);    height: 38px; }
  .spine.ab { background: var(--org-a-bg); height: 30px; border: 1px solid var(--org-a); }
  .spine.b  { background: var(--org-b);    height: 34px; }
  .spine.bb { background: var(--org-b-bg); height: 26px; border: 1px solid var(--org-b); }
  .spine.lean { transform: rotate(8deg); transform-origin: bottom left; }

  .count {
    font-family: "JetBrains Mono", monospace;
    font-size: .8rem;
    color: var(--muted);
    margin: 40px 0 14px;
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .count::after { content: ""; flex: 1; border-top: 1px dashed var(--line); }

  ol.stack { list-style: none; margin: 0; padding: 0; display: grid; gap: 14px; }
  .card {
    position: relative;
    display: block;
    background: var(--surface);
    border: 1.5px solid var(--line);
    border-left-width: 6px;
    border-radius: 14px;
    padding: 20px 22px 18px;
    text-decoration: none;
    color: inherit;
    box-shadow: var(--shadow);
    transition: transform .15s ease, border-color .15s ease, box-shadow .15s ease;
  }
  li:nth-child(odd)  .card { border-left-color: var(--org-a); }
  li:nth-child(even) .card { border-left-color: var(--org-b); }
  .card:hover, .card:focus-visible {
    transform: translateY(-2px) rotate(-.3deg);
    box-shadow: 0 6px 0 var(--line);
  }
  li:nth-child(odd)  .card:hover { border-color: var(--org-a); }
  li:nth-child(even) .card:hover { border-color: var(--org-b); }

  .card .top { display: flex; align-items: baseline; gap: 10px; flex-wrap: wrap; margin-bottom: 4px; }
  .topic {
    font-family: "JetBrains Mono", monospace;
    font-size: .68rem;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    padding: 2px 9px;
    border-radius: 99px;
  }
  li:nth-child(odd)  .topic { color: var(--org-a); background: var(--org-a-bg); }
  li:nth-child(even) .topic { color: var(--org-b); background: var(--org-b-bg); }
  .card h2 {
    font-family: "Baloo 2", cursive;
    font-weight: 700;
    font-size: 1.45rem;
    line-height: 1.2;
    margin: 0;
  }
  .card { padding-right: 52px; }
  .card .arrow { position: absolute; top: 18px; right: 20px; font-family: "Baloo 2", cursive; font-weight: 800; font-size: 1.2rem; color: var(--muted); transition: transform .15s ease; }
  .card:hover .arrow { transform: translateX(4px); }
  li:nth-child(odd)  .card:hover .arrow { color: var(--org-a); }
  li:nth-child(even) .card:hover .arrow { color: var(--org-b); }
  .card p { margin: 4px 0 10px; color: var(--muted); max-width: 40em; }
  .meta {
    font-family: "JetBrains Mono", monospace;
    font-size: .76rem;
    color: var(--muted);
    display: flex;
    gap: 16px;
  }

  .empty {
    border: 1.5px dashed var(--line);
    border-radius: 14px;
    padding: 40px 24px;
    text-align: center;
    color: var(--muted);
  }

  .colophon {
    margin-top: 56px;
    background: var(--code-bg);
    border: 1.5px solid var(--line);
    border-radius: 14px;
    padding: 18px 22px;
    font-size: .92rem;
    color: var(--muted);
  }
  .colophon strong { color: var(--ink); }
  .colophon code {
    font-family: "JetBrains Mono", monospace;
    font-size: .82em;
    background: var(--surface);
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 1px 6px;
  }
  a { color: var(--org-a); }
  :focus-visible { outline: 2px solid var(--org-a); outline-offset: 2px; }

  @media (max-width: 520px) {
    .wrap { padding-top: 44px; }
    .card { padding: 16px 16px 14px; }
  }
</style>
</head>
<body>
<div class="wrap">

  <header>
    <p class="eyebrow">skrishnap · internal shelf</p>
    <h1>The Reading Room</h1>
    <p class="dek">Explainers and guides I keep for myself. Not linked anywhere, not indexed &mdash; just a quiet shelf.</p>
    <div class="shelf" aria-hidden="true">
      <span class="spine a"></span><span class="spine bb"></span><span class="spine b"></span><span class="spine ab"></span><span class="spine a lean"></span><span class="spine b"></span><span class="spine ab"></span><span class="spine bb"></span><span class="spine a"></span>
    </div>
  </header>

  <p class="count"><?= $count ?> page<?= $count === 1 ? '' : 's' ?> on the shelf</p>

  <?php if ($count === 0): ?>
    <div class="empty">Nothing here yet. Drop an <code>.html</code> file into <code>/reading/</code> and it appears on its own.</div>
  <?php else: ?>
  <ol class="stack">
    <?php foreach ($pages as $p): ?>
    <li>
      <a class="card" href="<?= htmlspecialchars($p['href']) ?>">
        <div class="top">
          <?php if ($p['topic']): ?><span class="topic"><?= htmlspecialchars($p['topic']) ?></span><?php endif; ?>
          <h2><?= htmlspecialchars($p['title']) ?></h2>
          <span class="arrow" aria-hidden="true">&rarr;</span>
        </div>
        <?php if ($p['desc']): ?><p><?= htmlspecialchars($p['desc']) ?></p><?php endif; ?>
        <div class="meta">
          <span><?= date('M j, Y', $p['mtime']) ?></span>
          <?php if ($p['mins']): ?><span>~<?= $p['mins'] ?> min read</span><?php endif; ?>
        </div>
      </a>
    </li>
    <?php endforeach; ?>
  </ol>
  <?php endif; ?>

  <div class="colophon">
    <strong>How this works:</strong> every <code>.html</code> file in <code>/reading/</code> is listed here automatically &mdash; newest first. Each page needs a <code>&lt;title&gt;</code>; add <code>&lt;meta name="description"&gt;</code> for a blurb and <code>&lt;meta name="topic"&gt;</code> for the little label. This whole section sends <code>noindex</code>, so search engines stay out.
  </div>

</div>
</body>
</html>
