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
  <meta property="og:image" content="<?= htmlspecialchars($SITE_URL) ?>og.jpg">
  <meta property="og:locale" content="en_AE">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="AI Agents for Dubai SMEs — Krishna Pallapolu">
  <meta name="twitter:description" content="Voice agents, WhatsApp responders, document automations for Dubai SMEs. Live in 2 weeks.">
  <meta name="twitter:image" content="https://ai.skrishnap.com/og.jpg">

  <!-- Favicon -->
  <link rel="icon" type="image/jpeg" href="/favicon.jpg">
  <link rel="apple-touch-icon" href="/favicon.jpg">

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
<body class="bg-neutral-950 text-neutral-100 font-sans antialiased">

  <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:bg-emerald-500 focus:text-neutral-950 focus:px-3 focus:py-2 focus:rounded">Skip to content</a>

  <!-- Nav -->
  <nav class="border-b border-neutral-800">
    <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center">
      <a href="/" class="font-semibold">Krishna Pallapolu</a>
      <a href="<?= wa($WHATSAPP_NUMBER, 'Hi Krishna, I saw your AI agents page —') ?>"
         data-cta="nav-whatsapp"
         class="text-sm bg-emerald-500 hover:bg-emerald-400 text-neutral-950 font-medium px-4 py-2 rounded-lg transition">
        WhatsApp me
      </a>
    </div>
  </nav>

  <main id="main">

  <!-- Hero -->
  <section class="max-w-4xl mx-auto px-6 pt-20 pb-16">
    <h1 class="text-4xl md:text-6xl font-bold tracking-tight leading-tight">
      Stop losing leads, missing calls, and drowning in manual work.
    </h1>
    <p class="mt-6 text-lg md:text-xl text-neutral-400 leading-relaxed max-w-3xl">
      I build AI agents for Dubai SMEs — voice agents that answer your phone, WhatsApp responders that qualify leads at 2 am, and document automations that replace data entry. Live in your business in 2 weeks.
    </p>
    <div class="mt-10 flex flex-col sm:flex-row gap-3">
      <a href="<?= wa($WHATSAPP_NUMBER, 'Hi Krishna, I’d like to talk about an AI agent for my business.') ?>"
         data-cta="hero-whatsapp"
         class="bg-emerald-500 hover:bg-emerald-400 text-neutral-950 font-semibold px-6 py-3 rounded-lg text-center transition">
        WhatsApp me
      </a>
      <a href="mailto:<?= $EMAIL ?>?subject=<?= rawurlencode('AI agent for my business') ?>"
         data-cta="hero-email"
         class="border border-neutral-700 hover:border-neutral-500 px-6 py-3 rounded-lg text-center transition">
        Email instead
      </a>
    </div>
    <p class="mt-5 text-sm text-neutral-500">Fixed prices. No long contracts. Working demo before you pay anything. Prices exclude 5% VAT.</p>
  </section>

  <!-- Services -->
  <section class="max-w-5xl mx-auto px-6 py-16">
    <h2 class="text-2xl md:text-3xl font-bold mb-2">What I build</h2>
    <p class="text-neutral-400 mb-10">Five productized AI agents. Pick the one that hurts most.</p>

    <div class="grid md:grid-cols-2 gap-5">
      <article class="border border-neutral-800 rounded-xl p-6 hover:border-neutral-700 transition">
        <h3 class="text-xl font-semibold">24/7 WhatsApp Lead Responder</h3>
        <p class="mt-3 text-neutral-400 leading-relaxed">Every enquiry — WhatsApp, Instagram DM, web form — answered in under 60 seconds, any hour. Qualifies the lead, books a meeting on your calendar, hands hot ones to your sales team.</p>
        <p class="mt-5 text-sm"><span class="text-neutral-500">From</span> <span class="text-neutral-200 font-medium">AED 10,000 build</span> <span class="text-neutral-500">·</span> <span class="text-neutral-200 font-medium">AED 2,000/mo</span></p>
      </article>

      <article class="border border-neutral-800 rounded-xl p-6 hover:border-neutral-700 transition">
        <h3 class="text-xl font-semibold">AI Voice Agent for Your Phone</h3>
        <p class="mt-3 text-neutral-400 leading-relaxed">Picks up calls your team misses. Books appointments. Answers FAQs in a natural voice. Sends a WhatsApp confirmation before the customer hangs up.</p>
        <p class="mt-5 text-sm"><span class="text-neutral-500">From</span> <span class="text-neutral-200 font-medium">AED 12,000 build</span> <span class="text-neutral-500">·</span> <span class="text-neutral-200 font-medium">AED 2,500/mo</span></p>
      </article>

      <article class="border border-neutral-800 rounded-xl p-6 hover:border-neutral-700 transition">
        <h3 class="text-xl font-semibold">Document → Data, in seconds</h3>
        <p class="mt-3 text-neutral-400 leading-relaxed">Forward an invoice, Emirates ID, contract, or delivery note to one address. Structured data lands in your system. Stop paying someone to type.</p>
        <p class="mt-5 text-sm"><span class="text-neutral-500">From</span> <span class="text-neutral-200 font-medium">AED 10,000 build</span> <span class="text-neutral-500">·</span> <span class="text-neutral-200 font-medium">AED 1,500/mo</span></p>
      </article>

      <article class="border border-neutral-800 rounded-xl p-6 hover:border-neutral-700 transition">
        <h3 class="text-xl font-semibold">WhatsApp Support Agent</h3>
        <p class="mt-3 text-neutral-400 leading-relaxed">Trained on your products, hours, and FAQs. Answers customers 24/7 in your tone. Escalates to a human only when it genuinely should.</p>
        <p class="mt-5 text-sm"><span class="text-neutral-500">From</span> <span class="text-neutral-200 font-medium">AED 10,000 build</span> <span class="text-neutral-500">·</span> <span class="text-neutral-200 font-medium">AED 2,000/mo</span></p>
      </article>

      <article class="border border-neutral-800 rounded-xl p-6 hover:border-neutral-700 transition md:col-span-2">
        <h3 class="text-xl font-semibold">Weekly Auto-Report (in plain English)</h3>
        <p class="mt-3 text-neutral-400 leading-relaxed">Every Monday 8 am, a one-page narrative report on your WhatsApp: revenue, top products, customers you lost, things to look at. No dashboards. No spreadsheets.</p>
        <p class="mt-5 text-sm"><span class="text-neutral-500">From</span> <span class="text-neutral-200 font-medium">AED 6,000 build</span> <span class="text-neutral-500">·</span> <span class="text-neutral-200 font-medium">AED 1,500/mo</span></p>
      </article>
    </div>
  </section>

  <!-- How it works -->
  <section class="bg-neutral-900 border-y border-neutral-800">
    <div class="max-w-4xl mx-auto px-6 py-16">
      <h2 class="text-2xl md:text-3xl font-bold mb-10">How it works</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div>
          <div class="text-emerald-500 font-mono text-sm mb-2">01</div>
          <h3 class="font-semibold mb-2">Free 15-min call</h3>
          <p class="text-neutral-400 text-sm leading-relaxed">Tell me which problem hurts most. I tell you honestly whether AI can fix it — sometimes it can't, and I'll say so.</p>
        </div>
        <div>
          <div class="text-emerald-500 font-mono text-sm mb-2">02</div>
          <h3 class="font-semibold mb-2">Live demo within a week</h3>
          <p class="text-neutral-400 text-sm leading-relaxed">I build a working version on a sample of your real data. You see it work before you commit a dirham.</p>
        </div>
        <div>
          <div class="text-emerald-500 font-mono text-sm mb-2">03</div>
          <h3 class="font-semibold mb-2">Live in 2 weeks</h3>
          <p class="text-neutral-400 text-sm leading-relaxed">Fixed-price build, then a monthly retainer keeps it running and adds new automations over time. Cancel anytime.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why me -->
  <section class="max-w-4xl mx-auto px-6 py-16">
    <h2 class="text-2xl md:text-3xl font-bold mb-10">Why work with me</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div>
        <h3 class="font-semibold mb-2">Fixed prices, written up front</h3>
        <p class="text-neutral-400 text-sm leading-relaxed">No scope creep, no surprise invoices. You know what you're paying before we start.</p>
      </div>
      <div>
        <h3 class="font-semibold mb-2">Working demo before you pay</h3>
        <p class="text-neutral-400 text-sm leading-relaxed">If it doesn't work on your data, you don't owe me anything.</p>
      </div>
      <div>
        <h3 class="font-semibold mb-2">I build it, I run it</h3>
        <p class="text-neutral-400 text-sm leading-relaxed">No account managers, no junior handoffs. You message me directly on WhatsApp.</p>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-neutral-900 border-y border-neutral-800">
    <div class="max-w-3xl mx-auto px-6 py-16">
      <h2 class="text-2xl md:text-3xl font-bold mb-10">Common questions</h2>
      <div class="space-y-6">
        <div>
          <h3 class="font-semibold mb-2">Do I need to be technical to use this?</h3>
          <p class="text-neutral-400 text-sm leading-relaxed">No. Everything runs in apps you already use — WhatsApp, your phone line, your inbox, your sheets. You don't see the AI; you just see it working.</p>
        </div>
        <div>
          <h3 class="font-semibold mb-2">What if I cancel?</h3>
          <p class="text-neutral-400 text-sm leading-relaxed">You cancel. No notice period, no penalty. I'll hand over what's been built if you want to keep it.</p>
        </div>
        <div>
          <h3 class="font-semibold mb-2">How is this different from hiring a developer?</h3>
          <p class="text-neutral-400 text-sm leading-relaxed">A developer builds; they don't run. The monthly retainer keeps the automation working, adapts it to your business, and adds new ones over time. Closer to "AI on staff" than "buy software."</p>
        </div>
        <div>
          <h3 class="font-semibold mb-2">What about data privacy?</h3>
          <p class="text-neutral-400 text-sm leading-relaxed">Your data stays in your accounts. NDA before any demo. Happy to walk through the architecture in detail on a call.</p>
        </div>
        <div>
          <h3 class="font-semibold mb-2">What if my problem isn't on the list?</h3>
          <p class="text-neutral-400 text-sm leading-relaxed">Message me on WhatsApp and describe it. If it's a fit, we'll talk. If it isn't, I'll say so — I only take on builds I'm confident will work.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Final CTA -->
  <section class="max-w-3xl mx-auto px-6 py-20 text-center">
    <h2 class="text-3xl md:text-4xl font-bold">Pick the problem that hurts most. Let's fix it.</h2>
    <p class="mt-4 text-neutral-400">15-minute call, no pitch. If it's not a fit, I'll tell you.</p>
    <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
      <a href="<?= wa($WHATSAPP_NUMBER, 'Hi Krishna, I’d like a free 15-minute call about an AI agent.') ?>"
         data-cta="final-whatsapp"
         class="bg-emerald-500 hover:bg-emerald-400 text-neutral-950 font-semibold px-6 py-3 rounded-lg transition">
        WhatsApp me
      </a>
      <a href="mailto:<?= $EMAIL ?>?subject=<?= rawurlencode('AI agent for my business') ?>"
         data-cta="final-email"
         class="border border-neutral-700 hover:border-neutral-500 px-6 py-3 rounded-lg transition">
        Email instead
      </a>
    </div>
  </section>

  </main>

  <!-- Footer -->
  <footer class="border-t border-neutral-800 py-8 text-center text-sm text-neutral-500">
    <p>
      &copy; <?= date('Y') ?> Krishna Pallapolu · Dubai ·
      <a href="https://wa.me/<?= $WHATSAPP_NUMBER ?>" class="hover:text-neutral-300">WhatsApp</a> ·
      <a href="mailto:<?= $EMAIL ?>" class="hover:text-neutral-300">Email</a> ·
      <a href="https://skrishnap.com/" class="hover:text-neutral-300">Portfolio</a>
    </p>
  </footer>

  <script>
    // Lightweight CTA tracking — fires GA event on any [data-cta]
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
