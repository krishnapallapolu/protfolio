<?php

include_once('inc/header.php');


?>
    <style>
        /* ===== Hero Section Animations ===== */

        body {
            font-family: "Noto Sans", sans-serif;
            font-optical-sizing: auto;
            overflow-x: hidden;
        }

        /* Animated Background */
        .hero-section {
            position: relative;
            overflow: hidden;
            min-height: 100vh;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background:
                radial-gradient(circle at 20% 80%, rgba(52, 232, 158, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(64, 116, 181, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(52, 232, 158, 0.05) 0%, transparent 30%);
            animation: bgPulse 15s ease-in-out infinite;
            pointer-events: none;
        }

        @keyframes bgPulse {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(2%, 2%) rotate(1deg); }
            66% { transform: translate(-1%, 1%) rotate(-1deg); }
        }

        /* Floating Geometric Shapes */
        .geo-shape {
            position: absolute;
            opacity: 0.1;
            pointer-events: none;
        }

        .geo-shape-1 {
            top: 10%;
            right: 10%;
            width: 100px;
            height: 100px;
            border: 3px solid var(--accent);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: float1 8s ease-in-out infinite, morph 12s ease-in-out infinite;
        }

        .geo-shape-2 {
            bottom: 20%;
            left: 5%;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--accent) 0%, transparent 50%);
            animation: float2 10s ease-in-out infinite;
        }

        .geo-shape-3 {
            top: 40%;
            right: 5%;
            width: 40px;
            height: 40px;
            border: 2px solid var(--accent);
            transform: rotate(45deg);
            animation: float3 7s ease-in-out infinite, spin 20s linear infinite;
        }

        @keyframes float1 {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(10deg); }
        }

        @keyframes float2 {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-20px) translateX(10px); }
        }

        @keyframes float3 {
            0%, 100% { transform: translateY(0) rotate(45deg); }
            50% { transform: translateY(-25px) rotate(45deg); }
        }

        @keyframes spin {
            from { transform: rotate(45deg); }
            to { transform: rotate(405deg); }
        }

        @keyframes morph {
            0%, 100% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
            50% { border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%; }
        }

        /* Profile Image Container */
        .profile-image-container {
            position: relative;
            width: 250px;
            height: 250px;
            margin: 0 auto;
            perspective: 1000px;
        }

        .profile-image-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform-style: preserve-3d;
            animation: profileFloat 6s ease-in-out infinite;
        }

        .profile-image-wrapper:hover {
            transform: scale(1.05) rotateY(10deg);
        }

        @keyframes profileFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        .profile-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
            position: absolute;
            top: 0;
            left: 0;
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .profile-image.primary {
            opacity: 1;
            z-index: 2;
        }

        .profile-image.secondary {
            opacity: 0;
            z-index: 1;
        }

        .profile-image-wrapper:hover .profile-image.primary {
            opacity: 0;
            transform: scale(0.95);
        }

        .profile-image-wrapper:hover .profile-image.secondary {
            opacity: 1;
            transform: scale(1);
        }

        /* Profile thumbnail for hero card */
        .profile-thumb {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 12px;
        }

        @media (max-width: 768px) {
            .profile-thumb {
                width: 110px;
                height: 110px;
            }
        }


        /* Glowing Border Animation */
        .profile-image-container::before {
            content: '';
            position: absolute;
            top: -4px;
            left: -4px;
            right: -4px;
            bottom: -4px;
            background: linear-gradient(45deg, var(--accent), #4074b5, var(--accent), #4074b5);
            background-size: 400% 400%;
            border-radius: 24px;
            z-index: -1;
            animation: glowBorder 4s ease infinite;
        }

        .profile-image-container::after {
            content: '';
            position: absolute;
            top: -4px;
            left: -4px;
            right: -4px;
            bottom: -4px;
            background: linear-gradient(45deg, var(--accent), #4074b5, var(--accent), #4074b5);
            background-size: 400% 400%;
            border-radius: 24px;
            z-index: -2;
            filter: blur(20px);
            opacity: 0.7;
            animation: glowBorder 4s ease infinite;
        }

        @keyframes glowBorder {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Animated Name with Gradient */
        .hero-name {
            font-size: clamp(2.5rem, 8vw, 4.5rem);
            font-weight: 800;
            background: linear-gradient(135deg, #ffffff 0%, var(--accent) 50%, #4074b5 100%);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientText 5s ease infinite, fadeSlideUp 1s ease forwards;
            opacity: 0;
            animation-delay: 0.3s;
        }

        @keyframes gradientText {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Typewriter Effect */
        .typewriter {
            overflow: hidden;
            white-space: nowrap;
            border-right: 3px solid var(--accent);
            animation: typing 3s steps(40, end) forwards, blink 0.75s step-end infinite;
            animation-delay: 1s;
            width: 0;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink {
            50% { border-color: transparent; }
        }

        /* Fade Slide Up Animation */
        .fade-slide-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeSlideUp 0.8s ease forwards;
        }

        @keyframes fadeSlideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }
        .delay-5 { animation-delay: 1s; }

        /* Staggered List Animation */
        .animated-list li {
            opacity: 0;
            transform: translateX(-20px);
            animation: slideIn 0.5s ease forwards;
        }

        .animated-list li:nth-child(1) { animation-delay: 1.2s; }
        .animated-list li:nth-child(2) { animation-delay: 1.4s; }
        .animated-list li:nth-child(3) { animation-delay: 1.6s; }
        .animated-list li:nth-child(4) { animation-delay: 1.8s; }
        .animated-list li:nth-child(5) { animation-delay: 2.0s; }
        .animated-list li:nth-child(6) { animation-delay: 2.2s; }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Social Icons Bounce */
        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--bg-card);
            margin-right: 10px;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid transparent;
        }

        .social-icon:hover {
            transform: translateY(-5px) scale(1.1);
            border-color: var(--accent);
            background: var(--accent);
            color: var(--bg-primary) !important;
        }

        .social-icon:hover i {
            color: var(--bg-primary) !important;
        }

        /* Contact Info Animation */
        .contact-item {
            display: flex;
            align-items: center;
            padding: 8px 0;
            transition: transform 0.3s ease;
        }

        .contact-item:hover {
            transform: translateX(10px);
        }

        .contact-item i {
            width: 30px;
            color: var(--accent);
        }

        /* Hero Title Styles */
        .hero-greeting {
            font-size: 1.5rem;
            color: var(--accent);
            font-weight: 500;
            margin-bottom: 10px;
            opacity: 0;
            animation: fadeSlideUp 0.8s ease forwards;
        }

        .hero-title {
            font-size: 1.3rem;
            color: var(--text-secondary);
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-secondary);
        }

        /* Highlight badges */
        .highlight-badge {
            display: inline-flex;
            align-items: center;
            background: var(--bg-card);
            padding: 10px 15px;
            border-radius: 10px;
            margin: 5px;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .highlight-badge:hover {
            border-color: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(52, 232, 158, 0.2);
        }

        /* Accent button used in hero */
        .btn-accent {
            background: var(--accent);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
        }
        .btn-accent:hover {
            background: var(--accent-dark);
            color: #fff;
        }

        .highlight-badge i {
            color: var(--accent);
            margin-right: 10px;
        }

        /* Original styles kept for compatibility */
        h1 .intro_text {
            font-size: 32px;
        }
        h1 .name {
            font-size: 64px;
        }
        .hightlights li {
            font-size: 18px;
            margin-bottom: 12px;
            padding: 10px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .hightlights li:hover {
            background: var(--bg-card);
            transform: translateX(10px);
        }
        .profile_card,
        .shadow_r {
            box-shadow: 10px 10px 5px 0px var(--accent-shadow);
            -webkit-box-shadow: 10px 10px 5px 0px var(--accent-shadow);
            -moz-box-shadow: 10px 10px 5px 0px var(--accent-shadow);
        }
        .shadow_l,
        #skills {
            box-shadow: 10px 10px 5px 0px var(--accent-shadow) inset;
            -webkit-box-shadow: 10px 10px 5px 0px var(--accent-shadow) inset;
            -moz-box-shadow: 10px 10px 5px 0px var(--accent-shadow) inset;
        }
        .text_shadow {
            padding: 0 5px;
            border-radius: 5px;
            display: inline-block;
            color: #FFFFFF;
            background: rgba(49, 63, 141, 0.7);
            text-shadow: 2px 2px 0 #4074b5, 2px -2px 0 #4074b5, -2px 2px 0 #4074b5, -2px -2px 0 #4074b5, 2px 0px 0 #4074b5, 0px 2px 0 #4074b5, -2px 0px 0 #4074b5, 0px -2px 0 #4074b5;
        }
        .fab {
            font-size: 24px;
        }
        .fas {
            font-size: 18px;
            padding-right: 10px;
        }
        .f18 {
            font-size: 18px;
            line-height: 1.7;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-name {
                font-size: 2.5rem;
            }
            .profile-image-container {
                width: 200px;
                height: 200px;
            }
            .geo-shape {
                display: none;
            }
        }
    </style>
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
                        <a class="nav-link" href="#case-studies">Case Studies</a>
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

    <section id="hero" class="hero-section py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h3 class="hero-greeting">Hi, I'm</h3>
                    <h1 class="hero-name">Krishna Pallapolu</h1>
                    <div class="typewriter">Development Lead • Full-stack (MERN & LAMP) • AI Integrations</div>
                    <p class="hero-subtitle mt-3">A decade building scalable web apps, improving uptime and security, and leading high-performing teams.</p>

                    <div class="mt-4 d-flex gap-2">
                        <a href="#case-studies" class="btn btn-accent">Case Studies</a>
                        <a href="#skills" class="btn btn-outline-light">Skills</a>
                        <a href="#education" class="btn btn-outline-light">Education</a>
                    </div>

                    <div class="mt-4">
                        <ul class="list-unstyled row hightlights">
                            <li class="col-sm-6"><i class="fas fa-laptop-code"></i> Full-stack development (MERN & LAMP)</li>
                            <li class="col-sm-6"><i class="fas fa-chart-line"></i> Improved uptime to 99.9% for enterprise platforms</li>
                            <li class="col-sm-6"><i class="fas fa-shield-alt"></i> Security hardening (DDoS, Brute-force mitigation)</li>
                            <li class="col-sm-6"><i class="fas fa-users"></i> Leading cross-functional development teams</li>
                            <li class="col-sm-6"><i class="fas fa-code"></i> Performance optimization & refactoring</li>
                            <li class="col-sm-6"><i class="fas fa-cloud"></i> Cloud & DevOps: AWS, Docker, GitHub Actions</li>
                            <li class="col-sm-6"><i class="fas fa-tools"></i> Internal tools & workflow automation</li>
                            <li class="col-sm-6"><i class="fas fa-project-diagram"></i> API integrations (DTCM, Eventsair) and barcode automation</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="shadow p-3 profile_card card bg-transparent text-white text-start">
                        <div class="d-flex align-items-center">
                            <img class="rounded shadow me-3 profile-thumb" src="images/krishna-headshot2.png" alt="Krishna" />
                            <div>
                                <h4 class="mb-1">Krishna Pallapolu</h4>
                                <div class="mb-2 text-muted">Development Lead</div>
                                <div>
                                    <a class="d-inline pe-2" href="https://www.linkedin.com/in/krishna-pallapolu-b4552738/" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a class="d-inline pe-2"  href="https://github.com/krishna-pallapolu" target="_blank">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <hr class="my-3" />

                        <p class="mb-2"><i class="fas fa-envelope me-2"></i><a href="mailto:krishna.naidu24@gmail.com">krishna.naidu24@gmail.com</a></p>
                        <p class="mb-2"><i class="fas fa-mobile-alt me-2"></i><a href="tel:+971503242537">+971 50 324 2537</a></p>
                        <p class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Dubai, UAE</p>
                        <p class="mb-2"><i class="fas fa-id-card me-2"></i>Valid UAE driving license</p>

                        <div class="mt-3">
                            <a class="btn btn-outline-light btn-sm me-2" href="#contact">Contact</a>
                            <a class="btn btn-accent btn-sm" href="/assets/krishnap-cv.pdf" target="_blank" rel="noopener">Download CV</a>
                        </div>
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
            <p class="text-center text-muted mb-4">A concise snapshot of tools, platforms, and expertise used to deliver scalable, secure, and performant systems.</p>

            <div class="row g-3 skills-grid">

                <!-- Skill Card: Frontend -->
                <div class="col-md-6 col-lg-4">
                    <div class="skill-card shadow p-3 h-100">
                        <h4 class="skill-card-title">Frontend</h4>
                        <div class="skill-badges">
                            <span class="skill-badge">React</span>
                            <span class="skill-badge">Next.js</span>
                            <span class="skill-badge">TypeScript</span>
                            <span class="skill-badge">HTML5</span>
                            <span class="skill-badge">CSS3 / Sass</span>
                            <span class="skill-badge">Tailwind</span>
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
                            <span class="skill-badge">GraphQL</span>
                            <span class="skill-badge">Prisma</span>
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
                            <span class="skill-badge">AWS</span>
                            <span class="skill-badge">Docker</span>
                            <span class="skill-badge">GitHub Actions</span>
                            <span class="skill-badge">Kubernetes</span>
                        </div>
                        <div class="skill-list mt-3">
                            <div class="skill-row"><div class="skill-name">Reliability</div><div class="skill-line"><div class="skill-level" style="width:85%"></div></div></div>
                            <div class="skill-row"><div class="skill-name">CI/CD</div><div class="skill-line"><div class="skill-level" style="width:88%"></div></div></div>
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
                            <span class="skill-badge">OpenAI</span>
                            <span class="skill-badge">Claude</span>
                            <span class="skill-badge">n8n</span>
                            <span class="skill-badge">RAG</span>
                        </div>
                        <div class="skill-list mt-3">
                            <div class="skill-row"><div class="skill-name">AI Integrations</div><div class="skill-line"><div class="skill-level" style="width:84%"></div></div></div>
                            <div class="skill-row"><div class="skill-name">Automation</div><div class="skill-line"><div class="skill-level" style="width:90%"></div></div></div>
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
            <!-- Skills Section -->
            <div class="row">

                <div class="col-md-8">
                    <!-- Work History Section -->
                    <section id="work-history">
                        <h2 class="text_shadow mb-5">Work History</h2>
                        <article class="pb-5">
                            <h3>Full Stack Developer / Development Lead</h3>
                            <p>Meeting Minds Experts - Dubai, Dubai</p>
                            <p><i> 2023 - Present</i></p>
                            <ul class="d-none">
                                <li>Design, develop, and manage websites, educational platforms, and internal applications specific to the healthcare sector.                                
                                <li>Proficient in integrating websites with third-party applications such as DTCM and Eventsair to retrieve registration and program data, as well as generate barcodes using PHP, cURL, REST API, and JSON.</li>
                                <li>Collaborate closely with stakeholders and project man- agers to ensure seamless coordination and timely delivery of projects.</li>
                                <li>Demonstrated ability to lead teams effectively, resulting in the successful and punctual delivery of websites and applications.</li>
                                <li>Utilized MERN stack for internal applications and Lar- avel, MySQL, JavaScript, jQuery, Wordpress, Webflow, Wix Velo API, Git/Github and other web technologies.</li>
                            </ul>
                            <ul>
                                <li>Developed, and managed scalable websites, educational platforms, and internal applications using the MERN stack (MongoDB, Express.js, React.js, Node.js) ensuring high performance, data integrity, and seamless user experiences.</li>
                                <li>Led the development of internal application, utilizing the MERN stack to ensure efficient data handling, secure authentication, and user-friendly interfaces. </li>
                                <li>Successfully delivered a healthcare platform serving 6,000+ active users by implementing scalable architecture, improving site performance, and reducing downtime.</li>
                                <li>Proficiently integrated third-party applications like DTCM and Eventsair to automate data retrieval for registrations and generate barcodes using REST APIs, cURL, and JSON.</li>
                                <li>Leveraged Laravel, PHP, MySQL, JavaScript, jQuery, Ajax, WordPress, Webflow, and Wix Velo API for various web projects, maintaining robust version control using Git/GitHub.</li>
                                <li>Implemented AI-driven automation using <strong>n8n</strong> for data enrichment, content generation, and automated publishing workflows to reduce manual interventions.</li>
                            </ul>
                            

                        </article>
                        <article class="pb-5">
                            <h3>Senior Web Developer/Lead</h3>
                            <p>Sapaad Pte Ltd, WFA, Bengaluru</p>
                            <p><i>Jan 2022 - Nov 2023</i></p>

                            <ul class="d-none">
                                <li>Led and managed a team of 4 in the development projects for the websites throughout the various phases of the project life cycle with industry best practices</li>
                                <li>Innovated and implemented several processes in place to ensure smoother functioning among the cross-functional teams (Design, Content, QA, Marketing)</li>
                                <li>Improved and ensured the site's uptime to 99.9% from 80%, implemented SEO using Ahrefs, Pagespeed Insights, GT Metrix.</li>
                                <li>Assisted developers in templates/components development using PHP, JavaScript, jQuery, MySQL, Ajax, NodeJS, JSON API,  HTML5, CSS3 and testing, debugging, and deployment.</li>
                            </ul>
                            <p> Led a development team through the SDLC, improving system performance and security across websites and internal tools. Increased website uptime from 80% to 99.9%, enhancing reliability and user satisfaction. Mitigated security threats like Brute-force and DDoS attacks while implementing redundancy.</p>
                            <ul>
                                
                                <li>  Key achievements:
                            Delivered enterprise-level projects with over 30,000 user base on time through cross-functional collaboration.</li>
                            <li></li>Utilized PHP, JavaScript, Node.js, React.js, jQuery, MySQL, AJAX, REST API, and tools like Figma and Photoshop for user-centric, visually appealing applications.</li>
                            <li>Automated processes with cron jobs and GitHub Actions for Continuous Deployment (CD), increasing release efficiency.</li>
                            <li>Established web accessibility standards and used insights from Google Analytics, Clarity, and HubSpot to drive user engagement.</li>
                            <li>Fostered innovation and ensured high-quality, scalable solutions through leadership and process optimization.</li>
                            </ul>
                          
                        </article>

                        <article class="pb-5">
                            <h3>Production Specialist</h3>
                            <p>Google Operations Center, Hyderabad</p>
                            <p><i>Aug 2020 - Dec 2021</i></p>
                            <ul>
                                <li>Coded the Google Analytics email template from scratch as well as other email templates using HTML, CSS, and FreeMarker Template Language [FTL], HTML, CSS, JavaScript and build courses using LMS [Evolve] as per stakeholder documentation.</li>
                                <li>Trained teammates and new joiners on processes and best practices. Ensured SLAs were at 100%.</li>
                                <li>Ensured emails, course design and functionality worked within a variety of browsers, devices, and responsiveness.</li>
                            </ul>
                        </article>
                        <article class="pb-5">
                            <h3>Web Designer and Developer</h3>
                            <p>Onetrust Privacy Management Software, Bengaluru</p>
                            <p>Aug 2019 - Aug 2020</p>
                            <ul>
                                <li>Engineered modern and highly responsive web designs. Utilized PHP, Node JS, JavaScript, Angular, jQuery, Word- Press, Ajax, Bootstrap, CSS3, HTML5, and SCSS/SASS to achieve this.
                                <li>Effectively managed project workflows, conducted thor- ough QA reviews, and carefully prioritized web initiatives, all while maintaining comprehensive documentation.</li>
                                <li>Improved web performance using tools such as Google PageSpeed Insights and Lighthouse, ensuring quick and efficient website loading.</li>
                            </ul>
                            
                        </article>
                        <article class="pb-5">
                            <h3>Web Consultant</h3>
                            <p>Congnizant Technology Solutions (CTS)</p>
                            <p>Worked as VENDOR to <strong>Google</strong> - Bengaluru</p>
                            <p><i>May 2017 - Aug 2019</i></p>

                            <ul>
                                <li>Crafted Accelerated Mobile Pages [AMP] through adept utilization of HTML, CSS, and AMP boilerplate.</li>
                                <li>Collaborated closely with clients to strategize and enhance site functionalities across diverse CMS platforms, encompassing WordPress, Drupal, Shopify, Magento, Wix, and custom PHP sites.</li>
                                <li>Conducted comprehensive code reviews to ensure structural integrity, security adherence, and compatibility across multiple browsers and devices. Skillfully fine-tuned web applications for optimal speed, performance, scalability, and unwavering security standards.</li>
                            </ul>

                        </article>
                        <article class="pb-5">
                            <h3>Senior Technical Associate</h3>
                            <p>Dell Technologies, Bangalore</p>
                            <p><i>Aug 2015 - May 2017</i></p>
                            <ul>
                                <li>Analyzed client business processes to propose optimal software applications for unique requirements.</li>
                                <li>Installed system updates to address vulnerabilities and reduce security issues.</li>
                                <li>Investigated system issues and implemented resolutions to reduce downtime.</li>
                            </ul>
                            
                        </article>
                        <article class="pb-5">
                            <h3>Technical Associate</h3>
                            <p>Mphasis Ltd, Bangalore</p>
                            <p><i>Oct 2014 - July 2015</i></p>
                            <ul>
                                <li>Proficiently diagnosed and resolved network-related challenges, including intricate wifi configuration matters, across routers and switches.</li>
                                <li>Expertly orchestrated LAN/WAN setups and meticulously configured IP protocols to ensure seamless connectivity and robust network performance.</li>
                            </ul>
                            
                        </article>
                    <!-- Include other work history entries here -->
                </section>

                
                </div>
                <div class="col-md-4 position-sticky pb-5" style="top: 30px; height: 100%;">
                    <div  class="card bg-transparent p-4 align-items-center shadow_l" >
                        <h2 class="mb-4">Technical Skills</h2>
                        <div class="d-flex align-items-start justify-content-center ">
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>BootStrap</li>
                                <li>JavaScript</li>
                                <li>TypeScript</li>
                                <li>JQuery</li>
                                <li>Ajax</li>
                                <li>SCSS/SASS</li>
                                <li>React JS</li>
                                <li>Next JS</li>
                                <li>SEO</li>
                            </ul>
                            <ul>
                                <li>WordPress</li>
                                <li>Webflow</li>
                                <li>Wix & Velo API</li>
                                <li>JSON</li>
                                <li>REST API</li>
                                <li>Node JS</li>
                                <li>Vercel</li>
                                <li>Laravel</li>
                                <li>PHP</li>
                                <li>Laravel</li>
                                <li>MySQL</li>
                                <li>PostgreSQL</li>
                                <li>MongoDB</li>
                            </ul>
                        </div>
                        <div class="py-5">
                            <h2>Interpersonal Skills</h2>
                            <ul>
                                <li>Leadership Skills</li>
                                <li>Team Management</li>
                                <li>Planning and Time management</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card bg-transparent p-4 align-items-center mt-4 shadow_r d-none">
                        <h2 class="mb-4">Projects</h2>
                        <p>Predominantly Worked on many internal tools and applications. Some of the websites list as below:</p>

                        <ul>

                            <li><a href="https://www.sapaad.com">Sapaad</a></li>
                            <li><a href="https://www.onetrust.com">Onetrust</a></li>
                            <li><a href="https://www.admissionleap.com">AdmissionLeap</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('inc/case-studies.php'); ?>
            </div>

    <section class="border-bottom py-5">
        <div class="container">
            <!-- Education Section -->
            <div class="row">
                <div class="col-12">
                    <section class="" id="education">
                        <h2 class="d-inline text_shadow mb-5">Education</h2>
                        <article class="w-100 my-3 p-4 rounded-4 education-card">
                            <h3>Bachelor of Technology (M.E)</h3>
                            <p>QIS College of Engineering & Technology (QIS)</p>
                            <p>Ongole, Andhra Pradesh</p>
                        </article>

                        <article class="w-100 my-3 p-4 rounded-4 education-card">
                            <h3>Board of Intermediate Education (Maths, Physics, Chemistry)</h3>
                            <p>Sri Chaitanya Junior College</p>
                            <p>Vijaywada, Andhra Pradesh</p>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
 <?php include_once('inc/footer.php'); ?>
