<?php
// ai.skrishnap.com/demo — interactive product demos for the four AI agents.

$WHATSAPP_NUMBER = '971503242537';
$EMAIL           = 'krishna.naidu24@gmail.com';
$SITE_URL        = 'https://ai.skrishnap.com/';
$GA_ID           = 'G-VPZK0V35K0';

function wa(string $number, string $message): string {
    return 'https://wa.me/' . $number . '?text=' . rawurlencode($message);
}

$demos = [
  'lead-responder' => [
    'tab'       => 'Lead Responder',
    'eyebrow'   => 'Demo 01 · WhatsApp',
    'title'     => "She messaged at 11:47 pm. You won the booking by 11:48.",
    'subtitle'  => 'A real-time WhatsApp Business chat. Watch your AI agent qualify a lead and book the appointment before your sales team is even awake.',
    'persona'   => ['initials' => 'RK', 'name' => 'Reem K.',  'status' => 'online'],
    'price'     => ['build' => '4,000', 'monthly' => '500'],
    'service'   => 'WhatsApp Lead Responder',
  ],
  'doc-data' => [
    'tab'       => 'Document → Data',
    'eyebrow'   => 'Demo 02 · OCR + LLM',
    'title'     => 'Forward an invoice. Get structured data 4 seconds later.',
    'subtitle'  => "Click the invoice to send it to the agent. Watch it scan, extract, and drop a structured row into your system — no template setup, no per-vendor configuration.",
    'price'     => ['build' => '3,000', 'monthly' => '450'],
    'service'   => 'Document → Data',
  ],
  'support' => [
    'tab'       => 'Support Agent',
    'eyebrow'   => 'Demo 03 · WhatsApp',
    'title'     => "Answers the easy 80% so your team can handle the 20% that matters.",
    'subtitle'  => 'Trained on your products, hours, and policies. Notice when it escalates to a human — it knows what it doesn\'t know.',
    'persona'   => ['initials' => 'MA', 'name' => 'Marina Salon', 'status' => 'online · AI assist'],
    'price'     => ['build' => '2,500', 'monthly' => '450'],
    'service'   => 'WhatsApp Support Agent',
  ],
  'auto-report' => [
    'tab'       => 'Auto-Report',
    'eyebrow'   => 'Demo 04 · WhatsApp · 8:00 am Monday',
    'title'     => 'One page. Plain English. Every Monday.',
    'subtitle'  => "No dashboards. No spreadsheets. Just the things you actually need to look at this week.",
    'persona'   => ['initials' => 'AI', 'name' => 'Your weekly report', 'status' => 'every Monday at 8 am'],
    'price'     => ['build' => '1,500', 'monthly' => '400'],
    'service'   => 'Weekly Auto-Report',
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#0a0a0a">

  <title>Live Demos — Krishna Pallapolu · AI Agents for Dubai SMEs</title>
  <meta name="description" content="See the four AI agents in action: WhatsApp lead responder, document extraction, support agent, weekly auto-report. Interactive demos, no signup.">
  <link rel="canonical" href="<?= htmlspecialchars($SITE_URL) ?>demo">

  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= htmlspecialchars($SITE_URL) ?>demo">
  <meta property="og:title" content="Live Demos — AI Agents for Dubai SMEs">
  <meta property="og:description" content="Interactive in-browser demos of the four AI agents I build for Dubai SMEs.">
  <meta property="og:image" content="<?= htmlspecialchars($SITE_URL) ?>favicon.png">
  <meta property="og:locale" content="en_AE">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Live Demos — AI Agents for Dubai SMEs">
  <meta name="twitter:description" content="Interactive in-browser demos of the four AI agents I build for Dubai SMEs.">
  <meta name="twitter:image" content="<?= htmlspecialchars($SITE_URL) ?>favicon.png">

  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="apple-touch-icon" href="/favicon.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/styles.css">

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

  <!-- Nav -->
  <nav id="nav" class="fixed top-0 inset-x-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <a href="/" class="flex items-center gap-2 font-semibold tracking-tight">
        <span class="relative flex h-2.5 w-2.5">
          <span class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping"></span>
          <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
        </span>
        Krishna Pallapolu
      </a>
      <div class="flex items-center gap-3">
        <a href="/" class="hidden sm:inline text-sm text-neutral-400 hover:text-neutral-100 transition">← Back</a>
        <a href="<?= wa($WHATSAPP_NUMBER, 'Hi Krishna, I saw the demo page —') ?>"
           data-cta="nav-whatsapp"
           class="inline-flex items-center gap-2 text-sm bg-emerald-500 hover:bg-emerald-400 text-neutral-950 font-medium px-4 py-2 rounded-lg shadow-lg shadow-emerald-500/20 hover:shadow-emerald-400/30 transition">
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19.05 4.91A10 10 0 0 0 12.06 2C6.55 2 2.07 6.48 2.07 11.99c0 1.76.46 3.48 1.34 5L2 22l5.17-1.36a10 10 0 0 0 4.88 1.25h.01c5.5 0 9.98-4.48 9.99-9.99 0-2.67-1.04-5.18-2.93-7.07Z"/></svg>
          WhatsApp
        </a>
      </div>
    </div>
  </nav>

  <main id="main" class="pt-24">

  <!-- Hero -->
  <section class="relative overflow-hidden">
    <div aria-hidden="true" class="absolute inset-0 bg-radial-emerald pointer-events-none"></div>
    <div aria-hidden="true" class="absolute inset-0 bg-dot-grid bg-[length:22px_22px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_30%,#000_30%,transparent_75%)] pointer-events-none"></div>

    <div class="relative max-w-6xl mx-auto px-6 pt-16 pb-12 text-center">
      <p class="text-xs uppercase tracking-[0.2em] text-emerald-400 font-semibold mb-4">Live demos · runs in your browser</p>
      <h1 class="text-4xl md:text-6xl font-bold tracking-tight leading-[1.05]">
        Watch the agents work.<br class="hidden sm:block">
        <span class="bg-gradient-to-r from-emerald-300 via-emerald-400 to-emerald-500 bg-clip-text text-transparent">Then decide.</span>
      </h1>
      <p class="mt-6 text-lg text-neutral-400 max-w-2xl mx-auto">
        Four interactive demos, one per service. No signup, no contact form. If something here would solve your problem, message me and we'll talk.
      </p>
    </div>
  </section>

  <!-- Sticky tabs -->
  <div id="tabs" class="sticky top-[64px] z-40 border-y border-neutral-800 bg-neutral-950/80 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex gap-1 overflow-x-auto py-2 -mx-1 px-1 scrollbar-hide">
        <?php $i = 1; foreach ($demos as $key => $d): ?>
          <a href="#<?= $key ?>"
             data-tab="<?= $key ?>"
             class="tab-link shrink-0 inline-flex items-center gap-2 rounded-full border border-neutral-800 hover:border-neutral-700 px-3 py-1.5 text-sm text-neutral-300 hover:text-neutral-100 transition whitespace-nowrap">
            <span class="font-mono text-xs text-emerald-400/80">0<?= $i ?></span>
            <?= htmlspecialchars($d['tab']) ?>
          </a>
        <?php $i++; endforeach; ?>
      </div>
    </div>
  </div>

  <!-- ============== Demo 1: Lead Responder ============== -->
  <?php $d = $demos['lead-responder']; ?>
  <section id="lead-responder" class="relative scroll-mt-32">
    <div aria-hidden="true" class="absolute inset-0 bg-dot-grid bg-[length:30px_30px] opacity-20 [mask-image:linear-gradient(to_bottom,transparent,#000_15%,#000_85%,transparent)] pointer-events-none"></div>
    <div class="relative max-w-7xl mx-auto px-6 py-20 grid lg:grid-cols-2 gap-12 items-center">
      <div class="reveal">
        <p class="text-xs uppercase tracking-[0.2em] text-emerald-400 font-semibold mb-3"><?= htmlspecialchars($d['eyebrow']) ?></p>
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight leading-[1.1]"><?= htmlspecialchars($d['title']) ?></h2>
        <p class="mt-5 text-neutral-400 leading-relaxed text-lg"><?= htmlspecialchars($d['subtitle']) ?></p>

        <ul class="mt-8 space-y-3 text-sm text-neutral-300">
          <li class="flex gap-3"><span class="text-emerald-400 mt-0.5">✓</span> Replies in &lt; 60 seconds at any hour</li>
          <li class="flex gap-3"><span class="text-emerald-400 mt-0.5">✓</span> Books straight into your calendar</li>
          <li class="flex gap-3"><span class="text-emerald-400 mt-0.5">✓</span> Hands off to a human only when needed</li>
        </ul>

        <div class="mt-10 flex flex-wrap items-center gap-3">
          <button type="button" data-replay="lead-responder"
                  class="inline-flex items-center gap-2 rounded-lg border border-neutral-700 hover:border-emerald-500/60 hover:bg-neutral-900/60 px-4 py-2 text-sm transition">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12a9 9 0 1 0 3-6.7"/><path d="M3 4v5h5"/></svg>
            Replay
          </button>
          <span class="inline-flex items-center rounded-md bg-neutral-900/60 ring-1 ring-neutral-800 px-2.5 py-1 text-xs text-neutral-300">AED <?= $d['price']['build'] ?> build · AED <?= $d['price']['monthly'] ?>/mo</span>
          <a href="<?= wa($WHATSAPP_NUMBER, 'Hi Krishna, I want a WhatsApp Lead Responder for my business.') ?>"
             data-cta="demo-lead-whatsapp"
             class="ml-auto inline-flex items-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-neutral-950 font-semibold px-4 py-2 rounded-lg shadow-lg shadow-emerald-500/20 transition">
            I want this →
          </a>
        </div>
      </div>

      <div class="flex justify-center reveal">
        <div class="phone" data-phone="lead-responder">
          <div class="phone-screen">
            <div class="wa-header">
              <div class="wa-avatar"><?= $d['persona']['initials'] ?></div>
              <div>
                <div class="font-semibold leading-tight"><?= htmlspecialchars($d['persona']['name']) ?></div>
                <div class="wa-status"><?= htmlspecialchars($d['persona']['status']) ?></div>
              </div>
            </div>
            <div class="wa-chat" data-chat="lead-responder"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== Demo 2: Document → Data ============== -->
  <?php $d = $demos['doc-data']; ?>
  <section id="doc-data" class="relative scroll-mt-32 bg-neutral-900/40 border-y border-neutral-800">
    <div aria-hidden="true" class="absolute inset-0 bg-[radial-gradient(80%_60%_at_50%_0%,rgba(16,185,129,0.08),transparent_70%)] pointer-events-none"></div>
    <div class="relative max-w-7xl mx-auto px-6 py-20 grid lg:grid-cols-2 gap-12 items-center">

      <div class="reveal order-2 lg:order-1">
        <p class="text-xs uppercase tracking-[0.2em] text-emerald-400 font-semibold mb-3"><?= htmlspecialchars($d['eyebrow']) ?></p>
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight leading-[1.1]"><?= htmlspecialchars($d['title']) ?></h2>
        <p class="mt-5 text-neutral-400 leading-relaxed text-lg"><?= htmlspecialchars($d['subtitle']) ?></p>

        <ul class="mt-8 space-y-3 text-sm text-neutral-300">
          <li class="flex gap-3"><span class="text-emerald-400 mt-0.5">✓</span> Invoices, Emirates IDs, contracts, delivery notes</li>
          <li class="flex gap-3"><span class="text-emerald-400 mt-0.5">✓</span> No per-vendor template setup</li>
          <li class="flex gap-3"><span class="text-emerald-400 mt-0.5">✓</span> Drops rows into Google Sheets, Airtable, your DB, or email</li>
        </ul>

        <div class="mt-10 flex flex-wrap items-center gap-3">
          <button type="button" data-replay="doc-data"
                  class="inline-flex items-center gap-2 rounded-lg border border-neutral-700 hover:border-emerald-500/60 hover:bg-neutral-900/60 px-4 py-2 text-sm transition">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12a9 9 0 1 0 3-6.7"/><path d="M3 4v5h5"/></svg>
            Re-scan
          </button>
          <span class="inline-flex items-center rounded-md bg-neutral-900/60 ring-1 ring-neutral-800 px-2.5 py-1 text-xs text-neutral-300">AED <?= $d['price']['build'] ?> build · AED <?= $d['price']['monthly'] ?>/mo</span>
          <a href="<?= wa($WHATSAPP_NUMBER, 'Hi Krishna, I want the Document → Data agent. Here is a sample document I want to test:') ?>"
             data-cta="demo-doc-whatsapp"
             class="ml-auto inline-flex items-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-neutral-950 font-semibold px-4 py-2 rounded-lg shadow-lg shadow-emerald-500/20 transition">
            I want this →
          </a>
        </div>
      </div>

      <div class="grid sm:grid-cols-2 gap-4 order-1 lg:order-2 reveal">
        <!-- Document mockup -->
        <div id="doc-paper" class="doc-paper" role="img" aria-label="Sample invoice ready to be scanned">
          <div class="text-[10px] uppercase tracking-wider text-stone-500 mb-2">Invoice · INV-2426</div>
          <div class="font-bold text-base text-stone-900">Al Wasl Trading LLC</div>
          <div class="text-[11px] text-stone-500">TRN: 100123456700003</div>

          <hr class="my-3 border-stone-200">

          <div class="grid grid-cols-2 gap-y-1 text-[11px]">
            <span class="text-stone-500">Date</span>            <span class="text-right doc-field" data-field="date">15 Nov 2026</span>
            <span class="text-stone-500">Due</span>             <span class="text-right doc-field" data-field="due">30 Nov 2026</span>
            <span class="text-stone-500">Customer</span>        <span class="text-right doc-field" data-field="customer">Marina Pediatric Clinic</span>
          </div>

          <hr class="my-3 border-stone-200">

          <div class="text-[11px] space-y-1">
            <div class="flex justify-between"><span class="doc-field" data-field="item1">Consumables — pack of 24</span> <span class="doc-field" data-field="amount1">AED 1,250.00</span></div>
            <div class="flex justify-between"><span class="doc-field" data-field="item2">Stationery resupply</span>      <span class="doc-field" data-field="amount2">AED 420.00</span></div>
          </div>

          <hr class="my-3 border-stone-200">

          <div class="flex justify-between text-[11px]"><span>Subtotal</span><span class="doc-field" data-field="subtotal">AED 1,670.00</span></div>
          <div class="flex justify-between text-[11px]"><span>VAT (5%)</span><span class="doc-field" data-field="vat">AED 83.50</span></div>
          <div class="flex justify-between font-bold text-stone-900 mt-1"><span>Total</span><span class="doc-field" data-field="total">AED 1,753.50</span></div>
        </div>

        <!-- Extracted table -->
        <div class="bg-neutral-950/80 rounded-lg ring-1 ring-neutral-800 p-4 min-h-[280px] flex flex-col">
          <div class="flex items-center justify-between mb-3">
            <div class="text-xs uppercase tracking-wider text-emerald-400 font-semibold">Structured output</div>
            <div id="doc-status" class="text-[10px] text-neutral-500">idle</div>
          </div>
          <div id="doc-extracted" class="space-y-1.5 text-[12px] font-mono">
            <!-- rows injected by JS -->
          </div>
          <div class="mt-auto pt-3 text-[10px] text-neutral-500 border-t border-neutral-800">
            Delivered as: Google Sheet row · Airtable record · webhook · email
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== Demo 3: Support Agent ============== -->
  <?php $d = $demos['support']; ?>
  <section id="support" class="relative scroll-mt-32">
    <div aria-hidden="true" class="absolute inset-0 bg-dot-grid bg-[length:30px_30px] opacity-20 [mask-image:linear-gradient(to_bottom,transparent,#000_15%,#000_85%,transparent)] pointer-events-none"></div>
    <div class="relative max-w-7xl mx-auto px-6 py-20 grid lg:grid-cols-2 gap-12 items-center">

      <div class="flex justify-center reveal order-2 lg:order-1">
        <div class="phone" data-phone="support">
          <div class="phone-screen">
            <div class="wa-header">
              <div class="wa-avatar"><?= $d['persona']['initials'] ?></div>
              <div>
                <div class="font-semibold leading-tight"><?= htmlspecialchars($d['persona']['name']) ?></div>
                <div class="wa-status"><?= htmlspecialchars($d['persona']['status']) ?></div>
              </div>
            </div>
            <div class="wa-chat" data-chat="support"></div>
          </div>
        </div>
      </div>

      <div class="reveal order-1 lg:order-2">
        <p class="text-xs uppercase tracking-[0.2em] text-emerald-400 font-semibold mb-3"><?= htmlspecialchars($d['eyebrow']) ?></p>
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight leading-[1.1]"><?= htmlspecialchars($d['title']) ?></h2>
        <p class="mt-5 text-neutral-400 leading-relaxed text-lg"><?= htmlspecialchars($d['subtitle']) ?></p>

        <ul class="mt-8 space-y-3 text-sm text-neutral-300">
          <li class="flex gap-3"><span class="text-emerald-400 mt-0.5">✓</span> Answers in your tone, your hours, your policies</li>
          <li class="flex gap-3"><span class="text-emerald-400 mt-0.5">✓</span> Knows when to escalate — never invents answers</li>
          <li class="flex gap-3"><span class="text-emerald-400 mt-0.5">✓</span> Trained on your documents in &lt; 1 day</li>
        </ul>

        <div class="mt-10 flex flex-wrap items-center gap-3">
          <button type="button" data-replay="support"
                  class="inline-flex items-center gap-2 rounded-lg border border-neutral-700 hover:border-emerald-500/60 hover:bg-neutral-900/60 px-4 py-2 text-sm transition">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12a9 9 0 1 0 3-6.7"/><path d="M3 4v5h5"/></svg>
            Replay
          </button>
          <span class="inline-flex items-center rounded-md bg-neutral-900/60 ring-1 ring-neutral-800 px-2.5 py-1 text-xs text-neutral-300">AED <?= $d['price']['build'] ?> build · AED <?= $d['price']['monthly'] ?>/mo</span>
          <a href="<?= wa($WHATSAPP_NUMBER, 'Hi Krishna, I want a WhatsApp Support Agent for my business.') ?>"
             data-cta="demo-support-whatsapp"
             class="ml-auto inline-flex items-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-neutral-950 font-semibold px-4 py-2 rounded-lg shadow-lg shadow-emerald-500/20 transition">
            I want this →
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== Demo 4: Auto-Report ============== -->
  <?php $d = $demos['auto-report']; ?>
  <section id="auto-report" class="relative scroll-mt-32 bg-neutral-900/40 border-y border-neutral-800">
    <div aria-hidden="true" class="absolute inset-0 bg-[radial-gradient(80%_60%_at_50%_0%,rgba(16,185,129,0.08),transparent_70%)] pointer-events-none"></div>
    <div class="relative max-w-7xl mx-auto px-6 py-20 grid lg:grid-cols-2 gap-12 items-center">

      <div class="reveal">
        <p class="text-xs uppercase tracking-[0.2em] text-emerald-400 font-semibold mb-3"><?= htmlspecialchars($d['eyebrow']) ?></p>
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight leading-[1.1]"><?= htmlspecialchars($d['title']) ?></h2>
        <p class="mt-5 text-neutral-400 leading-relaxed text-lg"><?= htmlspecialchars($d['subtitle']) ?></p>

        <ul class="mt-8 space-y-3 text-sm text-neutral-300">
          <li class="flex gap-3"><span class="text-emerald-400 mt-0.5">✓</span> Pulls from your POS, sheet, CRM, or Stripe</li>
          <li class="flex gap-3"><span class="text-emerald-400 mt-0.5">✓</span> Highlights what changed since last week</li>
          <li class="flex gap-3"><span class="text-emerald-400 mt-0.5">✓</span> Flags customers who quietly dropped off</li>
        </ul>

        <div class="mt-10 flex flex-wrap items-center gap-3">
          <button type="button" data-replay="auto-report"
                  class="inline-flex items-center gap-2 rounded-lg border border-neutral-700 hover:border-emerald-500/60 hover:bg-neutral-900/60 px-4 py-2 text-sm transition">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12a9 9 0 1 0 3-6.7"/><path d="M3 4v5h5"/></svg>
            Replay
          </button>
          <span class="inline-flex items-center rounded-md bg-neutral-900/60 ring-1 ring-neutral-800 px-2.5 py-1 text-xs text-neutral-300">AED <?= $d['price']['build'] ?> build · AED <?= $d['price']['monthly'] ?>/mo</span>
          <a href="<?= wa($WHATSAPP_NUMBER, 'Hi Krishna, I want the Weekly Auto-Report.') ?>"
             data-cta="demo-report-whatsapp"
             class="ml-auto inline-flex items-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-neutral-950 font-semibold px-4 py-2 rounded-lg shadow-lg shadow-emerald-500/20 transition">
            I want this →
          </a>
        </div>
      </div>

      <div class="flex justify-center reveal">
        <div class="phone" data-phone="auto-report">
          <div class="phone-screen">
            <div class="wa-header">
              <div class="wa-avatar"><?= $d['persona']['initials'] ?></div>
              <div>
                <div class="font-semibold leading-tight"><?= htmlspecialchars($d['persona']['name']) ?></div>
                <div class="wa-status"><?= htmlspecialchars($d['persona']['status']) ?></div>
              </div>
            </div>
            <div class="wa-chat" data-chat="auto-report"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Final CTA -->
  <section class="relative px-6 py-24">
    <div class="reveal relative max-w-5xl mx-auto overflow-hidden rounded-3xl border border-emerald-500/30 bg-gradient-to-br from-emerald-500/10 via-neutral-900 to-neutral-950 p-10 md:p-16 text-center">
      <div aria-hidden="true" class="absolute inset-0 bg-dot-grid bg-[length:24px_24px] opacity-30 pointer-events-none"></div>
      <div aria-hidden="true" class="absolute -top-24 left-1/2 -translate-x-1/2 h-64 w-[36rem] rounded-full bg-emerald-500/20 blur-3xl pointer-events-none"></div>
      <div class="relative">
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight leading-tight">
          See one that fits?<br class="hidden sm:block">
          <span class="bg-gradient-to-r from-emerald-300 to-emerald-500 bg-clip-text text-transparent">Let's get yours live.</span>
        </h2>
        <p class="mt-5 text-neutral-300 max-w-xl mx-auto">Working demo on your real data within a week. Live in your business in two.</p>
        <div class="mt-10 flex flex-col sm:flex-row gap-3 justify-center">
          <a href="<?= wa($WHATSAPP_NUMBER, 'Hi Krishna, I saw your demos. I’d like to talk about one for my business.') ?>"
             data-cta="final-whatsapp"
             class="group inline-flex items-center justify-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-neutral-950 font-semibold px-7 py-3.5 rounded-lg shadow-xl shadow-emerald-500/30 hover:-translate-y-0.5 transition">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19.05 4.91A10 10 0 0 0 12.06 2C6.55 2 2.07 6.48 2.07 11.99c0 1.76.46 3.48 1.34 5L2 22l5.17-1.36a10 10 0 0 0 4.88 1.25h.01c5.5 0 9.98-4.48 9.99-9.99 0-2.67-1.04-5.18-2.93-7.07Z"/></svg>
            Start the conversation
            <svg class="h-4 w-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
          </a>
          <a href="/" class="inline-flex items-center justify-center gap-2 border border-neutral-700 hover:border-neutral-500 hover:bg-neutral-900/60 text-neutral-100 px-7 py-3.5 rounded-lg transition">
            ← Back to services
          </a>
        </div>
      </div>
    </div>
  </section>

  </main>

  <footer class="relative border-t border-neutral-800 py-12">
    <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-neutral-500">
      <p class="flex items-center gap-2">
        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
        &copy; <?= date('Y') ?> Krishna Pallapolu · Dubai
      </p>
      <div class="flex items-center gap-5">
        <a href="/" class="hover:text-emerald-400 transition">Services</a>
        <a href="https://wa.me/<?= $WHATSAPP_NUMBER ?>" class="hover:text-emerald-400 transition">WhatsApp</a>
        <a href="mailto:<?= $EMAIL ?>" class="hover:text-emerald-400 transition">Email</a>
      </div>
    </div>
  </footer>

  <script>
    /* ============== Demo scripts (data) ============== */
    const SCRIPTS = {
      'lead-responder': [
        { from: 'them', text: 'Hi, are you open tomorrow? I want a check-up for my 8-year-old.', delay: 600 },
        { from: 'us',   text: 'Hi! Yes we are — 9 am to 6 pm tomorrow. Dr. Sara has 10:30 am or 2 pm free. Which works better for you?', typingMs: 1400, delay: 700 },
        { from: 'them', text: '10:30 please', delay: 1500 },
        { from: 'us',   text: 'Booked ✅ Dr. Sara at 10:30 tomorrow. I just sent the confirmation. Anything I should let her know in advance?', typingMs: 1600, delay: 600 },
        { from: 'them', text: 'No allergies, just a routine check.', delay: 1800 },
        { from: 'us',   text: 'Noted in your file. See you tomorrow, Reem 👋', typingMs: 1100, delay: 600 },
      ],
      'support': [
        { from: 'them', text: 'What time do you close on Friday?', delay: 600 },
        { from: 'us',   text: 'Friday hours are 10 am – 4 pm (we close earlier for Jummah). Saturday we’re open 9 am – 8 pm 👍', typingMs: 1300, delay: 700 },
        { from: 'them', text: 'Do you do balayage for short hair?', delay: 1600 },
        { from: 'us',   text: 'Yes — short-hair balayage starts at AED 450 with Lina or Maya. Takes about 90 min. Want me to check availability this week?', typingMs: 1500, delay: 600 },
        { from: 'them', text: 'My friend got a refund for a bad cut last month — can I get the same?', delay: 1800 },
        { from: 'us',   text: 'That’s a billing decision I shouldn’t make on my own. Connecting you to the manager now — she’ll reply within the hour 🙏', typingMs: 1800, delay: 600 },
        { from: 'them', text: 'Thanks!', delay: 1000 },
      ],
      'auto-report': [
        { from: 'them', text: '📊  Weekly report · Week 46', delay: 400 },
        { from: 'them', text: 'Revenue this week: **AED 84,200** — up 12% on last week, your best Mon–Sun since October.', delay: 700 },
        { from: 'them', text: 'Top product: *Hair colour package* (32 sold, AED 14,400). Lina booked 19 of those — give her a shout 👏', delay: 800 },
        { from: 'them', text: '⚠️ 3 regulars haven’t booked in 45+ days: Aisha M., Reem K., Layla S. Worth a quick check-in.', delay: 900 },
        { from: 'them', text: 'Walk-ins were down 22% Tue + Wed afternoons — same days the Sheikh Zayed Rd was closed for the marathon. Probably temporary.', delay: 1000 },
        { from: 'them', text: 'Stock: Kerastase shampoo 250ml is at 4 units, reorder point is 6. Suggest order today.', delay: 900 },
        { from: 'them', text: 'No urgent issues. Have a good Monday 🌿', delay: 800 },
      ],
    };

    /* ============== Chat replay engine ============== */
    function nowHM() {
      const d = new Date();
      return d.getHours().toString().padStart(2, '0') + ':' + d.getMinutes().toString().padStart(2, '0');
    }
    function makeBubble(side, text) {
      const b = document.createElement('div');
      b.className = 'bubble ' + side;
      const html = text
        .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
        .replace(/\*\*([^*]+)\*\*/g, '<strong>$1</strong>')
        .replace(/\*([^*]+)\*/g, '<em>$1</em>');
      b.innerHTML = html + '<span class="time">' + nowHM() + '</span>';
      return b;
    }
    function makeTyping() {
      const t = document.createElement('div');
      t.className = 'typing';
      t.innerHTML = '<span></span><span></span><span></span>';
      return t;
    }
    function sleep(ms) { return new Promise(r => setTimeout(r, ms)); }

    async function playChat(key) {
      const chat = document.querySelector('[data-chat="' + key + '"]');
      if (!chat) return;
      chat.innerHTML = '';
      const script = SCRIPTS[key] || [];
      for (const step of script) {
        await sleep(step.delay || 600);
        if (step.from === 'us' && step.typingMs) {
          const t = makeTyping();
          chat.appendChild(t);
          chat.scrollTop = chat.scrollHeight;
          await sleep(step.typingMs);
          t.remove();
        }
        const b = makeBubble(step.from, step.text);
        chat.appendChild(b);
        chat.scrollTop = chat.scrollHeight;
      }
    }

    /* ============== Document → Data engine ============== */
    const DOC_FIELDS = [
      ['date',     'date',         '2026-11-15'],
      ['due',      'due_date',     '2026-11-30'],
      ['customer', 'customer',     'Marina Pediatric Clinic'],
      ['item1',    'line_1',       'Consumables — pack of 24'],
      ['amount1',  'line_1_total', 'AED 1,250.00'],
      ['item2',    'line_2',       'Stationery resupply'],
      ['amount2',  'line_2_total', 'AED 420.00'],
      ['subtotal', 'subtotal',     'AED 1,670.00'],
      ['vat',      'vat',          'AED 83.50'],
      ['total',    'total',        'AED 1,753.50'],
    ];
    async function playDocExtract() {
      const paper = document.getElementById('doc-paper');
      const out   = document.getElementById('doc-extracted');
      const stat  = document.getElementById('doc-status');
      if (!paper || !out || !stat) return;
      out.innerHTML = '';
      paper.querySelectorAll('.doc-field').forEach(el => el.classList.remove('hit'));
      paper.classList.add('scanning');
      stat.textContent = 'scanning…';
      await sleep(700);
      for (const [field, key, value] of DOC_FIELDS) {
        const src = paper.querySelector('[data-field="' + field + '"]');
        if (src) src.classList.add('hit');
        const row = document.createElement('div');
        row.className = 'extract-row flex justify-between gap-3';
        row.innerHTML = '<span class="text-neutral-500">' + key + '</span><span class="text-emerald-300">' + value + '</span>';
        out.appendChild(row);
        requestAnimationFrame(() => row.classList.add('in'));
        await sleep(340);
      }
      paper.classList.remove('scanning');
      stat.innerHTML = '<span class="text-emerald-400">✓ delivered · 3.4s</span>';
    }

    /* ============== Replay controls ============== */
    function bindReplay() {
      document.querySelectorAll('[data-replay]').forEach(btn => {
        btn.addEventListener('click', () => {
          const key = btn.dataset.replay;
          if (key === 'doc-data') playDocExtract();
          else playChat(key);
          if (typeof gtag === 'function') gtag('event', 'demo_replay', { demo_id: key });
        });
      });
    }

    /* ============== Auto-play when scrolled into view (once) ============== */
    function bindAutoplay() {
      if (!('IntersectionObserver' in window)) {
        playChat('lead-responder'); playDocExtract();
        playChat('support'); playChat('auto-report');
        return;
      }
      const reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;
      const seen = new Set();
      const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
          if (!e.isIntersecting) return;
          const id = e.target.id;
          if (seen.has(id)) return;
          seen.add(id);
          if (id === 'doc-data')      reduced ? null : playDocExtract();
          else if (SCRIPTS[id])       reduced ? null : playChat(id);
        });
      }, { threshold: 0.35 });
      ['lead-responder','doc-data','support','auto-report'].forEach(id => {
        const el = document.getElementById(id);
        if (el) io.observe(el);
      });
    }

    /* ============== Sticky tab active state ============== */
    function bindTabs() {
      const tabs = document.querySelectorAll('.tab-link');
      const sections = ['lead-responder','doc-data','support','auto-report']
        .map(id => document.getElementById(id)).filter(Boolean);
      const setActive = id => {
        tabs.forEach(t => {
          const on = t.dataset.tab === id;
          t.classList.toggle('bg-emerald-500/10', on);
          t.classList.toggle('border-emerald-500/40', on);
          t.classList.toggle('text-emerald-300', on);
        });
      };
      const io = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) setActive(e.target.id); });
      }, { rootMargin: '-40% 0px -55% 0px' });
      sections.forEach(s => io.observe(s));
    }

    /* ============== Nav blur on scroll (shared with landing) ============== */
    (function () {
      const nav = document.getElementById('nav');
      const onScroll = () => {
        if (window.scrollY > 8) nav.classList.add('bg-neutral-950/70','backdrop-blur-md','border-b','border-neutral-800/60','shadow-lg','shadow-black/20');
        else                    nav.classList.remove('bg-neutral-950/70','backdrop-blur-md','border-b','border-neutral-800/60','shadow-lg','shadow-black/20');
      };
      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();
    })();

    /* ============== Scroll reveal ============== */
    (function () {
      const els = document.querySelectorAll('.reveal');
      if (!('IntersectionObserver' in window) || matchMedia('(prefers-reduced-motion: reduce)').matches) {
        els.forEach(e => e.classList.add('is-visible'));
        return;
      }
      const io = new IntersectionObserver(es => {
        es.forEach(e => {
          if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
        });
      }, { rootMargin: '0px 0px -10% 0px', threshold: 0.05 });
      els.forEach(e => io.observe(e));
    })();

    /* ============== CTA tracking ============== */
    document.querySelectorAll('[data-cta]').forEach(el => {
      el.addEventListener('click', () => {
        if (typeof gtag === 'function') gtag('event', 'cta_click', { cta_id: el.dataset.cta });
      });
    });

    /* boot */
    bindReplay();
    bindAutoplay();
    bindTabs();
  </script>

</body>
</html>
