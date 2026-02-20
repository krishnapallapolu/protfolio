<?php
$siteName = 'Krishna Pallapolu';
$pageTitle = 'Krishna Pallapolu | Full-Stack Developer & AI Automation';
$metaDescription = 'Krishna Pallapolu is a full-stack developer and development lead specializing in AI automation, RAG chatbots, and scalable web apps (MERN/LAMP).';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$requestUri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$canonical = 'https://' . $host . strtok($requestUri, '?');
$ogImage = 'https://' . $host . '/images/krishna-headshot2.png';
$metaKeywords = 'Krishna Pallapolu, full stack developer, AI automation, RAG, MERN, LAMP, Cloudflare Workers, API integrations';
$structuredData = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Person',
            '@id' => $canonical . '#person',
            'name' => 'Krishna Pallapolu',
            'url' => $canonical,
            'jobTitle' => 'Development Lead, Full-Stack Developer',
            'knowsAbout' => [
                'AI automation',
                'RAG',
                'Full-stack development',
                'MERN',
                'LAMP',
                'Cloudflare Workers',
                'API integrations',
                'Scalable web applications',
                'AWS'
            ],
            'sameAs' => [
                'https://www.linkedin.com/in/krishna-pallapolu-b4552738/',
                'https://github.com/krishnapallapolu'
            ]
        ],
        [
            '@type' => 'WebSite',
            '@id' => $canonical . '#website',
            'name' => $siteName,
            'url' => $canonical,
            'publisher' => [
                '@id' => $canonical . '#person'
            ]
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES); ?>" />
    <meta name="keywords" content="<?php echo htmlspecialchars($metaKeywords, ENT_QUOTES); ?>" />
    <meta name="author" content="Krishna Pallapolu" />
    <meta name="robots" content="index,follow" />
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES); ?>" />
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical, ENT_QUOTES); ?>" />
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES); ?>" />
    <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES); ?>" />
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES); ?>" />
    <script type="application/ld+json">
        <?php echo json_encode($structuredData, JSON_UNESCAPED_SLASHES); ?>
    </script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <!-- Theme initialization (prevents flash of wrong theme) -->
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            // Default to system preference when no saved choice exists
            const theme = savedTheme || (prefersDark ? 'dark' : 'light');
            // Explicitly set data-theme to 'light' or 'dark' for consistency
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>

</head>
<body>
<main>
