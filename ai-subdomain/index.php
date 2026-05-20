<?php
// ai.skrishnap.com — single-page lead-gen site for Krishna's AI agency.
// Static content; PHP is used only for shared constants + dynamic year.

$WHATSAPP_NUMBER = '971503242537';
$EMAIL           = 'krishna.naidu24@gmail.com';
$SITE_URL        = 'https://ai.skrishnap.com/';
$GA_ID           = 'G-VPZK0V35K0';

function wa(string $number, string $message): string {
    return 'https://wa.me/' . $number . '?text=' . rawurlencode($message);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#0a0a0a">

  <title>AI Agents for Dubai SMEs — Krishna Pallapolu</title>
  <meta name="description" content="Voice agents, WhatsApp responders, document automations for Dubai SMEs. Live in 2 weeks. Fixed prices. Working demo before you pay.">
  <link rel="canonical" href="<?= htmlspecialchars($SITE_URL) ?>">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= htmlspecialchars($SITE_URL) ?>">
  <meta property="og:title" content="AI Agents for Dubai SMEs — Krishna Pallapolu">
  <meta property="og:description" content="Voice agents, WhatsApp responders, document automations for Dubai SMEs. Live in 2 weeks. Fixed prices.">
  <meta property="og:image" content="<?= htmlspecialchars($SITE_URL) ?>favicon.png">
  <meta property="og:locale" content="en_AE">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="AI Agents for Dubai SMEs — Krishna Pallapolu">
  <meta name="twitter:description" content="Voice agents, WhatsApp responders, document automations for Dubai SMEs. Live in 2 weeks.">
  <meta name="twitter:image" content="<?= htmlspecialchars($SITE_URL) ?>favicon.png">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="apple-touch-icon" href="/favicon.png">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Compiled Tailwind -->
  <link rel="stylesheet" href="/styles.css">

  <!-- Structured data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Krishna Pallapolu — AI Agents",
    "url": "<?= $SITE_URL ?>",
    "description": "AI agents for Dubai SMEs: voice agents, WhatsApp responders, document automations.",
    "areaServed": { "@type": "Place", "name": "Dubai, United Arab Emirates" },
    "priceRange": "AED 6,000 – AED 12,000 build + monthly retainer",
    "telephone": "+<?= $WHATSAPP_NUMBER ?>",
    "email": "<?= $EMAIL ?>",
    "founder": { "@type": "Person", "name": "Krishna Pallapolu" }
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      { "@type": "Question", "name": "Do I need to be technical to use this?",
        "acceptedAnswer": { "@type": "Answer", "text": "No. Everything runs in apps you already use — WhatsApp, your phone line, your inbox, your sheets." } },
      { "@type": "Question", "name": "What if I cancel?",
        "acceptedAnswer": { "@type": "Answer", "text": "You cancel. No notice period, no penalty. I'll hand over what's been built if you want to keep it." } },
      { "@type": "Question", "name": "How is this different from hiring a developer?",
        "acceptedAnswer": { "@type": "Answer", "text": "A developer builds; they don't run. The monthly retainer keeps the automation working, adapts it, and adds new ones over time." } },
      { "@type": "Question", "name": "What about data privacy?",
        "acceptedAnswer": { "@type": "Answer", "text": "Your data stays in your accounts. NDA before any demo. Architecture walk-through available on a call." } }
    ]
  }
  </script>

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?= $GA_ID ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?= $GA_ID ?>');
  </script>
</head>
<body class="bg-neutral-950 text-neutral-100 font-sans antialiased selection:bg-emerald-500/30 selection:text-white">

  <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:bg-emerald-500 focus:text-neutral-950 focus:px-3 focus:py-2 focus:rounded">Skip to content</a>

  <!-- ============== Nav ============== -->
  <nav id="nav" class="fixed top-0 inset-x-0 z-50 transition-all duration-300">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
      <a href="/" class="flex items-center gap-2 font-semibold tracking-tight">
        <span class="relative flex h-2.5 w-2.5">
          <span class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping"></span>
          <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
        </span>
        Krishna Pallapolu
      </a>
      <a href="<?= wa($WHATSAPP_NUMBER, 'Hi Krishna, I saw your AI agents page —') ?>"
         data-cta="nav-whatsapp"
         class="group inline-flex items-center gap-2 text-sm bg-emerald-500 hover:bg-emerald-400 text-neutral-950 font-medium px-4 py-2 rounded-lg shadow-lg shadow-emerald-500/20 hover:shadow-emerald-400/30 transition">
        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19.05 4.91A10 10 0 0 0 12.06 2C6.55 2 2.07 6.48 2.07 11.99c0 1.76.46 3.48 1.34 5L2 22l5.17-1.36a10 10 0 0 0 4.88 1.25h.01c5.5 0 9.98-4.48 9.99-9.99 0-2.67-1.04-5.18-2.93-7.07Zm-7 15.3h-.01a8.3 8.3 0 0 1-4.23-1.16l-.3-.18-3.07.81.82-3-.2-.31a8.3 8.3 0 0 1-1.27-4.4c0-4.59 3.74-8.33 8.33-8.33a8.3 8.3 0 0 1 8.32 8.33c0 4.6-3.73 8.24-8.33 8.24Zm4.57-6.18c-.25-.13-1.48-.73-1.7-.81-.23-.08-.4-.13-.56.12-.17.25-.65.81-.8.98-.14.17-.3.19-.55.06-.25-.13-1.05-.39-2-1.23-.74-.66-1.24-1.47-1.38-1.72-.14-.25-.02-.39.11-.51.11-.11.25-.3.37-.45.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.55-1.34-.76-1.84-.2-.48-.4-.41-.55-.42-.14 0-.31-.02-.47-.02-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.43 1.03 2.6.13.17 1.78 2.72 4.32 3.81.6.26 1.07.42 1.43.54.6.19 1.15.16 1.58.1.48-.07 1.48-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.23-.17-.48-.3Z"/></svg>
        WhatsApp me
      </a>
    </div>
  </nav>

  <main id="main" class="pt-24">

  <!-- ============== Hero ============== -->
  <section class="relative overflow-hidden">
    <!-- Vector backgrounds -->
    <div aria-hidden="true" class="absolute inset-0 bg-radial-emerald pointer-events-none"></div>
    <div aria-hidden="true" class="absolute inset-0 bg-dot-grid bg-[length:22px_22px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_40%,#000_30%,transparent_75%)] pointer-events-none"></div>
    <div aria-hidden="true" class="absolute -top-32 -left-32 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl animate-pulse-slow pointer-events-none"></div>
    <div aria-hidden="true" class="absolute -top-20 -right-20 h-80 w-80 rounded-full bg-emerald-400/10 blur-3xl animate-float pointer-events-none"></div>

    <div class="relative max-w-5xl mx-auto px-6 pt-20 pb-24">
      <div class="inline-flex items-center gap-2 rounded-full border border-emerald-500/30 bg-emerald-500/5 px-3 py-1 text-xs font-medium text-emerald-300 mb-8">
        <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
        Booking 2 builds for <?= date('F Y', strtotime('+1 month')) ?>
      </div>

      <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold tracking-tight leading-[1.05]">
        Stop losing leads,<br class="hidden sm:block"> missing calls, and
        <span class="bg-gradient-to-r from-emerald-300 via-emerald-400 to-emerald-500 bg-clip-text text-transparent">drowning in manual work.</span>
      </h1>

      <p class="mt-8 text-lg md:text-xl text-neutral-400 leading-relaxed max-w-3xl">
        I build AI agents for Dubai SMEs — voice agents that answer your phone, WhatsApp responders that qualify leads at 2 am, and document automations that replace data entry. <span class="text-neutral-200">Live in your business in 2 weeks.</span>
      </p>

      <div class="mt-10 flex flex-col sm:flex-row gap-3">
        <a href="<?= wa($WHATSAPP_NUMBER, 'Hi Krishna, I’d like to talk about an AI agent for my business.') ?>"
           data-cta="hero-whatsapp"
           class="group inline-flex items-center justify-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-neutral-950 font-semibold px-7 py-3.5 rounded-lg shadow-xl shadow-emerald-500/25 hover:shadow-emerald-400/40 hover:-translate-y-0.5 transition">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19.05 4.91A10 10 0 0 0 12.06 2C6.55 2 2.07 6.48 2.07 11.99c0 1.76.46 3.48 1.34 5L2 22l5.17-1.36a10 10 0 0 0 4.88 1.25h.01c5.5 0 9.98-4.48 9.99-9.99 0-2.67-1.04-5.18-2.93-7.07Z"/></svg>
          WhatsApp me
          <svg class="h-4 w-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
        </a>
        <a href="mailto:<?= $EMAIL ?>?subject=<?= rawurlencode('AI agent for my business') ?>"
           data-cta="hero-email"
           class="inline-flex items-center justify-center gap-2 border border-neutral-700 hover:border-neutral-500 hover:bg-neutral-900/50 text-neutral-100 px-7 py-3.5 rounded-lg transition">
          Email instead
        </a>
      </div>

      <p class="mt-6 text-sm text-neutral-500">Fixed prices · No long contracts · Working demo before you pay · Prices exclude 5% VAT</p>

      <!-- Stat row -->
      <dl class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6 border-t border-neutral-800 pt-10">
        <div>
          <dt class="text-xs uppercase tracking-wider text-neutral-500">Live in</dt>
          <dd class="mt-1 text-2xl font-semibold text-neutral-100">2 weeks</dd>
        </div>
        <div>
          <dt class="text-xs uppercase tracking-wider text-neutral-500">Reply time</dt>
          <dd class="mt-1 text-2xl font-semibold text-neutral-100">&lt; 60 sec</dd>
        </div>
        <div>
          <dt class="text-xs uppercase tracking-wider text-neutral-500">Coverage</dt>
          <dd class="mt-1 text-2xl font-semibold text-neutral-100">24 / 7</dd>
        </div>
        <div>
          <dt class="text-xs uppercase tracking-wider text-neutral-500">Cancel</dt>
          <dd class="mt-1 text-2xl font-semibold text-neutral-100">Any time</dd>
        </div>
      </dl>
    </div>
  </section>

  <!-- ============== Services ============== -->
  <section id="services" class="relative">
    <div aria-hidden="true" class="absolute inset-0 bg-dot-grid bg-[length:32px_32px] opacity-30 [mask-image:linear-gradient(to_bottom,transparent,#000_15%,#000_85%,transparent)] pointer-events-none"></div>

    <div class="relative max-w-6xl mx-auto px-6 py-24">
      <div class="reveal max-w-2xl">
        <p class="text-xs uppercase tracking-[0.2em] text-emerald-400 font-semibold mb-3">What I build</p>
        <h2 class="text-3xl md:text-4xl font-bold tracking-tight">Five productized AI agents.</h2>
        <p class="mt-3 text-neutral-400">Pick the one that hurts most. Fixed scope, fixed price, working demo before you commit.</p>
      </div>

      <?php
        $services = [
          [
            'title' => '24/7 WhatsApp Lead Responder',
            'body'  => 'Every enquiry — WhatsApp, Instagram DM, web form — answered in under 60 seconds, any hour. Qualifies the lead, books a meeting on your calendar, hands hot ones to your sales team.',
            'build' => '10,000', 'monthly' => '2,000',
            'icon'  => '<path d="M19.05 4.91A10 10 0 0 0 12.06 2C6.55 2 2.07 6.48 2.07 11.99c0 1.76.46 3.48 1.34 5L2 22l5.17-1.36a10 10 0 0 0 4.88 1.25h.01c5.5 0 9.98-4.48 9.99-9.99 0-2.67-1.04-5.18-2.93-7.07Z"/>',
          ],
          [
            'title' => 'AI Voice Agent for Your Phone',
            'body'  => 'Picks up calls your team misses. Books appointments. Answers FAQs in a natural voice. Sends a WhatsApp confirmation before the customer hangs up.',
            'build' => '12,000', 'monthly' => '2,500',
            'icon'  => '<path d="M20 15.5c-1.2 0-2.4-.2-3.6-.6a1 1 0 0 0-1 .2l-2.2 2.2a15 15 0 0 1-6.6-6.6l2.2-2.2a1 1 0 0 0 .2-1A11.4 11.4 0 0 1 8.4 4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1c0 9.4 7.6 17 17 17a1 1 0 0 0 1-1v-3.4a1 1 0 0 0-1-1Z"/>',
          ],
          [
            'title' => 'Document → Data, in seconds',
            'body'  => 'Forward an invoice, Emirates ID, contract, or delivery note to one address. Structured data lands in your system. Stop paying someone to type.',
            'build' => '10,000', 'monthly' => '1,500',
            'icon'  => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6Zm-1 7V3.5L18.5 9H13Z"/>',
          ],
          [
            'title' => 'WhatsApp Support Agent',
            'body'  => 'Trained on your products, hours, and FAQs. Answers customers 24/7 in your tone. Escalates to a human only when it genuinely should.',
            'build' => '10,000', 'monthly' => '2,000',
            'icon'  => '<path d="M21 12c0 4.97-4.03 9-9 9-1.41 0-2.74-.32-3.93-.9L3 21l1-4a9 9 0 1 1 17-5Zm-13 1.5h2v-2H8v2Zm4 0h2v-2h-2v2Zm4 0h2v-2h-2v2Z"/>',
          ],
          [
            'title' => 'Weekly Auto-Report (in plain English)',
            'body'  => 'Every Monday 8 am, a one-page narrative report on your WhatsApp: revenue, top products, customers you lost, things to look at. No dashboards. No spreadsheets.',
            'build' => '6,000',  'monthly' => '1,500',
            'icon'  => '<path d="M3 12h3v9H3v-9Zm6-7h3v16H9V5Zm6 3h3v13h-3V8Zm6 5h-3v8h3v-8Z"/>',
            'wide'  => true,
          ],
        ];
      ?>

      <div class="mt-12 grid md:grid-cols-2 gap-5">
        <?php foreach ($services as $s): ?>
          <article class="reveal group relative overflow-hidden rounded-2xl border border-neutral-800 bg-neutral-900/40 p-7 transition hover:border-emerald-500/40 hover:-translate-y-1 hover:shadow-2xl hover:shadow-emerald-500/10 <?= !empty($s['wide']) ? 'md:col-span-2' : '' ?>">
            <!-- corner glow -->
            <div aria-hidden="true" class="absolute -top-16 -right-16 h-40 w-40 rounded-full bg-emerald-500/0 group-hover:bg-emerald-500/20 blur-3xl transition-all duration-500"></div>
            <div class="relative flex items-start gap-4">
              <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-400 ring-1 ring-emerald-500/20 group-hover:bg-emerald-500/20 group-hover:ring-emerald-400/40 transition">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><?= $s['icon'] ?></svg>
              </div>
              <div class="min-w-0">
                <h3 class="text-lg font-semibold tracking-tight"><?= htmlspecialchars($s['title']) ?></h3>
                <p class="mt-2 text-neutral-400 leading-relaxed text-sm"><?= htmlspecialchars($s['body']) ?></p>
                <div class="mt-5 flex flex-wrap items-center gap-x-3 gap-y-1 text-sm">
                  <span class="inline-flex items-center rounded-md bg-neutral-800/80 px-2 py-1 text-neutral-200 font-medium">AED <?= $s['build'] ?> <span class="text-neutral-500 ml-1">build</span></span>
                  <span class="inline-flex items-center rounded-md bg-neutral-800/80 px-2 py-1 text-neutral-200 font-medium">AED <?= $s['monthly'] ?>/mo</span>
                </div>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============== How it works ============== -->
  <section id="how" class="relative bg-neutral-900/60 border-y border-neutral-800 overflow-hidden">
    <div aria-hidden="true" class="absolute inset-0 bg-[radial-gradient(80%_60%_at_50%_0%,rgba(16,185,129,0.08),transparent_70%)] pointer-events-none"></div>

    <div class="relative max-w-6xl mx-auto px-6 py-24">
      <div class="reveal max-w-2xl">
        <p class="text-xs uppercase tracking-[0.2em] text-emerald-400 font-semibold mb-3">How it works</p>
        <h2 class="text-3xl md:text-4xl font-bold tracking-tight">From "this might work" to live in 2 weeks.</h2>
      </div>

      <ol class="relative mt-14 grid md:grid-cols-3 gap-10 md:gap-6">
        <!-- connector line -->
        <div aria-hidden="true" class="hidden md:block absolute top-6 left-[16.66%] right-[16.66%] h-px bg-gradient-to-r from-transparent via-emerald-500/40 to-transparent"></div>

        <?php
          $steps = [
            ['01', 'Free 15-min call',         "Tell me which problem hurts most. I'll tell you honestly whether AI can fix it — sometimes it can't, and I'll say so."],
            ['02', 'Live demo within a week',  "I build a working version on a sample of your real data. You see it work before you commit a dirham."],
            ['03', 'Live in 2 weeks',          "Fixed-price build, then a monthly retainer keeps it running and adds new automations over time. Cancel anytime."],
          ];
          foreach ($steps as $st): list($n, $t, $b) = $st;
        ?>
          <li class="reveal relative">
            <div class="relative z-10 flex h-12 w-12 items-center justify-center rounded-full border border-emerald-500/40 bg-neutral-950 font-mono text-sm font-semibold text-emerald-300 shadow-lg shadow-emerald-500/10">
              <?= $n ?>
            </div>
            <h3 class="mt-5 font-semibold text-lg tracking-tight"><?= htmlspecialchars($t) ?></h3>
            <p class="mt-2 text-neutral-400 text-sm leading-relaxed"><?= htmlspecialchars($b) ?></p>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <!-- ============== Why me ============== -->
  <section class="relative">
    <div class="max-w-6xl mx-auto px-6 py-24">
      <div class="reveal max-w-2xl">
        <p class="text-xs uppercase tracking-[0.2em] text-emerald-400 font-semibold mb-3">Why me</p>
        <h2 class="text-3xl md:text-4xl font-bold tracking-tight">No agencies. No juniors. No surprise invoices.</h2>
      </div>

      <?php
        $whys = [
          ['icon' => '<path d="M12 2 4 6v6c0 5 3.4 9.4 8 10 4.6-.6 8-5 8-10V6l-8-4Zm-1 14-3.5-3.5L9 11l2 2 4-4 1.5 1.5L11 16Z"/>',
            'title' => 'Fixed prices, written up front',
            'body'  => "No scope creep, no surprise invoices. You know what you're paying before we start."],
          ['icon' => '<path d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
            'title' => 'Working demo before you pay',
            'body'  => "If it doesn't work on your data, you don't owe me anything."],
          ['icon' => '<path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2c-3.3 0-8 1.7-8 5v1h16v-1c0-3.3-4.7-5-8-5Z"/>',
            'title' => 'I build it, I run it',
            'body'  => 'No account managers, no junior handoffs. You message me directly on WhatsApp.'],
        ];
      ?>

      <div class="mt-12 grid md:grid-cols-3 gap-6">
        <?php foreach ($whys as $w): ?>
          <div class="reveal rounded-2xl border border-neutral-800 bg-neutral-900/30 p-7 hover:border-neutral-700 transition">
            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-400 ring-1 ring-emerald-500/20 mb-5">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><?= $w['icon'] ?></svg>
            </div>
            <h3 class="font-semibold tracking-tight"><?= htmlspecialchars($w['title']) ?></h3>
            <p class="mt-2 text-neutral-400 text-sm leading-relaxed"><?= htmlspecialchars($w['body']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- About strip with avatar -->
      <div class="reveal mt-16 flex flex-col sm:flex-row items-start sm:items-center gap-6 rounded-2xl border border-neutral-800 bg-neutral-900/30 p-6">
        <img src="/favicon.png" alt="Krishna Pallapolu" class="h-16 w-16 rounded-full ring-2 ring-emerald-500/40 object-cover">
        <div>
          <p class="text-sm uppercase tracking-wider text-neutral-500">You're talking to</p>
          <p class="mt-1 text-lg font-semibold">Krishna Pallapolu</p>
          <p class="mt-1 text-neutral-400 text-sm">Full-stack developer based in Dubai. I build the agents myself — no outsourcing, no resellers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== FAQ ============== -->
  <section id="faq" class="relative bg-neutral-900/60 border-y border-neutral-800">
    <div aria-hidden="true" class="absolute inset-0 bg-dot-grid bg-[length:28px_28px] opacity-20 pointer-events-none"></div>
    <div class="relative max-w-3xl mx-auto px-6 py-24">
      <div class="reveal text-center">
        <p class="text-xs uppercase tracking-[0.2em] text-emerald-400 font-semibold mb-3">FAQ</p>
        <h2 class="text-3xl md:text-4xl font-bold tracking-tight">Common questions</h2>
      </div>

      <?php
        $faqs = [
          ["Do I need to be technical to use this?",
           "No. Everything runs in apps you already use — WhatsApp, your phone line, your inbox, your sheets. You don't see the AI; you just see it working."],
          ["What if I cancel?",
           "You cancel. No notice period, no penalty. I'll hand over what's been built if you want to keep it."],
          ["How is this different from hiring a developer?",
           "A developer builds; they don't run. The monthly retainer keeps the automation working, adapts it to your business, and adds new ones over time. Closer to \"AI on staff\" than \"buy software.\""],
          ["What about data privacy?",
           "Your data stays in your accounts. NDA before any demo. Happy to walk through the architecture in detail on a call."],
          ["What if my problem isn't on the list?",
           "Message me on WhatsApp and describe it. If it's a fit, we'll talk. If it isn't, I'll say so — I only take on builds I'm confident will work."],
        ];
      ?>

      <div class="reveal mt-12 divide-y divide-neutral-800 rounded-2xl border border-neutral-800 bg-neutral-950/40 overflow-hidden">
        <?php foreach ($faqs as $i => [$q, $a]): ?>
          <details class="group" <?= $i === 0 ? 'open' : '' ?>>
            <summary class="flex cursor-pointer items-center justify-between gap-4 px-6 py-5 hover:bg-neutral-900/40 transition list-none">
              <span class="font-medium text-neutral-100"><?= htmlspecialchars($q) ?></span>
              <svg class="h-5 w-5 text-emerald-400 shrink-0 transition-transform duration-300 group-open:rotate-180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
            </summary>
            <div class="px-6 pb-5 -mt-1 text-neutral-400 text-sm leading-relaxed">
              <?= htmlspecialchars($a) ?>
            </div>
          </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============== Final CTA ============== -->
  <section class="relative px-6 py-24">
    <div class="reveal relative max-w-4xl mx-auto overflow-hidden rounded-3xl border border-emerald-500/30 bg-gradient-to-br from-emerald-500/10 via-neutral-900 to-neutral-950 p-10 md:p-16 text-center">
      <!-- decorative vector layers -->
      <div aria-hidden="true" class="absolute inset-0 bg-dot-grid bg-[length:24px_24px] opacity-30 pointer-events-none"></div>
      <div aria-hidden="true" class="absolute -top-24 left-1/2 -translate-x-1/2 h-64 w-[36rem] rounded-full bg-emerald-500/20 blur-3xl pointer-events-none"></div>
      <svg aria-hidden="true" class="absolute -bottom-12 -right-12 h-64 w-64 text-emerald-500/10" viewBox="0 0 200 200" fill="currentColor">
        <path d="M100 0a100 100 0 1 0 100 100A100 100 0 0 0 100 0Zm0 180a80 80 0 1 1 80-80 80 80 0 0 1-80 80Zm0-150a70 70 0 1 0 70 70 70 70 0 0 0-70-70Zm0 130a60 60 0 1 1 60-60 60 60 0 0 1-60 60Z"/>
      </svg>

      <div class="relative">
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight leading-tight">
          Pick the problem that hurts most.<br class="hidden sm:block">
          <span class="bg-gradient-to-r from-emerald-300 to-emerald-500 bg-clip-text text-transparent">Let's fix it.</span>
        </h2>
        <p class="mt-5 text-neutral-300 max-w-xl mx-auto">15-minute call, no pitch. If it's not a fit, I'll tell you on the call.</p>

        <div class="mt-10 flex flex-col sm:flex-row gap-3 justify-center">
          <a href="<?= wa($WHATSAPP_NUMBER, 'Hi Krishna, I’d like a free 15-minute call about an AI agent.') ?>"
             data-cta="final-whatsapp"
             class="group inline-flex items-center justify-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-neutral-950 font-semibold px-7 py-3.5 rounded-lg shadow-xl shadow-emerald-500/30 hover:-translate-y-0.5 transition">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19.05 4.91A10 10 0 0 0 12.06 2C6.55 2 2.07 6.48 2.07 11.99c0 1.76.46 3.48 1.34 5L2 22l5.17-1.36a10 10 0 0 0 4.88 1.25h.01c5.5 0 9.98-4.48 9.99-9.99 0-2.67-1.04-5.18-2.93-7.07Z"/></svg>
            WhatsApp me
            <svg class="h-4 w-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
          </a>
          <a href="mailto:<?= $EMAIL ?>?subject=<?= rawurlencode('AI agent for my business') ?>"
             data-cta="final-email"
             class="inline-flex items-center justify-center gap-2 border border-neutral-700 hover:border-neutral-500 hover:bg-neutral-900/60 text-neutral-100 px-7 py-3.5 rounded-lg transition">
            Email instead
          </a>
        </div>
      </div>
    </div>
  </section>

  </main>

  <!-- ============== Footer ============== -->
  <footer class="relative border-t border-neutral-800 py-12">
    <div class="max-w-6xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-neutral-500">
      <p class="flex items-center gap-2">
        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
        &copy; <?= date('Y') ?> Krishna Pallapolu · Dubai
      </p>
      <div class="flex items-center gap-5">
        <a href="https://wa.me/<?= $WHATSAPP_NUMBER ?>" class="hover:text-emerald-400 transition">WhatsApp</a>
        <a href="mailto:<?= $EMAIL ?>" class="hover:text-emerald-400 transition">Email</a>
        <a href="https://skrishnap.com/" class="hover:text-emerald-400 transition">Portfolio</a>
      </div>
    </div>
  </footer>

  <script>
    // Sticky nav blur on scroll
    (function () {
      var nav = document.getElementById('nav');
      var onScroll = function () {
        if (window.scrollY > 8) {
          nav.classList.add('bg-neutral-950/70', 'backdrop-blur-md', 'border-b', 'border-neutral-800/60', 'shadow-lg', 'shadow-black/20');
        } else {
          nav.classList.remove('bg-neutral-950/70', 'backdrop-blur-md', 'border-b', 'border-neutral-800/60', 'shadow-lg', 'shadow-black/20');
        }
      };
      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();
    })();

    // Scroll reveal
    (function () {
      var els = document.querySelectorAll('.reveal');
      if (!('IntersectionObserver' in window) || matchMedia('(prefers-reduced-motion: reduce)').matches) {
        els.forEach(function (e) { e.classList.add('is-visible'); });
        return;
      }
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            io.unobserve(entry.target);
          }
        });
      }, { rootMargin: '0px 0px -10% 0px', threshold: 0.05 });
      els.forEach(function (e) { io.observe(e); });
    })();

    // CTA tracking
    document.querySelectorAll('[data-cta]').forEach(function (el) {
      el.addEventListener('click', function () {
        if (typeof gtag === 'function') {
          gtag('event', 'cta_click', { cta_id: el.dataset.cta });
        }
      });
    });
  </script>

</body>
</html>
