<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/inc/header.php'); ?>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VPZK0V35K0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-VPZK0V35K0');
</script>
</head>
<body class="bg-dark text-white">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Krishna Pallapolu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work-history">Work History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#case-studies">Featured Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Education</a>
                    </li>
                </ul>
                <button id="theme-toggle" class="theme-toggle" aria-label="Toggle theme">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                </button>
            </div>
        </div>
    </nav>

    <section id="about" class="hero-section py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h3 class="hero-greeting">Hi, I'm</h3>
                    <h1 class="hero-name">Krishna Pallapolu</h1>
                    <div class="typewriter">Development Manager • Technology Lead • Full-Stack Architect • AI & Cloud</div>
                    <p class="hero-subtitle mt-3">Development Manager with 10+ years owning the full technology function — from engineering team leadership and product roadmap strategy to hands-on full-stack architecture on AWS (EC2, S3, Lambda), end-to-end CI/CD pipelines with GitHub Actions, Linux server administration, and AI workflow automation using n8n, OpenAI, and Claude. Trusted by C-suite stakeholders to deliver complex platforms at enterprise scale.</p>

                    <div class="mt-4 d-flex gap-2">
                        <a href="#case-studies" class="btn btn-accent">Featured Work</a>
                        <a href="#skills" class="btn btn-outline-light">Skills</a>
                        <a href="#work-history" class="btn btn-outline-light">Work History</a>
                    </div>

                    <div class="mt-4">
                        <ul class="list-unstyled row hightlights">
                            <li class="col-sm-6"><i class="fas fa-sitemap"></i> Technology ownership & team leadership</li>
                            <li class="col-sm-6"><i class="fas fa-road"></i> Product roadmap & stakeholder strategy</li>
                            <li class="col-sm-6"><i class="fas fa-laptop-code"></i> Full-stack architecture (MERN & LAMP)</li>
                            <li class="col-sm-6"><i class="fas fa-code-branch"></i> CI/CD pipelines — GitHub Actions, end-to-end</li>
                            <li class="col-sm-6"><i class="fas fa-cloud"></i> AWS: EC2, S3, Lambda, cloud infrastructure</li>
                            <li class="col-sm-6"><i class="fas fa-terminal"></i> Linux server admin & shell scripting</li>
                            <li class="col-sm-6"><i class="fas fa-robot"></i> AI automation: n8n, OpenAI, Claude</li>
                            <li class="col-sm-6"><i class="fas fa-chart-line"></i> 99.9% uptime delivered for enterprise platforms</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="shadow p-3 profile_card card bg-transparent text-white text-start">
                        <div class="d-flex flex-column align-items-center">
                            <img class="rounded shadow me-3 profile-about" src="/images/krishna-headshot2.png" alt="Krishna" />
                            <div class="pt-2">
                                <a class="d-inline pe-2" href="https://www.linkedin.com/in/krishna-pallapolu-b4552738/" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a class="d-inline pe-2" href="https://github.com/krishnapallapolu" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>

                        <hr class="my-3" />

                        <p class="mb-2"><i class="fas fa-envelope me-2"></i><a href="mailto:krishna.naidu24@gmail.com">krishna.naidu24@gmail.com</a></p>
                        <p class="mb-2"><i class="fas fa-mobile-alt me-2"></i><a href="tel:+971503242537">+971 50 324 2537</a></p>
                        <p class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Dubai, UAE</p>
                        <p class="mb-2"><i class="fas fa-id-card me-2"></i>UAE driving license</p>

                        <div class="mb-3 interpersonal-badges">
                            <span class="badge badge-accent">Technology Strategy</span>
                            <span class="badge badge-accent">Team Building</span>
                            <span class="badge badge-accent">Roadmap Ownership</span>
                            <span class="badge badge-accent">Stakeholder Communication</span>
                            <span class="badge badge-accent">Vendor Management</span>
                            <span class="badge badge-accent">Mentorship</span>
                            <span class="badge badge-accent">Agile Delivery</span>
                            <span class="badge badge-accent">Budget Planning</span>
                        </div>

                        <div class="mt-3">
                            <a class="btn btn-accent btn-sm me-2" href="/assets/krishnap-cv.pdf" target="_blank" rel="noopener">Download CV</a>
                            <button class="btn btn-outline-light btn-sm me-2" data-bs-toggle="modal" data-bs-target="#coverLetterModal" aria-controls="#coverLetterModal" aria-expanded="false">Cover Letter</button>
                            <button class="btn btn-outline-light btn-sm btn-print" onclick="window.print()"><i class="fas fa-print me-1"></i>Print</button>
                        </div>

                        <!-- Cover Letter Modal -->
                        <div class="modal fade" id="coverLetterModal" tabindex="-1" aria-labelledby="coverLetterModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="coverLetterModalLabel">Cover Letter — Krishna Pallapolu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body p-0">
                                <iframe src="/assets/krishna-coverletter.pdf" style="width:100%;height:75vh;border:0;display:block;" aria-label="Cover letter PDF"></iframe>
                              </div>
                              <div class="modal-footer">
                                <a class="btn btn-outline-secondary btn-sm" href="/assets/krishna-coverletter.pdf" target="_blank" rel="noopener">Open in new tab</a>
                                <button type="button" class="btn btn-accent btn-sm" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var modal = document.getElementById('coverLetterModal');
                            if (!modal) return;
                            var iframe = modal.querySelector('iframe');
                            var body = modal.querySelector('.modal-body');
                            var openLink = modal.querySelector('.modal-footer a');
                            modal.addEventListener('show.bs.modal', function (e) {
                                var url = '/assets/krishna-coverletter.pdf';
                                fetch(url, { method: 'HEAD' }).then(function (res) {
                                    if (res.ok) {
                                        if (iframe) { iframe.style.display = 'block'; iframe.src = url; }
                                        if (openLink) openLink.href = url;
                                    } else {
                                        if (iframe) { iframe.style.display = 'none'; iframe.src = ''; }
                                        if (body) { body.innerHTML = '<div class="p-4 text-center">Cover letter not available. <a href="' + url + '" target="_blank">Open in new tab</a></div>'; }
                                    }
                                }).catch(function () {
                                    if (iframe) { iframe.style.display = 'none'; iframe.src = ''; }
                                    if (body) { body.innerHTML = '<div class="p-4 text-center">Unable to load cover letter at this time.</div>'; }
                                });
                            });
                            modal.addEventListener('hidden.bs.modal', function () { if (iframe) { iframe.src = ''; } });
                        });
                        </script>
                    </div>
                </div>

            </div>
        </div>
        <div class="geo-shape geo-shape-1"></div>
        <div class="geo-shape geo-shape-2"></div>
        <div class="geo-shape geo-shape-3"></div>
    </section>

    <section id="skills" class="skills-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-4">Technical Skills</h2>
            <p class="text-center text-muted mb-4">Hands-on depth across the full stack — built through a decade of engineering leadership, architecture decisions, and shipping production systems at scale.</p>

            <div class="row g-3 skills-grid">

                <!-- Skill Card: Frontend -->
                <div class="col-md-6 col-lg-4">
                    <div class="skill-card shadow p-3 h-100">
                        <h4 class="skill-card-title">Frontend</h4>
                        <div class="skill-badges">
                            <span class="skill-badge">JavaScript (ES6+)</span>
                            <span class="skill-badge">TypeScript</span>
                            <span class="skill-badge">React</span>
                            <span class="skill-badge">Next.js</span>
                            <span class="skill-badge">MUI</span>
                            <span class="skill-badge">HTML5</span>
                            <span class="skill-badge">CSS3 / Sass</span>
                            <span class="skill-badge">Tailwind</span>
                            <span class="skill-badge">Bootstrap</span>
                        </div>
                        <div class="skill-list mt-3">
                            <div class="skill-row"><div class="skill-name">UI Architecture</div><div class="skill-line"><div class="skill-level" style="width:90%"></div></div></div>
                            <div class="skill-row"><div class="skill-name">Performance</div><div class="skill-line"><div class="skill-level" style="width:85%"></div></div></div>
                        </div>
                    </div>
                </div>

                <!-- Skill Card: Backend -->
                <div class="col-md-6 col-lg-4">
                    <div class="skill-card shadow p-3 h-100">
                        <h4 class="skill-card-title">Backend & APIs</h4>
                        <div class="skill-badges">
                            <span class="skill-badge">Node.js</span>
                            <span class="skill-badge">Express</span>
                            <span class="skill-badge">PHP / Laravel</span>
                            <span class="skill-badge">REST API / GraphQL</span>
                            <span class="skill-badge">Mongoose / Prisma</span>
                            <span class="skill-badge">Shell Scripting (Bash)</span>
                        </div>
                        <div class="skill-list mt-3">
                            <div class="skill-row"><div class="skill-name">Scalability</div><div class="skill-line"><div class="skill-level" style="width:88%"></div></div></div>
                            <div class="skill-row"><div class="skill-name">API Design</div><div class="skill-line"><div class="skill-level" style="width:90%"></div></div></div>
                        </div>
                    </div>
                </div>

                <!-- Skill Card: DevOps & Cloud -->
                <div class="col-md-6 col-lg-4">
                    <div class="skill-card shadow p-3 h-100">
                        <h4 class="skill-card-title">DevOps & Cloud</h4>
                        <div class="skill-badges">
                            <span class="skill-badge">AWS EC2</span>
                            <span class="skill-badge">AWS S3</span>
                            <span class="skill-badge">AWS Lambda</span>
                            <span class="skill-badge">GitHub Actions CI/CD</span>
                            <span class="skill-badge">Linux Server Admin</span>
                            <span class="skill-badge">Docker</span>
                            <span class="skill-badge">Apache Server</span>
                            <span class="skill-badge">Cloudflare Stack</span>
                            <span class="skill-badge">Vercel</span>
                            <span class="skill-badge">Kubernetes</span>
                        </div>
                        <div class="skill-list mt-3">
                            <div class="skill-row"><div class="skill-name">CI/CD Pipelines</div><div class="skill-line"><div class="skill-level" style="width:90%"></div></div></div>
                            <div class="skill-row"><div class="skill-name">Cloud Infrastructure</div><div class="skill-line"><div class="skill-level" style="width:85%"></div></div></div>
                        </div>
                    </div>
                </div>

                <!-- Skill Card: Databases -->
                <div class="col-md-6 col-lg-4">
                    <div class="skill-card shadow p-3 h-100">
                        <h4 class="skill-card-title">Databases</h4>
                        <div class="skill-badges">
                            <span class="skill-badge">PostgreSQL</span>
                            <span class="skill-badge">MySQL</span>
                            <span class="skill-badge">MongoDB</span>
                            <span class="skill-badge">Supabase</span>
                        </div>
                        <div class="skill-list mt-3">
                            <div class="skill-row"><div class="skill-name">Data Modelling</div><div class="skill-line"><div class="skill-level" style="width:86%"></div></div></div>
                            <div class="skill-row"><div class="skill-name">Performance Tuning</div><div class="skill-line"><div class="skill-level" style="width:80%"></div></div></div>
                        </div>
                    </div>
                </div>

                <!-- Skill Card: AI & Automation -->
                <div class="col-md-6 col-lg-4">
                    <div class="skill-card shadow p-3 h-100">
                        <h4 class="skill-card-title">AI & Automation</h4>
                        <div class="skill-badges">
                            <span class="skill-badge">n8n</span>
                            <span class="skill-badge">OpenAI / GPT-4</span>
                            <span class="skill-badge">Claude / Claude Code</span>
                            <span class="skill-badge">Zapier / Make</span>
                            <span class="skill-badge">RAG Pipelines</span>
                        </div>
                        <div class="skill-list mt-3">
                            <div class="skill-row"><div class="skill-name">AI Integrations</div><div class="skill-line"><div class="skill-level" style="width:84%"></div></div></div>
                            <div class="skill-row"><div class="skill-name">Workflow Automation</div><div class="skill-line"><div class="skill-level" style="width:90%"></div></div></div>
                        </div>
                    </div>
                </div>

                <!-- Skill Card: Security & Auth -->
                <div class="col-md-6 col-lg-4">
                    <div class="skill-card shadow p-3 h-100">
                        <h4 class="skill-card-title">Security & Auth</h4>
                        <div class="skill-badges">
                            <span class="skill-badge">JWT</span>
                            <span class="skill-badge">OAuth 2.0</span>
                            <span class="skill-badge">RBAC</span>
                            <span class="skill-badge">OWASP</span>
                        </div>
                        <div class="skill-list mt-3">
                            <div class="skill-row"><div class="skill-name">Threat Modelling</div><div class="skill-line"><div class="skill-level" style="width:82%"></div></div></div>
                            <div class="skill-row"><div class="skill-name">Secure Design</div><div class="skill-line"><div class="skill-level" style="width:84%"></div></div></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="border-bottom pt-5">
    <section class="border-bottom pt-5">
        <div class="container" id="content">
            <div class="row">

                <div class="col-md-8">
                    <section id="work-history">
                        <h2 class="text_shadow mb-5">Work History</h2>

                        <article class="pb-5">
                            <h3>Development Manager</h3>
                            <p>Meeting Minds Experts — Dubai, UAE</p>
                            <p><i>2023 – Present</i></p>
                            <ul>
                                <li>Serve as <strong>Development Manager</strong>, owning the complete technology function — setting the engineering roadmap, defining architecture standards, selecting tools and vendors, and reporting directly to C-suite on technology strategy and delivery.</li>
                                <li>Lead and mentor a cross-functional engineering team, running Agile sprints, conducting code reviews, and ensuring on-time delivery of healthcare platforms, educational tools, and internal applications serving <strong>6,000+ active users</strong>.</li>
                                <li>Designed and maintain end-to-end <strong>CI/CD pipelines using GitHub Actions</strong> — automating build, test, and deployment to staging and production with zero-downtime releases.</li>
                                <li>Provisioned and manage <strong>AWS infrastructure</strong>: EC2 instances for application hosting, S3 for asset storage and static delivery, Lambda functions for serverless event-driven workflows.</li>
                                <li>Administer <strong>Linux servers</strong> (Ubuntu/CentOS); author shell scripts for server provisioning, log rotation, cron-based scheduling, and automated deployments — significantly reducing manual ops overhead.</li>
                                <li>Architected and shipped full-stack applications on the MERN and LAMP stacks; integrated third-party APIs (DTCM, Eventsair) for registration workflows and barcode generation via PHP, cURL, REST, and GraphQL.</li>
                                <li>Built AI-powered automation pipelines using <strong>n8n</strong>, <strong>OpenAI</strong>, and <strong>Claude</strong> — automating data enrichment, content generation, and social media publishing, cutting manual effort by ~70%.</li>
                            </ul>
                        </article>

                        <article class="pb-5">
                            <h3>Senior Web Developer / Lead</h3>
                            <p>Sapaad Pte Ltd — WFA, Bengaluru</p>
                            <p><i>Jan 2022 – Nov 2023</i></p>
                            <ul>
                                <li>Led a team of developers end-to-end through the SDLC — sprint planning, architecture reviews, QA, and production releases — delivering enterprise projects serving <strong>30,000+ users</strong> on time and within scope.</li>
                                <li>Engineered and owned <strong>CI/CD pipelines with GitHub Actions</strong> — automating build, lint, test, and deployment stages; wrote cron jobs and shell scripts for scheduled tasks and server-side automation on Linux.</li>
                                <li>Drove platform uptime from <strong>80% → 99.9%</strong> through redundancy implementation, performance hardening, and mitigation of Brute-force and DDoS attacks.</li>
                                <li>Built full-stack features using PHP, Node.js, React.js, MySQL, AJAX, and REST APIs; enforced cross-browser compatibility and web accessibility standards across all deliverables.</li>
                                <li>Used Google Analytics, Clarity, and HubSpot insights to connect engineering decisions directly to measurable business outcomes.</li>
                            </ul>
                        </article>

                        <article class="pb-5">
                            <h3>Production Specialist</h3>
                            <p>Google Operations Center — Hyderabad</p>
                            <p><i>Aug 2020 – Dec 2021</i></p>
                            <ul>
                                <li>Developed Google Analytics email templates from scratch using HTML, CSS, and FreeMarker Template Language (FTL); built e-learning courses on LMS (Evolve) per stakeholder specifications.</li>
                                <li>Trained teammates and new joiners on standards and processes; maintained SLAs at 100%.</li>
                                <li>Ensured cross-browser, cross-device compatibility and responsiveness across all deliverables.</li>
                            </ul>
                        </article>

                        <article class="pb-5">
                            <h3>Web Designer and Developer</h3>
                            <p>OneTrust Privacy Management Software — Bengaluru</p>
                            <p>Aug 2019 – Aug 2020</p>
                            <ul>
                                <li>Engineered responsive web applications using PHP, Node.js, JavaScript, Angular, jQuery, WordPress, Bootstrap, and SCSS/SASS.</li>
                                <li>Managed project workflows, QA reviews, and prioritisation while maintaining thorough documentation.</li>
                                <li>Improved web performance using Google PageSpeed Insights and Lighthouse; optimised critical rendering path for faster load times.</li>
                            </ul>
                        </article>

                        <article class="pb-5">
                            <h3>Web Consultant</h3>
                            <p>Cognizant Technology Solutions (CTS) — Vendor to <strong>Google</strong>, Bengaluru</p>
                            <p><i>May 2017 – Aug 2019</i></p>
                            <ul>
                                <li>Built Accelerated Mobile Pages (AMP) using HTML, CSS, and AMP boilerplate for Google-scale publishing.</li>
                                <li>Collaborated with clients to enhance site functionality across WordPress, Drupal, Shopify, Magento, Wix, and custom PHP platforms.</li>
                                <li>Conducted comprehensive code reviews focused on structural integrity, security, and cross-browser/device compatibility.</li>
                            </ul>
                        </article>

                        <article class="pb-5">
                            <h3>Senior Technical Associate</h3>
                            <p>Dell Technologies — Bangalore</p>
                            <p><i>Aug 2015 – May 2017</i></p>
                            <ul>
                                <li>Analysed client business processes and proposed optimal software solutions for unique requirements.</li>
                                <li>Installed system updates to address vulnerabilities; investigated and resolved system issues to reduce downtime.</li>
                            </ul>
                        </article>

                        <article class="pb-5">
                            <h3>Technical Associate</h3>
                            <p>Mphasis Ltd — Bangalore</p>
                            <p><i>Oct 2014 – July 2015</i></p>
                            <ul>
                                <li>Diagnosed and resolved network challenges including Wi-Fi configuration across routers and switches.</li>
                                <li>Configured LAN/WAN setups and IP protocols to ensure robust network connectivity.</li>
                            </ul>
                        </article>
                    </section>
                </div>

                <div class="col-md-4 sidebar-sticky pb-5">
                    <div class="card bg-transparent p-4 align-items-center shadow_l">
                        <h2 class="mb-4">Technical Skills</h2>
                        <div class="d-flex align-items-start justify-content-center">
                            <ul>
                                <li>React JS / Next JS</li>
                                <li>JavaScript (ES6+)</li>
                                <li>TypeScript</li>
                                <li>HTML5 / CSS3 / Sass</li>
                                <li>Tailwind / Bootstrap</li>
                                <li>Node.js / Express</li>
                                <li>PHP / Laravel</li>
                                <li>REST API / GraphQL</li>
                                <li>MySQL / PostgreSQL</li>
                                <li>MongoDB / Supabase</li>
                            </ul>
                            <ul>
                                <li>AWS EC2 / S3 / Lambda</li>
                                <li>GitHub Actions CI/CD</li>
                                <li>Linux Server Admin</li>
                                <li>Shell Scripting (Bash)</li>
                                <li>Docker / Kubernetes</li>
                                <li>Cloudflare Stack</li>
                                <li>n8n / OpenAI / Claude</li>
                                <li>WordPress / Webflow</li>
                                <li>JWT / OAuth 2.0 / RBAC</li>
                                <li>Git / GitHub</li>
                            </ul>
                        </div>
                        <div class="py-5">
                            <h2>Leadership Skills</h2>
                            <ul>
                                <li>Technology Strategy</li>
                                <li>Team Leadership & Mentorship</li>
                                <li>Roadmap & Budget Planning</li>
                                <li>Stakeholder Communication</li>
                                <li>Vendor Management</li>
                                <li>Agile / Sprint Planning</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/inc/case-studies.php'); ?>

    <section class="border-bottom py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <section id="education">
                        <h2 class="d-inline text_shadow mb-5">Education</h2>
                        <article class="w-100 my-3 p-4 rounded-4 education-card">
                            <h3>Bachelor of Technology (M.E)</h3>
                            <p>QIS College of Engineering & Technology (QIS)</p>
                            <p>Ongole, Andhra Pradesh</p>
                        </article>
                        <article class="w-100 my-3 p-4 rounded-4 education-card">
                            <h3>Board of Intermediate Education (Maths, Physics, Chemistry)</h3>
                            <p>Sri Chaitanya Junior College</p>
                            <p>Vijayawada, Andhra Pradesh</p>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>

<!-- Matrix / Math Background Canvas -->
<canvas id="matrix-bg" style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:0;pointer-events:none;opacity:0.18;"></canvas>
<style>
  body > *:not(#matrix-bg) { position: relative; z-index: 1; }
</style>
<script>
(function () {
    var canvas = document.getElementById('matrix-bg');
    var ctx = canvas.getContext('2d');

    var mathSymbols = [
        '∑','∫','∂','∇','∞','π','α','β','γ','δ','λ','μ','σ','θ','φ',
        '√','≈','≠','≤','≥','∈','∉','∅','∩','∪','⊆','⊂','∀','∃','¬',
        '⊕','⊗','Δ','Ω','ℝ','ℕ','ℤ','ℚ','f(x)','dx','dy','n²','e^x',
        '01','10','11','00','1','0'
    ];

    var dots = [];
    var streams = [];
    var W, H;

    function resize() {
        W = canvas.width = window.innerWidth;
        H = canvas.height = window.innerHeight;
        initStreams();
    }

    function initStreams() {
        streams = [];
        var cols = Math.floor(W / 22);
        for (var i = 0; i < cols; i++) {
            streams.push({
                x: i * 22 + 11,
                y: Math.random() * -H,
                speed: 0.6 + Math.random() * 1.2,
                symbols: [],
                length: 6 + Math.floor(Math.random() * 14),
                timer: Math.random() * 60
            });
        }
    }

    function draw() {
        ctx.clearRect(0, 0, W, H);

        /* ── dot grid ── */
        ctx.fillStyle = 'rgba(29, 184, 122, 0.35)';
        var spacing = 38;
        for (var gx = spacing / 2; gx < W; gx += spacing) {
            for (var gy = spacing / 2; gy < H; gy += spacing) {
                ctx.beginPath();
                ctx.arc(gx, gy, 1.2, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        /* ── falling symbol streams ── */
        for (var s = 0; s < streams.length; s++) {
            var st = streams[s];
            st.timer++;
            if (st.timer % 4 === 0) {
                st.symbols.unshift(mathSymbols[Math.floor(Math.random() * mathSymbols.length)]);
                if (st.symbols.length > st.length) st.symbols.pop();
            }
            st.y += st.speed;
            if (st.y > H + 200) {
                st.y = Math.random() * -300;
                st.symbols = [];
            }

            for (var k = 0; k < st.symbols.length; k++) {
                var alpha = (1 - k / st.length);
                ctx.fillStyle = k === 0
                    ? 'rgba(200, 255, 230, ' + alpha + ')'
                    : 'rgba(29, 184, 122, ' + (alpha * 0.8) + ')';
                ctx.font = (k === 0 ? 'bold ' : '') + '11px monospace';
                ctx.fillText(st.symbols[k], st.x, st.y - k * 18);
            }
        }

        requestAnimationFrame(draw);
    }

    window.addEventListener('resize', resize);
    resize();
    draw();
})();
</script>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'); ?>
