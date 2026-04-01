<?php
$pageTitle       = 'CoreMedica Wellness Group | Earwax Removal &amp; Wellness Services Southampton &amp; Portsmouth';
$pageDescription = 'Professional microsuction earwax removal, wellness consultations, hayfever treatment and weight management in Southampton and Portsmouth. Clinic and home visits available.';
require_once 'includes/header.php';
?>

<main id="main-content">

    <!-- ═══════════════════════════════════════════
       HERO
  ════════════════════════════════════════════ -->
    <section class="hero" aria-labelledby="hero-heading">
        <div class="hero__bg-pattern" aria-hidden="true"></div>
        <div class="container">
            <div class="hero__inner">

                <p class="hero__eyebrow">Southampton &amp; Portsmouth</p>

                <h1 class="hero__heading" id="hero-heading">
                    Expert Ear Care<br>
                    &amp; Wellness Services,<br>
                    <span class="hero__heading-accent">Close to Home</span>
                </h1>

                <p class="hero__subheading">
                    Clinically trained practitioners delivering microsuction earwax removal,
                    personalised wellness consultations, hayfever treatment and weight management —
                    at our clinic or in the comfort of your own home.
                </p>

                <div class="hero__ctas">
                    <a href="https://coremedica.cliniko.com/bookings" class="btn btn--primary" target="_blank" rel="noopener">
                        Book Online
                    </a>
                    <a href="/services" class="btn btn--ghost">
                        Our Services
                    </a>
                </div>

                <ul class="hero__trust-list" aria-label="Key facts">
                    <li class="hero__trust-item">
                        <i class="fa-sharp fa-thin fa-circle-check" aria-hidden="true" focusable="false"></i>
                        Clinically trained practitioners
                    </li>
                    <li class="hero__trust-item">
                        <i class="fa-sharp fa-thin fa-circle-check" aria-hidden="true" focusable="false"></i>
                        Clinic &amp; home visits available
                    </li>
                    <li class="hero__trust-item">
                        <i class="fa-sharp fa-thin fa-circle-check" aria-hidden="true" focusable="false"></i>
                        Same-day &amp; weekend appointments
                    </li>
                </ul>

            </div>
        </div>
        <div class="hero__scroll-cue" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false">
                <path d="M12 16l-6-6h12z" />
            </svg>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
       SERVICE CARDS
  ════════════════════════════════════════════ -->
    <section class="services-section" aria-labelledby="services-heading">
        <div class="container">

            <div class="section-header">
                <h2 class="section-header__heading" id="services-heading">How We Can Help</h2>
                <p class="section-header__lead">
                    We offer a focused range of private health services, delivered with care and
                    clinical precision. Every appointment is unhurried and tailored to you.
                </p>
            </div>

            <ul class="service-cards" role="list">

                <!-- Earwax Removal -->
                <li class="service-card">
                    <div class="service-card__icon-wrap" aria-hidden="true">
                        <i class="fa-kit fa-ear-anatomy icon--xxl" aria-hidden="true" focusable="false"></i>
                    </div>
                    <div class="service-card__body">
                        <h3 class="service-card__heading">Earwax Removal</h3>
                        <p class="service-card__text">
                            Safe, gentle microsuction and irrigation to clear blocked ears quickly.
                            Most appointments take under 30 minutes with immediate relief.
                        </p>
                        <ul class="service-card__features">
                            <li>Microsuction &amp; irrigation</li>
                            <li>Clinic or home visit</li>
                            <li>Same-day bookings available</li>
                        </ul>
                    </div>
                    <a href="/services/earwax-removal" class="service-card__link btn btn--outline">
                        Find Out More
                        <i class="fa-sharp fa-thin fa-arrow-right" aria-hidden="true" focusable="false"></i>
                    </a>
                </li>

                <!-- Weight Management -->
                <li class="service-card">
                    <div class="service-card__icon-wrap" aria-hidden="true">
                        <i class="fa-sharp fa-thin fa-scale-balanced icon--xl" aria-hidden="true" focusable="false"></i>
                    </div>
                    <div class="service-card__body">
                        <h3 class="service-card__heading">Weight Management</h3>
                        <p class="service-card__text">
                            Personalised programmes combining clinical assessment, lifestyle guidance
                            and ongoing support to help you reach and maintain a healthy weight.
                        </p>
                        <ul class="service-card__features">
                            <li>Clinical assessment included</li>
                            <li>Personalised plan</li>
                            <li>Ongoing practitioner support</li>
                        </ul>
                    </div>
                    <a href="/services/weight-management" class="service-card__link btn btn--outline">
                        Find Out More
                        <i class="fa-sharp fa-thin fa-arrow-right" aria-hidden="true" focusable="false"></i>
                    </a>
                </li>

                <!-- Wellness Consultations -->
                <li class="service-card">
                    <div class="service-card__icon-wrap" aria-hidden="true">
                        <i class="fa-sharp fa-thin fa-sun icon--xl" aria-hidden="true" focusable="false"></i>
                    </div>
                    <div class="service-card__body">
                        <h3 class="service-card__heading">Wellness Consultations</h3>
                        <p class="service-card__text">
                            Targeted consultations for fatigue, immunity and general wellbeing,
                            including vitamin and nutrient support following clinical assessment.
                        </p>
                        <ul class="service-card__features">
                            <li>Fatigue &amp; energy support</li>
                            <li>Immunity &amp; vitamin support</li>
                            <li>Personalised health advice</li>
                        </ul>
                    </div>
                    <a href="/services/wellness-consultations" class="service-card__link btn btn--outline">
                        Find Out More
                        <i class="fa-sharp fa-thin fa-arrow-right" aria-hidden="true" focusable="false"></i>
                    </a>
                </li>

                <!-- Hayfever & Allergy -->
                <li class="service-card">
                    <div class="service-card__icon-wrap" aria-hidden="true">
                        <i class="fa-kit fa-hayfever-pollen icon--xl" aria-hidden="true" focusable="false"></i>
                    </div>
                    <div class="service-card__body">
                        <h3 class="service-card__heading">Hayfever &amp; Allergy</h3>
                        <p class="service-card__text">
                            Effective, fast-acting seasonal allergy treatment to help you through
                            pollen season without the misery. Assessment-led and clinically safe.
                        </p>
                        <ul class="service-card__features">
                            <li>Seasonal allergy relief</li>
                            <li>Clinical assessment included</li>
                            <li>Pop-up clinic &amp; home visits</li>
                        </ul>
                    </div>
                    <a href="/services/hayfever-allergy" class="service-card__link btn btn--outline">
                        Find Out More
                        <i class="fa-sharp fa-thin fa-arrow-right" aria-hidden="true" focusable="false"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     ABOUT
════════════════════════════════════════════ -->
    <section class="about-section" aria-labelledby="about-heading">
        <div class="container">
            <div class="about-section__inner">

                <div class="about-section__text">
                    <p class="about-section__eyebrow">Who We Are</p>
                    <h2 class="about-section__heading" id="about-heading">
                        Private Healthcare That Puts You First
                    </h2>
                    <p class="about-section__lead">
                        CoreMedica Wellness Group was founded with a simple purpose — to make
                        high-quality clinical care accessible when and where people need it most.
                    </p>
                    <p>
                        When NHS GP practices withdrew earwax removal services, thousands of
                        patients across Southampton and Portsmouth were left without an accessible
                        local option. We stepped in to fill that gap, and have since grown into a
                        wider wellness practice offering a focused range of services delivered with
                        genuine clinical expertise.
                    </p>
                    <p>
                        Our team is led by <strong>Jacqueline Allen</strong>, Advanced Clinical
                        Practitioner, and <strong>Lynda Morgan</strong>, Advanced Nurse Practitioner
                        — both with extensive experience in clinical assessment and patient care.
                        Every appointment is unhurried, personalised, and delivered with the same
                        standard of care you would expect from any regulated healthcare setting.
                    </p>
                    <p>
                        CoreMedica is currently completing registration with the Care Quality
                        Commission (CQC), reflecting our commitment to the highest standards of
                        clinical governance and patient safety.
                    </p>
                    <a href="/about" class="btn btn--outline">Meet the Team</a>
                </div>

                <div class="about-section__values" aria-label="Our values">
                    <div class="about-section__value">
                        <span class="about-section__value-icon" aria-hidden="true">
                            <i class="fa-sharp fa-thin fa-shield" aria-hidden="true" focusable="false"></i>
                        </span>
                        <div>
                            <h3 class="about-section__value-heading">Clinically Led</h3>
                            <p class="about-section__value-text">
                                Every service is designed and delivered by Advanced Practitioners
                                with real-world clinical backgrounds.
                            </p>
                        </div>
                    </div>

                    <div class="about-section__value">
                        <span class="about-section__value-icon" aria-hidden="true">
                            <i class="fa-sharp fa-thin fa-clock" aria-hidden="true" focusable="false"></i>
                        </span>
                        <div>
                            <h3 class="about-section__value-heading">Your Time, Your Terms</h3>
                            <p class="about-section__value-text">
                                Same-day, weekend, and home visit appointments — built around
                                your schedule, not ours.
                            </p>
                        </div>
                    </div>

                    <div class="about-section__value">
                        <span class="about-section__value-icon" aria-hidden="true">
                            <i class="fa-sharp fa-thin fa-users" aria-hidden="true" focusable="false"></i>
                        </span>
                        <div>
                            <h3 class="about-section__value-heading">Person-Centred Care</h3>
                            <p class="about-section__value-text">
                                No rushed appointments, no impersonal service. Just attentive,
                                tailored care for every individual patient.
                            </p>
                        </div>
                    </div>

                    <div class="about-section__value">
                        <span class="about-section__value-icon" aria-hidden="true">
                            <i class="fa-sharp fa-thin fa-heart-pulse" aria-hidden="true" focusable="false"></i>
                        </span>
                        <div>
                            <h3 class="about-section__value-heading">Accessible Private Care</h3>
                            <p class="about-section__value-text">
                                Founded to bridge the gap left by NHS service withdrawals —
                                quality care that is genuinely within reach.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     HOW IT WORKS
════════════════════════════════════════════ -->
    <section class="how-it-works" aria-labelledby="hiw-heading">
        <div class="container">

            <div class="section-header">
                <h2 class="section-header__heading" id="hiw-heading">How It Works</h2>
                <p class="section-header__lead">
                    Getting the care you need is straightforward. From booking to treatment,
                    most appointments are completed within 30 minutes.
                </p>
            </div>

            <ol class="hiw-steps" role="list">

                <li class="hiw-step">
                    <div class="hiw-step__number" aria-hidden="true">01</div>
                    <div class="hiw-step__connector" aria-hidden="true"></div>
                    <div class="hiw-step__icon-wrap" aria-hidden="true">
                        <i class="fa-sharp fa-thin fa-calendar" aria-hidden="true" focusable="false"></i>
                    </div>
                    <div class="hiw-step__body">
                        <h3 class="hiw-step__heading">Book Online or by Phone</h3>
                        <p class="hiw-step__text">
                            Choose your service, select a time that suits you — including same-day
                            and weekend slots — and confirm your booking through our online system
                            or by calling us directly. Home visit availability can be checked at
                            the time of booking.
                        </p>
                    </div>
                </li>

                <li class="hiw-step">
                    <div class="hiw-step__number" aria-hidden="true">02</div>
                    <div class="hiw-step__connector" aria-hidden="true"></div>
                    <div class="hiw-step__icon-wrap" aria-hidden="true">
                        <i class="fa-sharp fa-thin fa-user" aria-hidden="true" focusable="false"></i>
                    </div>
                    <div class="hiw-step__body">
                        <h3 class="hiw-step__heading">Your Consultation</h3>
                        <p class="hiw-step__text">
                            Your practitioner will take a brief clinical history and assess your
                            needs before any treatment begins. There is no rushing, no awkward
                            time pressure — just a calm, professional consultation focused entirely
                            on you.
                        </p>
                    </div>
                </li>

                <li class="hiw-step">
                    <div class="hiw-step__number" aria-hidden="true">03</div>
                    <div class="hiw-step__connector" aria-hidden="true"></div>
                    <div class="hiw-step__icon-wrap" aria-hidden="true">
                        <i class="fa-sharp fa-thin fa-circle-check" aria-hidden="true" focusable="false"></i>
                    </div>
                    <div class="hiw-step__body">
                        <h3 class="hiw-step__heading">Treatment &amp; Aftercare</h3>
                        <p class="hiw-step__text">
                            Most treatments are completed in a single appointment. Your practitioner
                            will explain what was found and done, answer any questions, and advise on
                            any aftercare or follow-up needed. Many patients leave feeling better
                            within minutes.
                        </p>
                    </div>
                </li>

            </ol>

            <div class="hiw-cta">
                <a href="https://coremedica.cliniko.com/bookings"
                    class="btn btn--primary"
                    target="_blank" rel="noopener">
                    Book Your Appointment
                </a>
            </div>

        </div>
    </section>

    <!-- ═══════════════════════════════════════════
       TRUST STRIP
  ════════════════════════════════════════════ -->
    <section class="trust-strip" aria-labelledby="trust-heading">
        <div class="container">
            <h2 class="visually-hidden" id="trust-heading">Why patients choose CoreMedica</h2>
            <ul class="trust-strip__stats" role="list">
                <li class="trust-strip__stat">
                    <span class="trust-strip__stat-value">5&#9733;</span>
                    <span class="trust-strip__stat-label">Google Rating</span>
                </li>
                <li class="trust-strip__stat">
                    <span class="trust-strip__stat-value">98%</span>
                    <span class="trust-strip__stat-label">Patient Satisfaction</span>
                </li>
                <li class="trust-strip__stat">
                    <span class="trust-strip__stat-value">2</span>
                    <span class="trust-strip__stat-label">Locations Served</span>
                </li>
                <li class="trust-strip__stat">
                    <span class="trust-strip__stat-value">&lt;30<span class="trust-strip__stat-unit">min</span></span>
                    <span class="trust-strip__stat-label">Most Appointments</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     REVIEWS
════════════════════════════════════════════ -->
    <section class="reviews-section" aria-labelledby="reviews-heading">
        <div class="container">

            <div class="section-header">
                <h2 class="section-header__heading" id="reviews-heading">What Our Patients Say</h2>
                <p class="section-header__lead">
                    Real experiences from real patients across Southampton and Portsmouth.
                    All reviews are collected via Fresha and Google.
                </p>
            </div>

            <div class="reviews-layout">

                <!-- Featured review -->
                <div class="review-featured" aria-label="Featured patient review">
                    <div class="review-featured__stars" aria-label="5 stars out of 5">
                        <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                    <i class="fa-sharp fa-thin fa-quote-left icon--xxl" aria-hidden="true" focusable="false"></i>
                    <blockquote class="review-featured__text">
                        <p>AMAZING&hellip; Anyone who&rsquo;s experienced the misery and pain of blocked
                            ears will know the total BLISS of that last crackle before your ears are clear.</p>
                        <footer class="review-featured__cite">
                            <cite>Susan R</cite>
                            <span class="review-featured__source">via Fresha</span>
                        </footer>
                    </blockquote>
                    <div class="review-featured__badge">
                        <i class="fa-sharp fa-thin fa-quote-left" aria-hidden="true" focusable="false"></i>
                        Verified patient review
                    </div>
                </div>

                <!-- Review grid -->
                <div class="reviews-grid-wrap">
                    <ul class="reviews-grid" role="list">

                        <!-- Always visible reviews -->
                        <li class="review-card">
                            <div class="review-card__stars" aria-label="5 stars out of 5">
                                <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <blockquote class="review-card__text">
                                <p>A great service — the team were professional, timely and very
                                    knowledgeable and efficient. I just feel amazing since having the
                                    procedure. It&rsquo;s made a great difference to the pain and my hearing;
                                    my ear definitely feels normal again.</p>
                                <footer class="review-card__cite">
                                    <cite>Eileen B</cite>
                                    <span class="review-card__source">via Fresha</span>
                                </footer>
                            </blockquote>
                        </li>

                        <li class="review-card">
                            <div class="review-card__stars" aria-label="5 stars out of 5">
                                <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <blockquote class="review-card__text">
                                <p>Excellent service — both professional and friendly. Booking was
                                    simple, and the experience was very reassuring. Would recommend.
                                    10 out of 10.</p>
                                <footer class="review-card__cite">
                                    <cite>Michael K</cite>
                                    <span class="review-card__source">via Fresha</span>
                                </footer>
                            </blockquote>
                        </li>

                        <li class="review-card">
                            <div class="review-card__stars" aria-label="5 stars out of 5">
                                <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <blockquote class="review-card__text">
                                <p>Very good. Greeted by name at reception, seen promptly, friendly
                                    team, clear communication, relaxed atmosphere. Most importantly,
                                    great results. I can hear again!</p>
                                <footer class="review-card__cite">
                                    <cite>Gordon B</cite>
                                    <span class="review-card__source">via Fresha</span>
                                </footer>
                            </blockquote>
                        </li>

                        <li class="review-card">
                            <div class="review-card__stars" aria-label="5 stars out of 5">
                                <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <blockquote class="review-card__text">
                                <p>Jacqueline carried out the procedure very quickly and successfully.
                                    Very friendly and knowledgeable.</p>
                                <footer class="review-card__cite">
                                    <cite>Jane M</cite>
                                    <span class="review-card__source">via Fresha</span>
                                </footer>
                            </blockquote>
                        </li>

                        <li class="review-card">
                            <div class="review-card__stars" aria-label="5 stars out of 5">
                                <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <blockquote class="review-card__text">
                                <p>A million times better than trying to get anything done on the NHS!
                                    My Dad&rsquo;s hearing has greatly improved. Thank you!!</p>
                                <footer class="review-card__cite">
                                    <cite>Brian B</cite>
                                    <span class="review-card__source">via Fresha</span>
                                </footer>
                            </blockquote>
                        </li>

                        <!-- Hidden reviews — revealed by JS -->
                        <li class="review-card review-card--hidden">
                            <div class="review-card__stars" aria-label="5 stars out of 5">
                                <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <blockquote class="review-card__text">
                                <p>At my appointment I was kept informed really well by the man on
                                    reception — very friendly and relaxed. I then went in and had an
                                    examination and wax removed; absolutely painless, just a weird
                                    sensation. A very friendly, relaxed lady who made me feel comfortable,
                                    with lots of advice but also listened to my views on moving forward.
                                    Good experience and I would highly recommend them.</p>
                                <footer class="review-card__cite">
                                    <cite>Lynne C</cite>
                                    <span class="review-card__source">via Fresha</span>
                                </footer>
                            </blockquote>
                        </li>

                        <li class="review-card review-card--hidden">
                            <div class="review-card__stars" aria-label="5 stars out of 5">
                                <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <blockquote class="review-card__text">
                                <p>Fantastic service — like visiting an old friend. Made me feel
                                    welcomed. I would fully recommend. Came away with lots of information
                                    too. Thank you everyone.</p>
                                <footer class="review-card__cite">
                                    <cite>Janice A</cite>
                                    <span class="review-card__source">via Fresha</span>
                                </footer>
                            </blockquote>
                        </li>

                        <li class="review-card review-card--hidden">
                            <div class="review-card__stars" aria-label="5 stars out of 5">
                                <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <blockquote class="review-card__text">
                                <p>Fantastic service — friendly and professional throughout whilst
                                    dealing with my Dad who had terrible ears and dementia. Thank you.</p>
                                <footer class="review-card__cite">
                                    <cite>Edward D</cite>
                                    <span class="review-card__source">via Fresha</span>
                                </footer>
                            </blockquote>
                        </li>

                        <li class="review-card review-card--hidden">
                            <div class="review-card__stars" aria-label="5 stars out of 5">
                                <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <blockquote class="review-card__text">
                                <p>Very straightforward — a strange feeling but not at all unpleasant.
                                    Lynda was very friendly and explained everything. It certainly worked
                                    and had no after effects. Thank you.</p>
                                <footer class="review-card__cite">
                                    <cite>Valerie</cite>
                                    <span class="review-card__source">via Google</span>
                                </footer>
                            </blockquote>
                        </li>

                        <li class="review-card review-card--hidden">
                            <div class="review-card__stars" aria-label="5 stars out of 5">
                                <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <blockquote class="review-card__text">
                                <p>Staff friendly and helpful. Treatment carried out professionally.
                                    Great value. Would recommend to anyone.</p>
                                <footer class="review-card__cite">
                                    <cite>Alan</cite>
                                    <span class="review-card__source">via Google</span>
                                </footer>
                            </blockquote>
                        </li>

                        <li class="review-card review-card--hidden">
                            <div class="review-card__stars" aria-label="5 stars out of 5">
                                <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <blockquote class="review-card__text">
                                <p>Jackie is a very nice person and extremely good with the customers.
                                    I liked this service and will be going back. It&rsquo;s a painless
                                    procedure and I certainly can hear a bit better — I feel as if I was
                                    running around with bunged up ears for a long time and the
                                    microsuction certainly sorted that. Well done Jackie, and thank you.</p>
                                <footer class="review-card__cite">
                                    <cite>Donald</cite>
                                    <span class="review-card__source">via Google</span>
                                </footer>
                            </blockquote>
                        </li>

                    </ul>

                    <div class="reviews-grid__more">
                        <button class="btn btn--outline" id="reviews-show-more"
                            aria-expanded="false">
                            Show More Reviews
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     FAQ
════════════════════════════════════════════ -->
    <section class="faq-section" aria-labelledby="faq-heading">
        <div class="container">

            <div class="section-header">
                <h2 class="section-header__heading" id="faq-heading">
                    Frequently Asked Questions
                </h2>
                <p class="section-header__lead">
                    Everything you need to know about booking and visiting CoreMedica.
                    Questions about a specific service? Visit the relevant service page
                    for detailed information.
                </p>
            </div>

            <div class="faq-grid">

                <dl class="faq-list">

                    <div class="faq-item" id="faq-1">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-1-answer">
                                What services does CoreMedica Wellness Group offer?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="faq-1-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>CoreMedica offers a focused range of private healthcare services
                                    including professional earwax removal via microsuction and irrigation,
                                    wellness consultations, hayfever and allergy treatment, and personalised
                                    weight management programmes. We offer both clinic-based and home visit
                                    appointments across Southampton and Portsmouth.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="faq-2">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-2-answer">
                                Where are you based and what areas do you cover?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="faq-2-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>Our main clinic is based in Southampton (SO19&nbsp;4AA), serving
                                    patients across Southampton including Woolston, Hedge End, Eastleigh,
                                    Chandler's Ford, and surrounding areas. We also serve Portsmouth,
                                    Fareham, Gosport, and the wider South Hampshire region. Home visits
                                    are available across both cities — contact us to confirm availability
                                    in your area.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="faq-3">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-3-answer">
                                How do I book an appointment?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="faq-3-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>You can book online 24 hours a day through our booking system —
                                    simply select your service, choose a date and time, and confirm your
                                    details. Same-day appointments are available subject to availability.
                                    If you prefer, you can also contact us by phone or email and we will
                                    be happy to book on your behalf.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="faq-4">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-4-answer">
                                Do you offer same-day or weekend appointments?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="faq-4-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>Yes. We offer same-day appointments subject to availability. Our
                                    clinic runs every Saturday from 08:00 to 12:00 and every Thursday
                                    from 14:00 to 18:00. Saturday morning appointments are particularly
                                    popular for earwax removal and wellness consultations, so we recommend
                                    booking in advance where possible to secure your preferred slot.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="faq-5">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-5-answer">
                                Do you offer home visits?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="faq-5-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>Yes. Home visits are available across Southampton and Portsmouth
                                    for patients who find travelling to a clinic difficult — whether due
                                    to mobility issues, caring responsibilities, or personal preference.
                                    Our practitioners bring all necessary clinical equipment to you, so
                                    you receive exactly the same standard of care at home as you would
                                    in our clinic.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="faq-6">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-6-answer">
                                Are your practitioners clinically trained?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="faq-6-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>Yes. CoreMedica is led by Jacqueline Allen, Advanced Clinical
                                    Practitioner, and Lynda Morgan, Advanced Nurse Practitioner. Both
                                    hold advanced clinical qualifications and bring extensive experience
                                    in patient assessment and treatment. CoreMedica is currently
                                    completing registration with the Care Quality Commission (CQC),
                                    reflecting our commitment to regulated, high-quality care.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="faq-7">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-7-answer">
                                How is CoreMedica different from seeing my GP?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="faq-7-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>Many NHS GP practices no longer offer earwax removal or certain
                                    wellness services — CoreMedica was founded specifically to fill that
                                    gap. As a private provider, we offer faster access, dedicated
                                    appointment slots with no time pressure, and specialist services
                                    that are simply not available through your GP. You do not need a
                                    referral to book with us.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="faq-8">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-8-answer">
                                What should I expect at my first appointment?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="faq-8-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>Your practitioner will welcome you and take a brief clinical
                                    history relevant to your appointment. They will explain exactly what
                                    they are going to do before starting, carry out the assessment or
                                    treatment, and answer any questions you have. Most appointments take
                                    under 30 minutes from start to finish. You are encouraged to ask
                                    questions at any point.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="faq-9">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-9-answer">
                                Do I need a referral or GP letter to book?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="faq-9-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>No referral or GP letter is required. You can book directly with
                                    us for any of our services. If a clinical assessment suggests you
                                    would benefit from GP involvement or onward referral, your
                                    practitioner will advise you accordingly during your appointment.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="faq-10">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-10-answer">
                                How much do appointments cost?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="faq-10-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>Pricing varies by service. We aim to keep our fees transparent and
                                    competitive, reflecting the quality of care provided. Full pricing
                                    is listed on each service page, and there are no hidden charges.
                                    Home visit appointments carry an additional travel fee, which is
                                    confirmed at the time of booking.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="faq-11">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-11-answer">
                                How do I know which service is right for me?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="faq-11-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>If you are unsure which service best fits your needs, contact us
                                    and we will help point you in the right direction. Each of our service
                                    pages also contains detailed information about who the service is
                                    suitable for. All appointments begin with a brief clinical assessment,
                                    so your practitioner can confirm the right course of action at the
                                    time of your visit.</p>
                            </div>
                        </dd>
                    </div>

                </dl>

            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     LOCATION BAND
════════════════════════════════════════════ -->
    <section class="location-band" aria-labelledby="location-heading">
        <div class="container">
            <div class="section-header">
                <h2 class="section-header__heading" id="location-heading">
                    Serving Southampton &amp; Portsmouth
                </h2>
                <p class="section-header__lead">
                    Based in Southampton with a pop-up clinic and home visits available
                    across the wider South Hampshire region.
                </p>
            </div>
            <div class="location-band__inner">
                <!-- Clinic details -->
                <div class="location-band__details">
                    <div class="location-band__clinic">
                        <h3 class="location-band__clinic-name">Main Clinic — Southampton</h3>
                        <address class="location-band__address">
                            <p>Bitterne, Southampton<br>SO19 4AA</p>
                        </address>
                        <ul class="location-band__meta">
                            <li>
                                <i class="fa-sharp fa-thin fa-calendar" aria-hidden="true" focusable="false"></i>
                                <span>Clinic: every Saturday 08:00&ndash;12:00 &amp; every Thursday 14:00&ndash;18:00</span>
                            </li>
                            <li>
                                <i class="fa-sharp fa-thin fa-house" aria-hidden="true" focusable="false"></i>
                                <span>Home visits available across Southampton &amp; Portsmouth</span>
                            </li>
                            <li>
                                <i class="fa-sharp fa-thin fa-phone" aria-hidden="true" focusable="false"></i>
                                </svg>
                                <span>Same-day appointments available — book online or by phone</span>
                            </li>
                        </ul>
                    </div>
                    <div class="location-band__areas">
                        <h3 class="location-band__areas-heading">Areas We Cover</h3>
                        <div class="location-band__areas-grid">
                            <div>
                                <h4 class="location-band__areas-subheading">Southampton</h4>
                                <ul class="location-band__areas-list">
                                    <li>Woolston</li>
                                    <li>Hedge End</li>
                                    <li>Eastleigh</li>
                                    <li>Chandler's Ford</li>
                                    <li>Bitterne</li>
                                    <li>West End</li>
                                    <li>Totton</li>
                                    <li>Romsey</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="location-band__areas-subheading">Portsmouth</h4>
                                <ul class="location-band__areas-list">
                                    <li>Fareham</li>
                                    <li>Gosport</li>
                                    <li>Waterlooville</li>
                                    <li>Havant</li>
                                    <li>Portchester</li>
                                    <li>Lee-on-the-Solent</li>
                                    <li>Stubbington</li>
                                    <li>Emsworth</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="location-band__ctas">
                        <a href="https://coremedica.cliniko.com/bookings"
                            class="btn btn--primary"
                            target="_blank" rel="noopener">
                            Book an Appointment
                        </a>
                        <a href="/contact" class="btn btn--outline">Get in Touch</a>
                    </div>
                </div>
                <!-- Map -->
                <div class="location-band__map">
                    <?php require_once 'includes/mappin.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- LocalBusiness schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MedicalBusiness",
            "name": "CoreMedica Wellness Group",
            "url": "https://www.coremedica.co.uk",
            "logo": "https://www.coremedica.co.uk/assets/images/coremedica_new_logo_text.webp",
            "description": "Private healthcare provider offering earwax removal, wellness consultations, hayfever treatment and weight management in Southampton and Portsmouth.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Woolston",
                "addressLocality": "Southampton",
                "postalCode": "SO19 4AA",
                "addressCountry": "GB"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "50.8966",
                "longitude": "-1.3736"
            },
            "areaServed": [
                "Southampton", "Portsmouth", "Fareham", "Gosport",
                "Eastleigh", "Hedge End", "Chandler's Ford", "Waterlooville",
                "Havant", "Romsey"
            ],
            "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "Saturday",
                    "opens": "08:00",
                    "closes": "12:00"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "Thursday",
                    "opens": "14:00",
                    "closes": "18:00"
                }
            ],
            "medicalSpecialty": [
                "Earwax Removal",
                "Wellness Consultations",
                "Hayfever Treatment",
                "Weight Management"
            ],
            "employee": [{
                    "@type": "Person",
                    "name": "Jacqueline Allen",
                    "jobTitle": "Advanced Clinical Practitioner"
                },
                {
                    "@type": "Person",
                    "name": "Lynda Morgan",
                    "jobTitle": "Advanced Nurse Practitioner"
                }
            ]
        }
    </script>


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "What services does CoreMedica Wellness Group offer?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "CoreMedica offers a focused range of private healthcare services including professional earwax removal via microsuction and irrigation, wellness consultations, hayfever and allergy treatment, and personalised weight management programmes. We offer both clinic-based and home visit appointments across Southampton and Portsmouth."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Where are you based and what areas do you cover?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Our main clinic is based in Southampton (SO19 4AA), serving patients across Southampton including Woolston, Hedge End, Eastleigh, Chandler's Ford, and surrounding areas. We also serve Portsmouth, Fareham, Gosport, and the wider South Hampshire region. Home visits are available across both cities."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How do I book an appointment?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "You can book online 24 hours a day through our booking system. Same-day appointments are available subject to availability. You can also contact us by phone or email and we will be happy to book on your behalf."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do you offer same-day or weekend appointments?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. We offer same-day appointments subject to availability, and we run a pop-up clinic every other Saturday from 08:00 to 12:00."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do you offer home visits?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. Home visits are available across Southampton and Portsmouth for patients who find travelling to a clinic difficult. Our practitioners bring all necessary clinical equipment to you, so you receive exactly the same standard of care at home as you would in our clinic."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Are your practitioners clinically trained?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. CoreMedica is led by Jacqueline Allen, Advanced Clinical Practitioner, and Lynda Morgan, Advanced Nurse Practitioner. Both hold advanced clinical qualifications and bring extensive experience in patient assessment and treatment. CoreMedica is currently completing registration with the Care Quality Commission (CQC)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How is CoreMedica different from seeing my GP?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Many NHS GP practices no longer offer earwax removal or certain wellness services. CoreMedica was founded specifically to fill that gap. As a private provider, we offer faster access, dedicated appointment slots with no time pressure, and specialist services not available through your GP. You do not need a referral to book with us."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What should I expect at my first appointment?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Your practitioner will take a brief clinical history, explain exactly what they are going to do before starting, carry out the assessment or treatment, and answer any questions. Most appointments take under 30 minutes from start to finish."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do I need a referral or GP letter to book?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No referral or GP letter is required. You can book directly with us for any of our services."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How much do appointments cost?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Pricing varies by service. Full pricing is listed on each service page and there are no hidden charges. Home visit appointments carry an additional travel fee, which is confirmed at the time of booking."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How do I know which service is right for me?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "If you are unsure which service best fits your needs, contact us and we will help point you in the right direction. All appointments begin with a brief clinical assessment, so your practitioner can confirm the right course of action at the time of your visit."
                    }
                }
            ]
        }
    </script>
</main>

<?php require_once 'includes/footer.php'; ?>