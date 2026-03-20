<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle ?? 'CoreMedica Wellness Group'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription ?? 'Professional earwax removal and wellness services in Southampton and Portsmouth.'); ?>">

    <?php if (!empty($pageCanonical)): ?>
        <link rel="canonical" href="<?php echo htmlspecialchars($pageCanonical); ?>">
    <?php endif; ?>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@500&display=swap" rel="stylesheet">

    <!-- Stylesheet — swap to main.min.css for production -->
    <link rel="stylesheet" href="/assets/css/main.css">

    <!-- Favicon placeholder -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
</head>

<body>

    <!-- Skip to main content (accessibility) -->
    <a class="skip-link" href="#main-content">Skip to main content</a>

    <!-- Overlay behind mobile nav panel -->
    <div class="nav-overlay" id="navOverlay" aria-hidden="true"></div>

    <!-- Top utility bar -->
    <div class="header-topbar">
        <div class="container">
            <div class="header-topbar__item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                    <polyline points="22,6 12,13 2,6" />
                </svg>
                <a href="mailto:reception@coremedica.co.uk">reception@coremedica.co.uk</a>
            </div>
            <div class="header-topbar__item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                </svg>
                <a href="tel:07777100716">07777 100716</a>
            </div>
        </div>
    </div>

    <header class="site-header" id="siteHeader" role="banner">
        <div class="container">

            <a href="/" class="site-header__logo" aria-label="CoreMedica Wellness Group — Home">
                <img src="/assets/images/coremedica_new_logo_text.webp"
                    alt="CoreMedica Wellness Group"
                    width="200"
                    height="44">
            </a>

            <nav class="site-nav" id="siteNav" aria-label="Primary navigation">
                <ul class="site-nav__list" role="list">
                    <li class="site-nav__item">
                        <a href="/" class="site-nav__link<?php echo ($activePage ?? '') === 'home' ? ' is-active' : ''; ?>">Home</a>
                    </li>

                    <!-- Services with mega menu -->
                    <li class="site-nav__item site-nav__item--mega">
                        <a href="/services/"
                            class="site-nav__link site-nav__link--has-mega<?php echo ($activePage ?? '') === 'services' ? ' is-active' : ''; ?>"
                            id="megaTrigger"
                            aria-haspopup="true"
                            aria-expanded="false">
                            Services
                            <span class="nav-chevron" aria-hidden="true"></span>
                        </a>

                        <div class="mega-menu" role="region" aria-label="Services menu">
                            <div class="container">
                                <div class="mega-menu__grid">

                                    <!-- Earwax Removal -->
                                    <div class="mega-menu__card">
                                        <div class="mega-menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 2a7 7 0 017 7c0 3-1.5 5-3 6.5S14 18 14 20h-2c0-2.5 1.5-4 3-5.5S17 12 17 9A5 5 0 007 9c0 1.5.5 2.5 1 3.5" />
                                                <path d="M9 17c0 1.657 1.343 3 3 3" />
                                            </svg>
                                        </div>
                                        <p class="mega-menu__title">Earwax Removal</p>
                                        <p class="mega-menu__desc">Fast, gentle earwax removal with a clear explanation of what's right for you. Clinic and home visit options available.</p>
                                        <div class="mega-menu__links">
                                            <a href="/earwax-removal/" class="mega-menu__link">Earwax Removal (Southampton)</a>
                                            <a href="/home-visits/southampton/" class="mega-menu__link">Home Visits (Southampton)</a>
                                            <a href="/home-visits/portsmouth/" class="mega-menu__link">Home Visits (Portsmouth)</a>
                                        </div>
                                    </div>

                                    <!-- Wellness Consultations -->
                                    <div class="mega-menu__card">
                                        <div class="mega-menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                            </svg>
                                        </div>
                                        <p class="mega-menu__title">Wellness Consultations</p>
                                        <p class="mega-menu__desc">Personalised support for energy, immunity and wellbeing — including Vitamin D and B12 guidance based on your needs.</p>
                                        <div class="mega-menu__links">
                                            <a href="/wellness/" class="mega-menu__link">Wellness Services</a>
                                        </div>
                                    </div>

                                    <!-- Hayfever & Allergy -->
                                    <div class="mega-menu__card">
                                        <div class="mega-menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="5" />
                                                <line x1="12" y1="1" x2="12" y2="3" />
                                                <line x1="12" y1="21" x2="12" y2="23" />
                                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                                                <line x1="1" y1="12" x2="3" y2="12" />
                                                <line x1="21" y1="12" x2="23" y2="12" />
                                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
                                            </svg>
                                        </div>
                                        <p class="mega-menu__title">Hayfever &amp; Allergy</p>
                                        <p class="mega-menu__desc">Sneezing, itchy eyes, blocked nose? We'll help you get on top of hayfever with a friendly consultation and tailored options.</p>
                                        <div class="mega-menu__links">
                                            <a href="/hayfever-allergy/" class="mega-menu__link">Hayfever Consultation</a>
                                        </div>
                                    </div>

                                    <!-- Weight Management -->
                                    <div class="mega-menu__card">
                                        <div class="mega-menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="12" y1="20" x2="12" y2="4" />
                                                <polyline points="6 10 12 4 18 10" />
                                            </svg>
                                        </div>
                                        <p class="mega-menu__title">Weight Management</p>
                                        <p class="mega-menu__desc">Medically supervised weight management with a plan that fits your life and regular check-ins to keep you on track.</p>
                                        <div class="mega-menu__links">
                                            <a href="/weight-management/" class="mega-menu__link">Medically Supervised Weight-Loss</a>
                                        </div>
                                    </div>

                                </div><!-- /.mega-menu__grid -->
                            </div><!-- /.container -->
                        </div><!-- /.mega-menu -->
                    </li>

                    <li class="site-nav__item">
                        <a href="/blog/" class="site-nav__link<?php echo ($activePage ?? '') === 'blog' ? ' is-active' : ''; ?>">Blog</a>
                    </li>
                    <li class="site-nav__item">
                        <a href="/contact/" class="site-nav__link<?php echo ($activePage ?? '') === 'contact' ? ' is-active' : ''; ?>">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="site-header__cta">
                <a href="/book/" class="site-header__cta-link">Book Online</a>
            </div>

            <button class="nav-toggle"
                id="navToggle"
                aria-controls="siteNav"
                aria-expanded="false"
                aria-label="Open navigation menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div><!-- /.container -->
    </header>

    <main id="main-content">
        <div class="container">