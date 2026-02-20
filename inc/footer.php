   <footer class="footer bg-dark text-white py-5 shadow">
        <div class="container text-center">
            <p>&copy; <?php echo date('Y'); ?> Krishna Pallapolu. All rights reserved.</p>
        </div>
    </footer>
    <button id="go-top" class="go-top" aria-label="Go to top" title="Go to top">↑</button>
</main>
<!-- Bootstrap Bundle with Popper -->
<script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script defer  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<!-- Theme Toggle Script -->
<script>
    const themeToggle = document.getElementById('theme-toggle');

    function setTheme(theme) {
        // Set explicit data-theme value
        document.documentElement.setAttribute('data-theme', theme);

        localStorage.setItem('theme', theme);
        if (themeToggle) {
            themeToggle.setAttribute('aria-pressed', theme === 'dark' ? 'true' : 'false');
        }
    }

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            setTheme(newTheme);
        });

        // Determine initial theme from localStorage or system preference and apply immediately
        const saved = localStorage.getItem('theme');
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const initTheme = saved ? saved : (prefersDark ? 'dark' : 'light');
        themeToggle.setAttribute('aria-pressed', initTheme === 'dark' ? 'true' : 'false');
        // Apply theme classes immediately so no reload is required
        setTheme(initTheme);
    }

    // Listen for system theme changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
        if (!localStorage.getItem('theme')) {
            setTheme(e.matches ? 'dark' : 'light');
        }
    });

    // Go to Top button behavior
    (function() {
        const goTop = document.getElementById('go-top');
        if (!goTop) return;

        const showAt = 200; // px
        const onScroll = () => {
            if (window.scrollY > showAt) {
                goTop.classList.add('show');
            } else {
                goTop.classList.remove('show');
            }
        };

        document.addEventListener('scroll', onScroll, { passive: true });

        goTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        goTop.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                goTop.click();
            }
        });

        // Init visibility
        onScroll();
    })();

    // Smooth scroll for intra-site anchor links that point to index anchors (prevents reloads when already on index)
    (function() {
        document.addEventListener('click', function(e) {
            const link = e.target.closest('a');
            if (!link) return;
            const href = link.getAttribute('href');
            if (!href) return;

            // Handle links containing an anchor (e.g. "/index.php#case-studies", "index.php#case-studies" or "#case-studies")
            if (href.indexOf('#') !== -1) {
                const [path, hash] = href.split('#');
                const targetId = hash;
                const cleanPath = (path || '').replace(/^\.\//, '').replace(/^\//, ''); // remove leading ./ or /

                // If link points to index anchors and we're on index page, do smooth scroll instead of reload
                const onIndex = location.pathname.endsWith('index.php') || location.pathname === '/' || location.pathname === '';
                if ((cleanPath === '' || cleanPath === 'index.php') && targetId) {
                    if (onIndex) {
                        const el = document.getElementById(targetId);
                        if (el) {
                            e.preventDefault();
                            el.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    }
                }
            }
        });
    })();
</script>
</body>
</html>
