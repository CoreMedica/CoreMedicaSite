<?php
$pageTitle = 'Our Services | CoreMedica Wellness Group';
$pageDescription = 'Explore private healthcare services from CoreMedica Wellness Group, including earwax removal, wellness consultations, hayfever and allergy consultations, weight management, and home visits across Southampton and Portsmouth.';
$pageKeywords = 'CoreMedica services, private healthcare Southampton, private healthcare Portsmouth, earwax removal, wellness consultations, hayfever consultation, allergy consultation, weight management, home visits';
$canonicalUrl = 'https://coremedica.co.uk/services/';
$ogImage = 'https://coremedica.co.uk/assets/images/og-default.jpg';
$bodyClass = 'page-services';

include '../includes/header.php';
?>

<main id="main-content">

    <!-- ══════════════════════════════════════════
         HERO
    ═══════════════════════════════════════════ -->
    <section class="svc-hero" aria-labelledby="services-heading">
        <div class="container">
            <div class="svc-hero__inner">

                <nav class="breadcrumb" aria-label="Breadcrumb">
                    <ol class="breadcrumb__list">
                        <li><a href="/">Home</a></li>
                        <li aria-current="page">Services</li>
                    </ol>
                </nav>

                <p class="svc-hero__eyebrow">
                    <i class="fa-sharp fa-thin fa-briefcase-medical" aria-hidden="true"></i>
                    CoreMedica Wellness Group
                </p>

                <h1 class="svc-hero__heading" id="services-heading">
                    Private Healthcare Services
                    <span class="svc-hero__heading-accent">in Southampton &amp; Portsmouth</span>
                </h1>

                <p class="svc-hero__subheading">
                    CoreMedica provides clinician-led private healthcare designed to be convenient,
                    reassuring, and easy to access. From earwax removal and home visits to wellness,
                    allergy, and weight management consultations, our services are built around
                    clear advice, professional care, and practical appointment options.
                </p>

                <div class="svc-hero__ctas">
                    <a href="https://coremedica.cliniko.com/bookings"
                        class="btn btn--primary"
                        target="_blank"
                        rel="noopener noreferrer">
                        Book Online
                    </a>
                    <a href="tel:07777100716" class="btn btn--outline">
                        Call 07777 100716
                    </a>
                </div>

                <ul class="svc-hero__trust-list" aria-label="Key facts">
                    <li class="svc-hero__trust-item">
                        <i class="fa-sharp fa-thin fa-circle-check svc-hero__trust-icon" aria-hidden="true"></i>
                        Qualified practitioners
                    </li>
                    <li class="svc-hero__trust-item">
                        <i class="fa-sharp fa-thin fa-house-medical svc-hero__trust-icon" aria-hidden="true"></i>
                        Clinic &amp; home visits available
                    </li>
                    <li class="svc-hero__trust-item">
                        <i class="fa-sharp fa-thin fa-shield-check svc-hero__trust-icon" aria-hidden="true"></i>
                        CQC registration in progress
                    </li>
                </ul>

            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════
         SERVICES OVERVIEW
    ═══════════════════════════════════════════ -->
    <section class="services-section" aria-labelledby="services-overview-heading">
        <div class="container">

            <div class="section-header">
                <h2 class="section-header__heading" id="services-overview-heading">Our Services</h2>
                <p class="section-header__lead">
                    Start with the service that best matches what you need. Each option below links to
                    a fuller overview further down the page.
                </p>
            </div>

            <ul class="service-cards">
                <li class="service-card">
                    <div class="service-card__icon-wrap" aria-hidden="true">
                        <i class="fa-kit fa-ear-anatomy icon--xxl"></i>
                    </div>
                    <div class="service-card__body">
                        <h3 class="service-card__heading">Earwax Removal</h3>
                        <p class="service-card__text">
                            Safe, effective earwax removal using modern microsuction techniques in clinic
                            or at home.
                        </p>
                        <ul class="service-card__features">
                            <li>Clinic &amp; home visits</li>
                            <li>Quick appointments</li>
                            <li>No GP referral required</li>
                        </ul>
                        <a href="#service-earwax" class="service-card__link btn btn--outline">Learn More</a>
                    </div>
                </li>

                <li class="service-card">
                    <div class="service-card__icon-wrap" aria-hidden="true">
                        <i class="fa-sharp fa-thin fa-scale-balanced icon--xxl"></i>
                    </div>
                    <div class="service-card__body">
                        <h3 class="service-card__heading">Weight Management</h3>
                        <p class="service-card__text">
                            Clinician-led support tailored to your goals, medical history, and long-term wellbeing.
                        </p>
                        <ul class="service-card__features">
                            <li>Personalised assessment</li>
                            <li>Evidence-based approach</li>
                            <li>Ongoing support available</li>
                        </ul>
                        <a href="#service-weight" class="service-card__link btn btn--outline">Learn More</a>
                    </div>
                </li>

                <li class="service-card">
                    <div class="service-card__icon-wrap" aria-hidden="true">
                        <i class="fa-sharp fa-thin fa-shield-heart icon--xxl"></i>
                    </div>
                    <div class="service-card__body">
                        <h3 class="service-card__heading">Wellness Consultations</h3>
                        <p class="service-card__text">
                            Professional consultations for fatigue, immunity concerns, and overall wellbeing.
                        </p>
                        <ul class="service-card__features">
                            <li>Symptom-led consultation</li>
                            <li>Assessment-based support</li>
                            <li>Clinic &amp; home visit options</li>
                        </ul>
                        <a href="#service-wellness" class="service-card__link btn btn--outline">Learn More</a>
                    </div>
                </li>

                <li class="service-card">
                    <div class="service-card__icon-wrap" aria-hidden="true">
                        <i class="fa-kit fa-hayfever-pollen icon--xxl"></i>
                    </div>
                    <div class="service-card__body">
                        <h3 class="service-card__heading">Hayfever &amp; Allergy</h3>
                        <p class="service-card__text">
                            Seasonal allergy consultations with professional assessment and tailored guidance.
                        </p>
                        <ul class="service-card__features">
                            <li>Consultation-led care</li>
                            <li>Fast private appointments</li>
                            <li>Tailored recommendations</li>
                        </ul>
                        <a href="#service-allergy" class="service-card__link btn btn--outline">Learn More</a>
                    </div>
                </li>

                <li class="service-card">
                    <div class="service-card__icon-wrap" aria-hidden="true">
                        <i class="fa-sharp fa-thin fa-house-medical icon--xxl"></i>
                    </div>
                    <div class="service-card__body">
                        <h3 class="service-card__heading">Home Visits</h3>
                        <p class="service-card__text">
                            Professional care delivered in the comfort of your own home across selected local areas.
                        </p>
                        <ul class="service-card__features">
                            <li>Southampton &amp; Portsmouth coverage</li>
                            <li>Ideal for limited mobility</li>
                            <li>Convenient scheduling</li>
                        </ul>
                        <a href="#service-home-visits" class="service-card__link btn btn--outline">Learn More</a>
                    </div>
                </li>
            </ul>

        </div>
    </section>

    <!-- ══════════════════════════════════════════
         EXPANDED SERVICES
    ═══════════════════════════════════════════ -->
    <section class="svc-procedures" aria-labelledby="service-details-heading">
        <div class="container">

            <div class="section-header">
                <h2 class="section-header__heading" id="service-details-heading">Explore Each Service in More Detail</h2>
                <p class="section-header__lead">
                    Whether you know exactly what you need or are still comparing options, these summaries
                    explain what each service is for, how it works, and where to go next.
                </p>
            </div>

            <div class="procedure-cards">

                <article class="procedure-card" id="service-earwax">
                    <div class="procedure-card__icon-wrap">
                        <i class="fa-kit fa-ear-anatomy procedure-card__icon icon--xxxl" aria-hidden="true"></i>
                    </div>
                    <div class="procedure-card__body">
                        <p class="procedure-card__eyebrow">Clinic &amp; Home Visits</p>
                        <h3 class="procedure-card__heading">Earwax Removal</h3>
                        <p class="procedure-card__text">
                            Earwax build-up can lead to blocked ears, reduced hearing, irritation, and discomfort.
                            Our earwax removal service uses safe, modern microsuction techniques to restore comfort
                            quickly and effectively. Appointments are available at our Bitterne clinic or as home
                            visits across Southampton and Portsmouth.
                        </p>
                        <ul class="procedure-card__benefits mb--md">
                            <li>Safe, precise microsuction technique</li>
                            <li>Suitable for blocked ears, discomfort, and reduced hearing</li>
                            <li>Quick appointments with no GP referral required</li>
                            <li>Clinic and home visit options available</li>
                        </ul>
                        <a href="/earwax-removal" class="btn btn--primary">View Earwax Removal</a>
                    </div>
                </article>

                <article class="procedure-card" id="service-weight">
                    <div class="procedure-card__icon-wrap">
                        <i class="fa-sharp fa-thin fa-scale-balanced procedure-card__icon icon--xxxl" aria-hidden="true"></i>
                    </div>
                    <div class="procedure-card__body">
                        <p class="procedure-card__eyebrow">Clinician-Led Support</p>
                        <h3 class="procedure-card__heading">Weight Management</h3>
                        <p class="procedure-card__text">
                            Our weight management consultations take a structured, evidence-based approach to helping
                            patients manage their weight safely and realistically. We consider your goals, lifestyle,
                            and medical history before discussing the most appropriate next steps.
                        </p>
                        <ul class="procedure-card__benefits mb--md">
                            <li>Comprehensive initial assessment</li>
                            <li>Personalised guidance and planning</li>
                            <li>Long-term, sustainable approach</li>
                            <li>Treatment options considered only following clinical assessment and where appropriate</li>
                        </ul>
                        <a href="/weight-loss-management" class="btn btn--primary">View Weight Management</a>
                    </div>
                </article>

                <article class="procedure-card" id="service-wellness">
                    <div class="procedure-card__icon-wrap">
                        <i class="fa-sharp fa-thin fa-shield-heart procedure-card__icon icon--xxxl" aria-hidden="true"></i>
                    </div>
                    <div class="procedure-card__body">
                        <p class="procedure-card__eyebrow">Fatigue &amp; Immunity</p>
                        <h3 class="procedure-card__heading">Wellness Consultations</h3>
                        <p class="procedure-card__text">
                            If you are dealing with ongoing fatigue, reduced energy, or concerns about immunity,
                            our wellness consultations provide a structured way to assess what may be contributing.
                            We focus on the wider clinical picture rather than jumping straight to generic solutions.
                        </p>
                        <ul class="procedure-card__benefits mb--md">
                            <li>Symptom-led consultation</li>
                            <li>Review of lifestyle, history, and contributing factors</li>
                            <li>Support options discussed according to individual need</li>
                            <li>Suitable for patients looking for clinician-led guidance</li>
                        </ul>
                        <a href="/wellness-consultations" class="btn btn--primary">View Wellness Consultations</a>
                    </div>
                </article>

                <article class="procedure-card" id="service-allergy">
                    <div class="procedure-card__icon-wrap">
                        <i class="fa-kit fa-hayfever-pollen procedure-card__icon icon--xxxl" aria-hidden="true"></i>
                    </div>
                    <div class="procedure-card__body">
                        <p class="procedure-card__eyebrow">Seasonal Support</p>
                        <h3 class="procedure-card__heading">Hayfever &amp; Allergy Consultations</h3>
                        <p class="procedure-card__text">
                            Seasonal allergies can have a major impact on sleep, concentration, work, and daily comfort.
                            Our private consultations help assess the severity and pattern of your symptoms so that
                            appropriate options can be discussed clearly and professionally.
                        </p>
                        <ul class="procedure-card__benefits mb--md">
                            <li>Assessment of symptoms and severity</li>
                            <li>Tailored discussion of suitable options</li>
                            <li>Private appointments without long waits</li>
                            <li>Helpful for recurring seasonal symptoms</li>
                        </ul>
                        <a href="/hayfever-allergy" class="btn btn--primary">View Allergy Consultations</a>
                    </div>
                </article>

                <article class="procedure-card" id="service-home-visits">
                    <div class="procedure-card__icon-wrap">
                        <i class="fa-sharp fa-thin fa-house-medical procedure-card__icon icon--xxxl" aria-hidden="true"></i>
                    </div>
                    <div class="procedure-card__body">
                        <p class="procedure-card__eyebrow">Care at Home</p>
                        <h3 class="procedure-card__heading">Home Visits</h3>
                        <p class="procedure-card__text">
                            For patients who prefer not to travel, our home visit service provides professional care
                            in a familiar environment. This is especially useful for older patients, those with limited
                            mobility, carers arranging support for a relative, or anyone who values added convenience.
                        </p>
                        <ul class="procedure-card__benefits mb--md">
                            <li>Available across Southampton and Portsmouth coverage areas</li>
                            <li>Ideal for elderly or mobility-limited patients</li>
                            <li>Convenient for families and carers</li>
                            <li>Delivered by the same professional CoreMedica team</li>
                        </ul>
                        <a href="#"
                            class="btn btn--primary"
                            data-modal-open="home-visit-modal"
                            role="button">Request a Home Visit</a>
                    </div>
                </article>

            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════
         WHY CHOOSE US
    ═══════════════════════════════════════════ -->
    <section class="svc-why" aria-labelledby="why-coremedica-heading">
        <div class="container">
            <div class="svc-why__inner">

                <div class="svc-why__content">
                    <p class="svc-why__eyebrow">Why CoreMedica</p>
                    <h2 class="svc-why__heading" id="why-coremedica-heading">
                        Professional, Accessible Care Built Around Real Patient Needs
                    </h2>

                    <div class="svc-why__text">
                        <p>
                            CoreMedica is designed to offer private healthcare that feels straightforward,
                            reassuring, and easy to access. We focus on clear communication, practical
                            appointment options, and services that are delivered by qualified practitioners.
                        </p>
                        <p>
                            Patients come to us because they want timely access to care without long waits,
                            and because they value being treated as an individual rather than as a number.
                            Whether you visit our clinic or book a home appointment, the aim is the same:
                            safe, professional care with clear next steps.
                        </p>
                    </div>
                </div>

                <div class="svc-why__stats" aria-label="Key service highlights">
                    <div class="svc-why__stat">
                        <span class="svc-why__stat-value">Clinic</span>
                        <span class="svc-why__stat-label">&amp; Home Visit Care</span>
                    </div>
                    <div class="svc-why__stat">
                        <span class="svc-why__stat-value">No Referral</span>
                        <span class="svc-why__stat-label">Needed for Most Services</span>
                    </div>
                    <div class="svc-why__stat">
                        <span class="svc-why__stat-value">Qualified</span>
                        <span class="svc-why__stat-label">Practitioners</span>
                    </div>
                    <div class="svc-why__stat">
                        <span class="svc-why__stat-value">CQC</span>
                        <span class="svc-why__stat-label">Registration in Progress</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════
         REVIEWS
    ═══════════════════════════════════════════ -->
    <section class="svc-reviews reviews-section reviews-section--dark" aria-labelledby="reviews-heading">
        <div class="container">

            <div class="section-header section-header--light">
                <h2 class="section-header__heading section-header__heading--light" id="reviews-heading">
                    What Our Patients Say
                </h2>
                <p class="section-header__lead">
                    Real feedback from patients who have used CoreMedica services.
                </p>
            </div>

            <ul class="reviews-grid reviews-grid--standalone">
                <li class="review-card review-card--dark">
                    <div class="review-card__stars" aria-hidden="true">★★★★★</div>
                    <div class="review-card__text">
                        <p>
                            “Very good. Greeted by name at reception, seen promptly, friendly team,
                            clear communication, relaxed atmosphere. Most importantly, great results.
                            I can hear again!”
                        </p>
                    </div>
                    <div class="review-card__cite">
                        <cite>Gordon B</cite>
                        <span class="review-card__source">Patient review</span>
                    </div>
                </li>

                <li class="review-card review-card--dark">
                    <div class="review-card__stars" aria-hidden="true">★★★★★</div>
                    <div class="review-card__text">
                        <p>
                            “Excellent service — both professional and friendly. Booking was simple,
                            and the experience was very reassuring. Would recommend. 10 out of 10.”
                        </p>
                    </div>
                    <div class="review-card__cite">
                        <cite>Michael K</cite>
                        <span class="review-card__source">Patient review</span>
                    </div>
                </li>

                <li class="review-card review-card--dark">
                    <div class="review-card__stars" aria-hidden="true">★★★★★</div>
                    <div class="review-card__text">
                        <p>
                            “Fantastic service, friendly and professional throughout whilst dealing
                            with my Dad who had terrible ears and dementia. Thank you.”
                        </p>
                    </div>
                    <div class="review-card__cite">
                        <cite>Edward D</cite>
                        <span class="review-card__source">Patient review</span>
                    </div>
                </li>
            </ul>

        </div>
    </section>

    <!-- ══════════════════════════════════════════
         FAQ
    ═══════════════════════════════════════════ -->
    <section class="faq-section faq-section--light" aria-labelledby="faq-heading">
        <div class="container">

            <div class="section-header">
                <h2 class="section-header__heading" id="faq-heading">Frequently Asked Questions</h2>
                <p class="section-header__lead">
                    Common questions about appointments, service suitability, and booking.
                </p>
            </div>

            <div class="faq-grid">
                <dl class="faq-list">

                    <div class="faq-item" id="services-faq-1">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger" aria-expanded="false" aria-controls="services-faq-1-answer">
                                Do I need a GP referral?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="services-faq-1-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>No. Our services are available privately and most appointments can be booked directly without a GP referral.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="services-faq-2">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger" aria-expanded="false" aria-controls="services-faq-2-answer">
                                Do you offer both clinic and home visits?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="services-faq-2-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>Yes. CoreMedica offers both clinic appointments and home visits, depending on the service and your location.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="services-faq-3">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger" aria-expanded="false" aria-controls="services-faq-3-answer">
                                How do I know which service is right for me?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="services-faq-3-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>If you are unsure, contact us or book the most relevant consultation. We can guide you towards the most appropriate next step based on your symptoms and needs.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="services-faq-4">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger" aria-expanded="false" aria-controls="services-faq-4-answer">
                                Are treatments subject to clinical assessment?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="services-faq-4-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>Yes. All services are provided following appropriate clinical assessment and based on individual suitability.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="services-faq-5">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger" aria-expanded="false" aria-controls="services-faq-5-answer">
                                Which areas do you cover for home visits?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="services-faq-5-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>We offer home visits across selected parts of Southampton and Portsmouth. Contact us if you would like to confirm coverage for your postcode.</p>
                            </div>
                        </dd>
                    </div>

                    <div class="faq-item" id="services-faq-6">
                        <dt class="faq-item__question">
                            <button class="faq-item__trigger" aria-expanded="false" aria-controls="services-faq-6-answer">
                                How do I book?
                                <span class="faq-item__icon" aria-hidden="true"></span>
                            </button>
                        </dt>
                        <dd class="faq-item__answer" id="services-faq-6-answer" hidden>
                            <div class="faq-item__answer-inner">
                                <p>You can book online through our booking system or contact us directly by phone or email if you would like help choosing the right appointment.</p>
                            </div>
                        </dd>
                    </div>

                </dl>
            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════
         BOOKING CTA
    ═══════════════════════════════════════════ -->
    <section class="svc-booking" aria-labelledby="services-booking-heading">
        <div class="container">
            <div class="svc-booking__inner svc-booking__inner--no-map">

                <p class="svc-booking__eyebrow">Book Today</p>
                <h2 class="svc-booking__heading" id="services-booking-heading">
                    Ready to Book the Right Service?
                </h2>
                <p class="svc-booking__text">
                    Book online now or contact us directly if you would like help deciding which
                    CoreMedica service is most suitable for you.
                </p>

                <ul class="svc-booking__meta">
                    <li>
                        <i class="fa-sharp fa-thin fa-location-dot" aria-hidden="true"></i>
                        <span>4 Chessel Avenue, Bitterne, Southampton, SO19 4AA</span>
                    </li>
                    <li>
                        <i class="fa-sharp fa-thin fa-phone" aria-hidden="true"></i>
                        <span>
                            <a href="tel:07777100716">07777&nbsp;100716</a>
                            &nbsp;&mdash;&nbsp;
                            <a href="mailto:reception@coremedica.co.uk">reception@coremedica.co.uk</a>
                        </span>
                    </li>
                    <li>
                        <i class="fa-sharp fa-thin fa-calendar" aria-hidden="true"></i>
                        <span>Clinic appointments and home visits available</span>
                    </li>
                </ul>

                <div class="svc-booking__ctas">
                    <a href="https://coremedica.cliniko.com/bookings"
                        class="btn btn--primary"
                        target="_blank"
                        rel="noopener noreferrer">
                        Book Online
                    </a>
                    <a href="/contact" class="btn btn--outline">
                        Contact Us
                    </a>
                </div>

            </div>
        </div>
    </section>
    <?php require_once '../includes/home-visit-modal.php'; ?>
</main>

<?php include '../includes/footer.php'; ?>