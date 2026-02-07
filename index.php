<?php

include_once('inc/header.php');

?>
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
                        <a class="nav-link active" aria-current="page" href="/index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php#work-history">Work History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php#case-studies">Featured Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php#education">Education</a>
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
                    <p class="hero-subtitle mt-3">A decade building scalable web apps, improving uptime and security, and leading high-performing teams. Driving large-scale product delivery with a relentless focus on performance, security, and automation — delivering measurable business outcomes using modern stacks (MERN/LAMP), cloud-native patterns, and AI copilots like Codex and Claude Code.</p>

                    <div class="mt-4 d-flex gap-2">
                        <a href="/index.php#case-studies" class="btn btn-accent">Featured Work</a>
                        <a href="/index.php#skills" class="btn btn-outline-light">Skills</a>
                        <a href="/index.php#education" class="btn btn-outline-light">Education</a>
                    </div>

                    <div class="mt-4">
                        <ul class="list-unstyled row hightlights">
                            <li class="col-sm-6"><i class="fas fa-laptop-code"></i> Full-stack development (MERN & LAMP)</li>
                            <li class="col-sm-6"><i class="fas fa-chart-line"></i> Improved uptime to 99.9% for enterprise platforms</li>
                            <li class="col-sm-6"><i class="fas fa-shield-alt"></i> Security hardening (DDoS, Brute-force mitigation)</li>
                            <li class="col-sm-6"><i class="fas fa-users"></i> Leading cross-functional development teams</li>
                            <li class="col-sm-6"><i class="fas fa-code"></i> Performance optimization & refactoring</li>
                            <li class="col-sm-6"><i class="fas fa-cloud"></i> Cloud & DevOps: AWS, Docker, GitHub Actions</li>
                            <li class="col-sm-6"><i class="fas fa-tools"></i> Internal tools & workflows automation</li>
                            <li class="col-sm-6"><i class="fas fa-project-diagram"></i> API integrations and AI automation (Codex, Claude Code)</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="shadow p-3 profile_card card bg-transparent text-white text-start">
                        <div class="d-flex flex-column align-items-center">
                            <img class="rounded shadow me-3 profile-about" src="images/krishna-headshot2.png" alt="Krishna" />
                            <div class="pt-2">
                                <a class="d-inline pe-2" href="https://www.linkedin.com/in/krishna-pallapolu-b4552738/" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a class="d-inline pe-2"  href="https://github.com/krishnapallapolu" target="_blank">
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
                            <span class="badge badge-accent">Leadership</span>
                            <span class="badge badge-accent">Mentorship</span>
                            <span class="badge badge-accent">Stakeholder Communication</span>
                            <span class="badge badge-accent">Strategic Planning</span>
                            <span class="badge badge-accent">Problem Solving</span>
                            <span class="badge badge-accent">Agile Delivery</span>
                        </div>

                        <div class="mt-3">
                            <a class="btn btn-accent btn-sm me-2" href="/assets/krishnap-cv.pdf" target="_blank" rel="noopener">Download CV</a>
                            <button class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#coverLetterModal" aria-controls="#coverLetterModal" aria-expanded="false">Cover Letter</button>
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
                                <a class="btn btn-outline-secondary btn-sm" href="assets/krishna-coverletter.pdf" target="_blank" rel="noopener">Open in new tab</a>
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
                                var url = 'assets/krishna-coverletter.pdf';
                                // Check if resource exists before showing it
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
            <p class="text-center text-muted mb-4">A concise snapshot of tools, platforms, and expertise used to deliver scalable, secure, and performant systems.</p>

            <div class="row g-3 skills-grid">

                <!-- Skill Card: Frontend -->
                <div class="col-md-6 col-lg-4">
                    <div class="skill-card shadow p-3 h-100">
                        <h4 class="skill-card-title">Frontend</h4>
                        <div class="skill-badges">
                            <span class="skill-badge">JavaScript (ES6+)</span>
                            <span class="skill-badge">React</span>
                            <span class="skill-badge">React Components</span>
                            <span class="skill-badge">Next.js</span>
                            <span class="skill-badge">MUI</span>
                            <span class="skill-badge">Bootstrap</span>
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
                            <span class="skill-badge">Codex</span>
                            <span class="skill-badge">Claude Code</span>
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
                            <h3>Development Manager / Senior Full Stack Developer</h3>
                            <p>Meeting Minds Experts - Dubai, Dubai</p>
                            <p><i> 2023 - Present</i></p>
                            <ul class="d-none">
                                <li>Design, develop, and manage websites, educational platforms, and internal applications specific to the healthcare sector.                                
                                <li>Proficient in integrating websites with third-party applications such as DTCM and Eventsair to retrieve registration and program data, as well as generate barcodes using PHP, cURL, REST API, GraphQl and JSON.</li>
                                <li>Collaborate closely with stakeholders and project managers to ensure seamless coordination and timely delivery of projects.</li>
                                <li>Demonstrated ability to lead teams effectively, resulting in the successful and punctual delivery of websites and applications.</li>
                                <li>Utilized MERN stack for internal applications and Laravel, MySQL, JavaScript, jQuery, Wordpress, Webflow, Wix Velo API, Git/Github and other web technologies.</li>
                            </ul>
                            <ul>
                                <li>Developed, and managed scalable websites, educational platforms, and internal applications using the MERN stack (MongoDB, Express.js, React.js, Node.js) ensuring high performance, data integrity, and seamless user experiences.</li>
                                <li>Led the development of internal application, utilizing the MERN stack to ensure efficient data handling, secure authentication, and user-friendly interfaces. </li>
                                <li>Successfully delivered a healthcare platform serving 6,000+ active users by implementing scalable architecture, improving site performance, and reducing downtime.</li>
                                <li>Proficiently integrated third-party applications like DTCM and Eventsair to automate data retrieval for registrations and generate barcodes using REST APIs, cURL, and JSON.</li>
                                <li>Leveraged Laravel, PHP, MySQL, JavaScript, jQuery, Ajax, WordPress, Webflow, and Wix Velo API for various web projects, maintaining robust version control using Git/GitHub.</li>
                                <li>Implemented AI-driven automation using <strong>n8n</strong>, Codex, and Claude Code for data enrichment, content generation, and automated publishing workflows to reduce manual interventions.</li>
                            </ul>
                            

                        </article>
                        <article class="pb-5">
                            <h3>Senior Web Developer/Lead</h3>
                            <p>Sapaad Pte Ltd, WFA, Bengaluru</p>
                            <p><i>Jan 2022 - Nov 2023</i></p>

                            <ul class="d-none">
                                <li>Led and managed a team of developers in the development projects for the websites throughout the various phases of the project life cycle with industry best practices</li>
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
                <div class="col-md-4 sidebar-sticky pb-5">
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
                                <li>Codex</li>
                                <li>Claude Code</li>
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

    <section id="faq" class="faq-section border-bottom py-5 d-none hidden">
        <div class="container">
            <h2 class="section-title text-center mb-4">FAQs</h2>
            <p class="text-center text-muted mb-4">Quick answers for recruiters, collaborators, and clients.</p>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="faq-card h-100">
                        <h3 class="faq-question">Who is Krishna Pallapolu?</h3>
                        <p class="faq-answer">A senior full-stack developer and development lead with more than a decade of experience, focused on scalable web platforms, AI automation, RAG chatbots.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq-card h-100">
                        <h3 class="faq-question">What do you specialize in?</h3>
                        <p class="faq-answer">MERN/LAMP, API integrations, Cloudflare Workers, vector databases, and AI copilots like Codex and Claude Code.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq-card h-100">
                        <h3 class="faq-question">What roles are you open to?</h3>
                        <p class="faq-answer">Senior/Lead full-stack developer, AI automation engineer, or Development Lead roles in Dubai or remote.</p>
                    </div>
                </div>
            </div>
        </div>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "Who is Krishna Pallapolu?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Krishna Pallapolu is a senior full-stack developer and development lead with experience since 2014, focused on AI automation, RAG chatbots, and scalable web platforms."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What does Krishna specialize in?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "MERN/LAMP, API integrations, Cloudflare Workers, vector databases, and AI copilots like Codex and Claude Code."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What roles is Krishna open to?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Senior/Lead full-stack developer, AI automation engineer, or development lead roles in Dubai or remote."
                    }
                }
            ]
        }
        </script>
    </section>

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
