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
    <!-- Font Awesome Link -->
    <script src="https://kit.fontawesome.com/15ad2a502c.js" crossorigin="anonymous"></script>
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
                <i class="fa-sharp fa-thin fa-envelope" aria-hidden="true"></i>
                <a href="mailto:reception@coremedica.co.uk">reception@coremedica.co.uk</a>
            </div>
            <div class="header-topbar__item">
                <i class="fa-sharp fa-thin fa-phone"></i>
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
                                            <i class="fa-kit fa-ear-anatomy icon--xxl" aria-hidden="true" focusable="false"></i>
                                        </div>
                                        <p class="mega-menu__title">Earwax Removal</p>
                                        <p class="mega-menu__desc">Fast, gentle earwax removal with a clear explanation of what's right for you. Clinic and home visit options available.</p>
                                        <div class="mega-menu__links">
                                            <a href="/earwax-removal" class="mega-menu__link">Earwax Removal</a>
                                            <a href="/earwax-removal-southampton" class="mega-menu__link">Earwax Removal - Southampton</a>
                                            <a href="/earwax-removal-portsmouth" class="mega-menu__link">Earwax Removal - Portsmouth</a>
                                        </div>
                                    </div>

                                    <!-- Wellness Consultations -->
                                    <div class="mega-menu__card">
                                        <div class="mega-menu__icon">
                                            <i class="fa-sharp fa-thin fa-sun icon--xxl" aria-hidden="true" focusable="false"></i>
                                        </div>
                                        <p class="mega-menu__title">Wellness Consultations</p>
                                        <p class="mega-menu__desc">Personalised support for energy, immunity and wellbeing — including Vitamin D and B12 guidance based on your needs.</p>
                                        <div class="mega-menu__links">
                                            <a href="/wellness-consultations" class="mega-menu__link">Wellness Services</a>
                                        </div>
                                    </div>

                                    <!-- Hayfever & Allergy -->
                                    <div class="mega-menu__card">
                                        <div class="mega-menu__icon">
                                            <i class="fa-kit fa-hayfever-pollen icon--xxl" aria-hidden="true" focusable="false"></i>
                                        </div>
                                        <p class="mega-menu__title">Hayfever &amp; Allergy</p>
                                        <p class="mega-menu__desc">Sneezing, itchy eyes, blocked nose? We'll help you get on top of hayfever with a friendly consultation and tailored options.</p>
                                        <div class="mega-menu__links">
                                            <a href="/seasonal-allergy-consultations" class="mega-menu__link">Hayfever Consultation</a>
                                        </div>
                                    </div>

                                    <!-- Weight Management -->
                                    <div class="mega-menu__card">
                                        <div class="mega-menu__icon">
                                            <i class="fa-sharp fa-thin fa-scale-balanced icon--xxl" aria-hidden="true" focusable="false"></i>
                                        </div>
                                        <p class="mega-menu__title">Weight Management</p>
                                        <p class="mega-menu__desc">Medically supervised weight management with a plan that fits your life and regular check-ins to keep you on track.</p>
                                        <div class="mega-menu__links">
                                            <a href="/weight-loss-management" class="mega-menu__link">Medically Supervised Weight-Loss</a>
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