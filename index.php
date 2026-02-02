<?php

include_once('inc/header.php');


?>
    <style>
        /* Custom CSS */
        /* Add your custom styles here */
        
        body {
            font-family: "Noto Sans", sans-serif;
            font-optical-sizing: auto;
        }
        }
        h1 .intro_text{
            font-size: 32px;
        }
        h1 .name {
            font-size: 64px;
        }
        .hightlights li {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .profile_card,
        .shadow_r {
            box-shadow: 10px 10px 5px 0px rgba(51, 232, 158, 0.75);
            -webkit-box-shadow: 10px 10px 5px 0px rgba(51, 232, 158, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(51, 232, 158, 0.75);
        }
        .shadow_l,
        #skills {
            box-shadow: 10px 10px 5px 0px rgba(51, 232, 158, 0.75) inset;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(51, 232, 158, 0.75) inset;
            /*-moz-box-shadow: 10px 10px 5px 0px rgba(54,71,173,0.75) inset;*/
            -moz-box-shadow: 10px 10px 5px 0px rgba(51, 232, 158, 0.75) inset;

        }
        .text_shadow {
            padding: 0 5px;
            border-radius: 5px;;
            display: inline-block;
            color: #FFFFFF;
            background: rgba(49, 63, 141, 0.7);
            text-shadow: 2px 2px 0 #4074b5, 2px -2px 0 #4074b5, -2px 2px 0 #4074b5, -2px -2px 0 #4074b5, 2px 0px 0 #4074b5, 0px 2px 0 #4074b5, -2px 0px 0 #4074b5, 0px -2px 0 #4074b5;
        }
        .fab {
            font-size: 30px;
        }
        .fas {
            font-size: 20px;
            padding-right: 10px;
        }
        .f18 {
            font-size:18px;
            line-height: 1.5;
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
    <section id="about" class="bg-dark py-5 shadow border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5 py-4">
                    <div class="shadow p-3">
                        <div class="profile_card card bg-transparent text-white align-items-center align-items-md-start">
                            <img class="rounded shadow" width="200px" height="200px" src="krishna_l.jpeg" class="Krishna" />
                            <div class="card-body">
                                <p class="card-text">
                                    <div class="d-flex flex-column ">
                                        <a class="mb-2" href="mailto:krishna.naidu24@gmail.com"><i class="fas fa-envelope pr-2"></i>krishna.naidu24@gmail.com</a>
                                        <a class="mb-2" href="tel:+971503242537"><i class="fas fa-mobile-alt pr-2"></i>+971503242537</a>
                                        <a class="mb-2" href="tel:+919945789900"><i class="fas fa-mobile-alt pr-2"></i>+919945789900</a>
                                        <p><i class="fas fa-map-marker-alt"></i> Dubai, UAE</p>
                                    </div>
                                </p>
                                <div>
                                    <a class="d-inline pe-2" href="https://www.linkedin.com/in/krishna-pallapolu-b4552738/" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a class="d-inline pe-2"  href="https://github.com/krishna-pallapolu" target="_blank">
                                        <i class="fab fa-github"></i>
                                    </a>
                                    <!-- Add more social icons from Font Awesome as needed -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 py-4">
                    <div class="card bg-dark w-100 text-white">
                        <div class="card-body">
                            
                            <h1 class=" pb-5"><span class="intro_text shadow-none">Hi!</span></br> <span class="name text_shadow mt-5">Krishna Pallapolu</span></h1>
                            <h2 class="card-title mb-5">a Full stack Developer (MERN & LAMP)</h2>
                            <div class="card-text">
                                <h4 class="mb-5">Development Lead | Senior Developer | A Decade of Web Development Mastery</h4>
                                <p class="f18"> A decade of hands-on experience in leading high-performing development teams, delivering innovative web interfaces, and crafting seamless user experiences across a range of industries. Proven expertise in full-stack development, performance optimization, and security enhancements, with a passion for driving digital transformation through the latest technologies.</p>
                               

                                
                                <ul class="list-unstyled row px-3 ps-2 hightlights">
                                    <li><i class="fas fa-laptop-code"></i>Full-stack development expertise using MERN stack, LAMP stack to build scalable, maintainable, and secure solutions.</li>
                                    <li><i class="fas fa-chart-line"></i> Decade of hands-on experience</li>
                                    <li><i class="fas fa-code"></i>Demonstrated success in optimizing system performance, achieving 99.9% uptime, and mitigating security risks (Brute-force, DDoS) to ensure system reliability and data protection.</li>
                                    <li><i class="fas fa-magic"></i> Collaborated with cross-functional teams (Design, QA, Marketing) to ensure smooth project delivery, maintaining a 100% on-time launch record while improving team productivity.</li>
                                    <li><i class="fas fa-users"></i> Leading successful development teams</li>
                                    <li><i class="fas fa-trophy"></i> Proven track record of delivering high-quality solutions</li>
                                    <li><i class="fas fa-wrench"></i> Optimizing performance and implementing security measures</li>
                                    <li><i class="fas fa-cogs"></i>Expertise in cloud infrastructure (AWS, Docker, Github Actions), CI/CD pipelines to streamline deployment, reduce downtime, and enhance operational efficiency.</li>
                                    <li><i class="fas fa-users-cog"></i>Adept at implementing security best practices and authentication protocols (JWT, OAuth), ensuring robust protection for users and sensitive data.</li>
                                </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section id="skills">
        <div class="skills-section" >
            <h2 class="section-title">Technical Skills</h2>
            <div class="skills-container">
                <div class="skill-category w-100">
                    <h3>Frontend</h3>
                    <ul class="frontend list-unstyled row px-3 align-items-center justify-content-center">
                        <li>React.js</li>
                        <li>Next.js</li>
                        <li>Redux</li>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Sass</li>
                        <li>Tailwind CSS</li>
                        <li>JavaScript (ES6+)</li>
                        <li>TypeScript</li>
                        <li>jQuery</li>
                        <li>Ajax</li>
                        <li>Web APIs</li>
                        <li>Vite</li>
                        <li>Framer Motion</li>
                        <li>Responsive Design</li>
                        <li>Redux Toolkit</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <h3>Backend</h3>
                    <ul class="list-unstyled row px-3">
                        <li>Node.js</li>
                        <li>Express.js</li>
                        <li>PHP</li>
                        <li>Laravel</li>
                        <li>REST APIs</li>
                        <li>GraphQL</li>
                        <li>Prisma</li>
                        <li>Supabase</li>
                        <li>Redis</li>
                        <li>Microservices</li>
                        <li>Cloudflare Workers</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <h3>AI & Machine Learning</h3>
                    <ul class="list-unstyled row px-3">
                        <li>OpenAI API</li>
                        <li>Claude API</li>
                        <li>LangChain</li>
                        <li>Prompt Engineering</li>
                        <li>RAG Systems</li>
                        <li>AI Integrations</li>
                        <li>Chatbot Development</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <h3>Automation & Integration</h3>
                    <ul class="list-unstyled row px-3">
                        <li>n8n Workflows</li>
                        <li>Data Aggregation</li>
                        <li>Data Transformation</li>
                        <li>Platform Integration</li>
                        <li>API Orchestration</li>
                        <li>ETL Pipelines</li>
                        <li>Workflow Automation</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <h3>CMS</h3>
                    <ul class="list-unstyled row px-3">
                        <li>WordPress</li>
                        <li>Webflow</li>
                        <li>Shopify</li>
                        <li>Wix</li>
                        <li>Custom Themes & Plugins</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <h3>DevOps & Cloud</h3>
                    <ul class="list-unstyled row px-3">
                        <li>AWS (Lambda, S3, RDS)</li>
                        <li>Docker</li>
                        <li>Vercel</li>
                        <li>Netlify</li>
                        <li>Cloudflare</li>
                        <li>CI/CD (GitHub Actions)</li>
                        <li>Kubernetes</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <h3>Databases</h3>
                    <ul class="list-unstyled row px-3">
                        <li>MongoDB</li>
                        <li>MySQL</li>
                        <li>PostgreSQL</li>
                        <li>Firebase</li>
                        <li>Database Optimization</li>
                        <li>Migrations</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <h3>Authentication & Security</h3>
                    <ul class="list-unstyled row px-3">
                        <li>JWT</li>
                        <li>OAuth 2.0</li>
                        <li>Bcrypt.js</li>
                        <li>RBAC</li>
                        <li>Security Best Practices</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <h3>Tools & Practices</h3>
                    <ul class="list-unstyled row px-3">
                        <li>Git & GitHub</li>
                        <li>PM2</li>
                        <li>Webpack</li>
                        <li>TDD</li>
                        <li>Unit Testing</li>
                        <li>SOLID Principles</li>
                        <li>Agile/Scrum</li>
                    </ul>
                </div>

            </div>
        </div>

    </section>
    
    
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

    <!-- Case Studies Section -->
    <section id="case-studies" class="case-studies-section border-bottom">
        <div class="container">
            <h2 class="text_shadow mb-5 text-center">Case Studies</h2>
            <div class="row g-4">
                <!-- Case Study 1: Healthcare Platform -->
                <div class="col-lg-6">
                    <div class="case-study-card">
                        <div class="case-study-image">
                            <i class="fas fa-hospital-user"></i>
                        </div>
                        <div class="case-study-content">
                            <h3 class="case-study-title">Healthcare Education Platform</h3>
                            <p class="case-study-description">
                                Developed a comprehensive healthcare education platform serving medical professionals.
                                Built scalable architecture to handle concurrent users during live training sessions.
                            </p>
                            <div class="case-study-tech">
                                <span class="tech-badge">React.js</span>
                                <span class="tech-badge">Node.js</span>
                                <span class="tech-badge">MongoDB</span>
                                <span class="tech-badge">AWS</span>
                            </div>
                            <div class="case-study-stats">
                                <div class="stat-item">
                                    <div class="stat-value">6,000+</div>
                                    <div class="stat-label">Active Users</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">99.9%</div>
                                    <div class="stat-label">Uptime</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">40%</div>
                                    <div class="stat-label">Faster Load</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2: Restaurant POS -->
                <div class="col-lg-6">
                    <div class="case-study-card">
                        <div class="case-study-image">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="case-study-content">
                            <h3 class="case-study-title">Enterprise Restaurant POS System</h3>
                            <p class="case-study-description">
                                Led development of a cloud-based POS system for restaurants.
                                Improved website uptime from 80% to 99.9% and implemented security measures against DDoS attacks.
                            </p>
                            <div class="case-study-tech">
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">React.js</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">Redis</span>
                            </div>
                            <div class="case-study-stats">
                                <div class="stat-item">
                                    <div class="stat-value">30,000+</div>
                                    <div class="stat-label">User Base</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">100%</div>
                                    <div class="stat-label">On-time Delivery</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">20%</div>
                                    <div class="stat-label">Performance Boost</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3: Event Management -->
                <div class="col-lg-6">
                    <div class="case-study-card">
                        <div class="case-study-image">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="case-study-content">
                            <h3 class="case-study-title">Event Registration System</h3>
                            <p class="case-study-description">
                                Built integrated event management system with third-party APIs (DTCM, Eventsair).
                                Automated registration data retrieval and barcode generation for seamless check-ins.
                            </p>
                            <div class="case-study-tech">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">REST API</span>
                                <span class="tech-badge">JavaScript</span>
                                <span class="tech-badge">MySQL</span>
                            </div>
                            <div class="case-study-stats">
                                <div class="stat-item">
                                    <div class="stat-value">50+</div>
                                    <div class="stat-label">Events Managed</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">10,000+</div>
                                    <div class="stat-label">Registrations</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">60%</div>
                                    <div class="stat-label">Time Saved</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 4: Internal Tools -->
                <div class="col-lg-6">
                    <div class="case-study-card">
                        <div class="case-study-image">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="case-study-content">
                            <h3 class="case-study-title">Internal Tools & Automation</h3>
                            <p class="case-study-description">
                                Developed suite of internal tools for workflow automation.
                                Implemented CI/CD pipelines with GitHub Actions for continuous deployment and automated testing.
                            </p>
                            <div class="case-study-tech">
                                <span class="tech-badge">MERN Stack</span>
                                <span class="tech-badge">Docker</span>
                                <span class="tech-badge">GitHub Actions</span>
                                <span class="tech-badge">AWS</span>
                            </div>
                            <div class="case-study-stats">
                                <div class="stat-item">
                                    <div class="stat-value">5+</div>
                                    <div class="stat-label">Tools Built</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">80%</div>
                                    <div class="stat-label">Manual Work Reduced</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-value">3x</div>
                                    <div class="stat-label">Deploy Speed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
