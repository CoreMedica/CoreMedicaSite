<?php
$pageTitle       = 'Wellness Consultations Southampton & Portsmouth | CoreMedica';
$pageDescription = 'Clinician-led wellness consultations in Southampton and Portsmouth. Fatigue, low energy, immunity, and vitamin injection therapy — B12 and Vitamin D. Clinic and home visits. No GP referral required.';
$pageKeywords    = 'wellness consultation Southampton, wellness consultation Portsmouth, vitamin B12 injection Southampton, vitamin D injection Southampton, fatigue consultation, private wellness clinic, CoreMedica';
$canonicalUrl    = 'https://coremedica.co.uk/wellness-consultation-clinic';
$ogImage         = 'https://coremedica.co.uk/assets/images/og-wellness.jpg';
$bodyClass       = 'page-wellness';

include '../includes/header.php';
?>

<main id="main-content">

    <!-- ══════════════════════════════════════════
         HERO
    ═══════════════════════════════════════════ -->
    <section class="svc-hero">
        <div class="container">
            <nav class="breadcrumb" aria-label="Breadcrumb">
            <ol class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="/services/" itemprop="item"><span itemprop="name">Services</span></a>
                    <meta itemprop="position" content="2" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span aria-current="page" itemprop="name">Wellness Consultations</span>
                    <meta itemprop="position" content="3" />
                </li>
            </ol>
        </nav>
        <div class="svc-hero__inner">
            <p class="svc-hero__eyebrow">
                <i class="fa-sharp fa-thin fa-sun" aria-hidden="true"></i>
                Wellness Consultations
            </p>

            <h1 class="svc-hero__heading">
                Clinician-Led Wellness
                <span class="svc-hero__heading-accent">Southampton &amp; Portsmouth</span>
            </h1>

            <p class="svc-hero__subheading">
                Persistent fatigue, low energy, and reduced immunity are genuine clinical concerns —
                not something you should simply push through. Our Advanced Practitioners take the
                time to assess what is actually happening and discuss every appropriate option,
                including vitamin injection therapy where indicated. Clinic and home visits available.
                No GP referral required.
            </p>

            <div class="svc-hero__ctas">
                <a href="https://coremedica.cliniko.com/bookings"
                   class="btn btn--primary"
                   target="_blank"
                   rel="noopener noreferrer">
                    Book a Clinic Appointment
                </a>
                <button class="btn btn--outline" data-modal-open="home-visit-modal">
                    Request a Home Visit
                </button>
            </div>

            <ul class="svc-hero__trust-list" aria-label="Service highlights">
                <li class="svc-hero__trust-item">
                    <i class="fa-sharp fa-thin fa-location-dot svc-hero__trust-icon" aria-hidden="true"></i>
                    4 Chessel Avenue, Bitterne, SO19 4AA
                </li>
                <li class="svc-hero__trust-item">
                    <i class="fa-sharp fa-thin fa-clock svc-hero__trust-icon" aria-hidden="true"></i>
                    Thursdays 14:00-18:00 &amp; Saturdays 08:00-12:00
                </li>
                <li class="svc-hero__trust-item">
                    <i class="fa-sharp fa-thin fa-house-medical svc-hero__trust-icon" aria-hidden="true"></i>
                    Home visits: SO14-SO19, SO31 &amp; PO1-PO6
                </li>
                <li class="svc-hero__trust-item">
                    <i class="fa-sharp fa-thin fa-circle-check svc-hero__trust-icon" aria-hidden="true"></i>
                    No GP referral required
                </li>
            </ul>
        </div>
    </div>
</section>

    <!-- ══════════════════════════════════════════
         PROCEDURES — Consultation Types
    ═══════════════════════════════════════════ -->
    <section class="svc-procedures">
        <div class="container">

            <div class="section-header">
                <h2 class="section-header__heading">What We Can Help With</h2>
                <p class="section-header__lead">
                    Many patients come to us having been told their blood tests are
                    &ldquo;normal&rdquo; but still feeling far from well. A proper clinical
                    conversation can identify what standard tests may have missed.
                </p>
            </div>

            <div class="procedure-cards">

                <article class="procedure-card">
                    <div class="procedure-card__icon-wrap">
                        <i class="fa-sharp fa-thin fa-battery-low procedure-card__icon icon--xxxl" aria-hidden="true"></i>
                    </div>
                    <div class="procedure-card__body">
                        <p class="procedure-card__eyebrow">Common Presentation</p>
                        <h3 class="procedure-card__heading">Fatigue &amp; Low Energy</h3>
                        <p class="procedure-card__text">
                            Persistent tiredness that does not resolve with rest — whether it is
                            morning sluggishness, afternoon crashes, or a general lack of drive —
                            is worth investigating properly. We review your full picture, not just
                            a single marker.
                        </p>
                        <ul class="procedure-card__benefits">
                            <li>Symptom timeline and pattern review</li>
                            <li>Medication and lifestyle assessment</li>
                            <li>Vitamin and nutritional considerations</li>
                            <li>Appropriate onward referral if indicated</li>
                        </ul>
                    </div>
                </article>

                <article class="procedure-card">
                    <div class="procedure-card__icon-wrap">
                        <i class="fa-sharp fa-thin fa-shield-virus procedure-card__icon icon--xxxl" aria-hidden="true"></i>
                    </div>
                    <div class="procedure-card__body">
                        <p class="procedure-card__eyebrow">Common Presentation</p>
                        <h3 class="procedure-card__heading">Poor Immunity &amp; Slow Recovery</h3>
                        <p class="procedure-card__text">
                            Repeated infections, prolonged recovery, or a general sense of
                            vulnerability to illness can have identifiable clinical causes.
                            Our practitioners assess the full picture before recommending any
                            course of action.
                        </p>
                        <ul class="procedure-card__benefits">
                            <li>Frequency and pattern of illness reviewed</li>
                            <li>Nutritional status considered</li>
                            <li>Lifestyle and sleep factors explored</li>
                            <li>Evidence-based support options discussed</li>
                        </ul>
                    </div>
                </article>

                <article class="procedure-card">
                    <div class="procedure-card__icon-wrap">
                        <i class="fa-sharp fa-thin fa-brain procedure-card__icon icon--xxxl" aria-hidden="true"></i>
                    </div>
                    <div class="procedure-card__body">
                        <p class="procedure-card__eyebrow">Common Presentation</p>
                        <h3 class="procedure-card__heading">Brain Fog &amp; Poor Concentration</h3>
                        <p class="procedure-card__text">
                            Difficulty focusing, poor short-term memory, or mental fatigue that
                            affects your daily life and work can be linked to nutritional
                            deficiencies, thyroid function, or other treatable factors.
                        </p>
                        <ul class="procedure-card__benefits">
                            <li>Cognitive symptom review</li>
                            <li>Relevant medical history explored</li>
                            <li>Nutritional and hormonal considerations</li>
                            <li>Referral pathways explained where appropriate</li>
                        </ul>
                    </div>
                </article>

            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════
         INJECTION THERAPY
    ═══════════════════════════════════════════ -->
    <section class="wellness-injections">
        <div class="container">

            <div class="section-header">
                <h2 class="section-header__heading">Vitamin Injection Therapy</h2>
                <p class="section-header__lead">
                    We are not a supplement shop. Every injection is preceded by a clinical
                    assessment to confirm it is appropriate for you. Where indicated, the
                    injection can be administered at the same visit.
                </p>
            </div>

            <div class="injection-cards">

                <div class="injection-card">
                    <div class="injection-card__icon-wrap">
                        <i class="fa-sharp fa-thin fa-syringe injection-card__icon icon-xxxl" aria-hidden="true"></i>
                    </div>
                    <h3 class="injection-card__name">Vitamin B12 Injection</h3>
                    <p class="injection-card__description">
                        B12 is essential for neurological function, red blood cell production,
                        and energy metabolism. Oral supplementation is poorly absorbed in many
                        patients — intramuscular delivery bypasses this limitation entirely.
                        Suitable for those with confirmed or suspected deficiency, fatigue,
                        or neurological symptoms.
                    </p>
                    <div class="injection-card__pricing">
                        <div class="injection-card__price-item">
                            <span class="injection-card__price-label">Clinic</span>
                            <span class="injection-card__price-value">£20</span>
                        </div>
                        <div class="injection-card__price-item">
                            <span class="injection-card__price-label">Home Visit</span>
                            <span class="injection-card__price-value">£30</span>
                        </div>
                    </div>
                </div>

                <div class="injection-card">
                    <div class="injection-card__icon-wrap">
                        <i class="fa-sharp fa-thin fa-sun injection-card__icon" aria-hidden="true"></i>
                    </div>
                    <h3 class="injection-card__name">Vitamin D Injection</h3>
                    <p class="injection-card__description">
                        Vitamin D deficiency is widespread in the UK, particularly outside the
                        summer months. Symptoms include fatigue, bone aches, muscle weakness,
                        and low mood. An intramuscular injection provides a sustained dose that
                        oral supplements frequently cannot match — particularly in patients with
                        absorption issues.
                    </p>
                    <div class="injection-card__pricing">
                        <div class="injection-card__price-item">
                            <span class="injection-card__price-label">Clinic</span>
                            <span class="injection-card__price-value">£45</span>
                        </div>
                        <div class="injection-card__price-item">
                            <span class="injection-card__price-label">Home Visit</span>
                            <span class="injection-card__price-value">£55</span>
                        </div>
                    </div>
                </div>

            <div class="wellness-notice">
                <i class="fa-sharp fa-thin fa-circle-info wellness-notice__icon" aria-hidden="true"></i>
                <p class="wellness-notice__text">
                    All vitamin injections are administered following clinical assessment and
                    supply as a patient-specific direction, documented within your Cliniko
                    record including batch number and expiry date. No separate prescription
                    document is required.
                </p>
            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════
         STEPS — What to Expect
    ═══════════════════════════════════════════ -->
    <section class="svc-expect">
        <div class="container">

            <div class="section-header section-header--light">
                <h2 class="section-header__heading">What Happens at Your Appointment</h2>
                <p class="section-header__lead">
                    Whether you attend the clinic or book a home visit, every appointment
                    follows the same clinical process.
                </p>
            </div>

            <ol class="expect-steps">

                <li class="expect-step">
                    <span class="expect-step__number">01</span>
                    <div>
                        <h3 class="expect-step__heading">
                            <i class="fa-sharp fa-thin fa-clipboard-list" aria-hidden="true"></i>
                            Clinical History
                        </h3>
                        <p class="expect-step__text">
                            Your practitioner takes a thorough history — your current symptoms,
                            how long they have been present, your medication list, recent
                            blood results if you have them, and your general lifestyle. This
                            is not a rushed five-minute consultation.
                        </p>
                    </div>
                </li>

                <li class="expect-step">
                    <span class="expect-step__number">02</span>
                    <div>
                        <h3 class="expect-step__heading">
                            <i class="fa-sharp fa-thin fa-stethoscope" aria-hidden="true"></i>
                            Clinical Assessment
                        </h3>
                        <p class="expect-step__text">
                            A structured clinical assessment confirms the working diagnosis
                            and checks for any contraindications before any treatment is
                            discussed. Where relevant, blood pressure and other baseline
                            observations are taken.
                        </p>
                    </div>
                </li>

                <li class="expect-step">
                    <span class="expect-step__number">03</span>
                    <div>
                        <h3 class="expect-step__heading">
                            <i class="fa-sharp fa-thin fa-comments" aria-hidden="true"></i>
                            Treatment Discussion
                        </h3>
                        <p class="expect-step__text">
                            Your practitioner explains the full range of appropriate options,
                            the evidence for each, and any relevant risks or considerations.
                            You will always understand exactly what is being recommended and
                            why before you agree to anything.
                        </p>
                    </div>
                </li>

                <li class="expect-step">
                    <span class="expect-step__number">04</span>
                    <div>
                        <h3 class="expect-step__heading">
                            <i class="fa-sharp fa-thin fa-syringe" aria-hidden="true"></i>
                            Same-Visit Treatment
                        </h3>
                        <p class="expect-step__text">
                            Where treatment is agreed and clinically indicated — including
                            vitamin injection therapy — it is administered at the same
                            appointment. You will not be sent away to rebook. Clear aftercare
                            advice is provided before you leave.
                        </p>
                    </div>
                </li>

            </ol>

            <div class="svc-expect__cta">
                <a href="https://coremedica.cliniko.com/bookings"
                   class="btn btn--primary"
                   target="_blank"
                   rel="noopener noreferrer">
                    Book Your Appointment
                </a>
            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════
         PRICING
    ═══════════════════════════════════════════ -->
    <section class="svc-pricing">
        <div class="container">

            <div class="section-header">
                <h2 class="section-header__heading">
                    Transparent, Fixed Pricig
                </h2>
                <p class="section-header__lead">
                    You will always know the full cost before any treatment begins.
                    Injection pricing is in addition to the consultation fee where a
                    new assessment is required.
                </p>
            </div>

            <div class="pricing-cards pricing-cards--two-col">

                <div class="pricing-card pricing-card--featured">
                    <p class="pricing-card__label">Clinic — Bitterne SO19</p>
                    <p class="pricing-card__name">Wellness Consultation</p>
                    <p class="pricing-card__price">
                        <span class="price-currency">£</span><span class="price-amount">60</span>
                    </p>
                    <p class="pricing-card__description">
                        Full clinical assessment and wellness consultation at our Bitterne clinic.
                        Where vitamin injection therapy is agreed and clinically indicated, it is
                        administered at the same visit. Injection cost is additional to the
                        consultation fee.
                    </p>
                    <a href="https://coremedica.cliniko.com/bookings"
                       class="btn btn--primary"
                       target="_blank"
                       rel="noopener noreferrer">
                        Book Clinic Appointment
                    </a>
                </div>

                <div class="pricing-card">
                    <p class="pricing-card__label">Home Visit — SO14-SO31 &amp; PO1-PO6</p>
                    <p class="pricing-card__name">Home Wellness Consultation</p>
                    <p class="pricing-card__price">
                        <span class="price-currency">£</span><span class="price-amount">80</span>
                    </p>
                    <p class="pricing-card__description">
                        Full clinical assessment and consultation at your home across
                        Southampton SO postcodes, SO31, and Portsmouth PO1-PO6. Vitamin
                        injection therapy available on home visits where clinically indicated.
                        No area surcharge.
                    </p>
                    <button class="btn btn--outline" data-modal-open="home-visit-modal">
                        Request a Home Visit
                    </button>
                </div>

            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════
         WHY COREMEDICA
    ═══════════════════════════════════════════ -->
    <section class="svc-why">
        <div class="container">

            <p class="svc-why__eyebrow">Why CoreMedica</p>
            <h2 class="svc-why__heading">A Clinical Service, Not a Supplement Shop</h2>

            <div class="svc-why__content">
                <div class="svc-why__text">
                    <p>
                        Many wellness services offer vitamins without assessment. We do not.
                        Every patient seen at CoreMedica receives a proper clinical consultation
                        before any treatment is discussed — because the same symptoms can have
                        very different causes, and getting it wrong wastes your time and your money.
                    </p>
                    <p>
                        Our clinic is led by <strong>Jacqueline Allen</strong>, Advanced
                        Clinical Practitioner, and <strong>Lynda Morgan</strong>, Advanced
                        Nurse Practitioner. Both are qualified to independently assess, diagnose,
                        and treat. You will see a practitioner with genuine clinical experience —
                        not a technician following a script.
                    </p>
                    <p>
                        All vitamin injections are documented in your Cliniko record with batch
                        number and expiry date as a patient-specific direction. Your records are
                        yours — secure, accurate, and available to share with your GP if you
                        choose to.
                    </p>
                    <a href="/about/" class="btn btn--outline mb--md">Meet Our Practitioners</a>
                </div>

                <div class="svc-why__stats">
                    <div class="svc-why__stat">
                        <span class="svc-why__stat-value">5&#9733;</span>
                        <span class="svc-why__stat-label">Patient Rating</span>
                    </div>
                    <div class="svc-why__stat">
                        <span class="svc-why__stat-value">Same Visit</span>
                        <span class="svc-why__stat-label">Assess &amp; Treat</span>
                    </div>
                    <div class="svc-why__stat">
                        <span class="svc-why__stat-value">No Referral</span>
                        <span class="svc-why__stat-label">Required</span>
                    </div>
                    <div class="svc-why__stat">
                        <span class="svc-why__stat-value">Clinic &amp; Home</span>
                        <span class="svc-why__stat-label">Service Available</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════
         AREAS
    ═══════════════════════════════════════════ -->
    <section class="svc-areas">
        <div class="container">

            <div class="section-header">
                <h2 class="section-header__heading">Home Visit Coverage</h2>
                <p class="section-header__lead">
                    Our home visit service covers all Southampton SO postcodes, SO31,
                    and Portsmouth PO1-PO6 at a flat rate — no area surcharge applies.
                </p>
            </div>

            <?php
            $areas = [
                ['code' => 'SO14', 'name' => 'Southampton City Centre'],
                ['code' => 'SO15', 'name' => 'Shirley, Freemantle'],
                ['code' => 'SO16', 'name' => 'Bassett, Nursling'],
                ['code' => 'SO17', 'name' => 'Portswood, Highfield'],
                ['code' => 'SO18', 'name' => 'Thornhill, Bitterne Park'],
                ['code' => 'SO19', 'name' => 'Bitterne, Woolston'],
                ['code' => 'SO31', 'name' => 'Bursledon, Hedge End'],
                ['code' => 'PO1',  'name' => 'Portsmouth City Centre'],
                ['code' => 'PO2',  'name' => 'Cosham, Hilsea'],
                ['code' => 'PO3',  'name' => 'Copnor, Buckland'],
                ['code' => 'PO4',  'name' => 'Southsea, Eastney'],
                ['code' => 'PO5',  'name' => 'Southsea Central'],
                ['code' => 'PO6',  'name' => 'Drayton, Farlington'],
            ];
            ?>

            <div class="area-grid">
                <?php foreach ($areas as $area) : ?>
                <div class="area-item">
                    <i class="fa-sharp fa-thin fa-location-dot" aria-hidden="true" focusable="false"></i>
                    <strong><?= htmlspecialchars($area['code']) ?></strong> <?= htmlspecialchars($area['name']) ?>
                </div>
                <?php endforeach; ?>
            </div>

            <p class="svc-areas__note">
                Not sure if your postcode is covered?
                <a href="mailto:reception@coremedica.co.uk">Contact us</a>
                and we will confirm availability.
            </p>

        </div>
    </section>

    <!-- ══════════════════════════════════════════
         REVIEWS
    ═══════════════════════════════════════════ -->
    <section class="reviews-section reviews-section--dark">
        <div class="container">

            <div class="section-header section-header--light">
                <h2 class="section-header__heading section-header__heading--light">
                    What Our Patients Say
                </h2>
            </div>

            <div class="reviews-grid reviews-grid--standalone">

                <article class="review-card">
                    <div class="review-card__stars" aria-label="5 stars">★★★★★</div>
                    <blockquote class="review-card__text">
                        Jacqueline was incredibly thorough — she actually listened to
                        everything I had been experiencing and explained exactly what my
                        options were. First time in years I have felt properly looked after
                        rather than just handed a leaflet.
                    </blockquote>
                    <cite class="review-card__cite">
                        Sarah M
                        <span class="review-card__source">via Google</span>
                    </cite>
                </article>

                <article class="review-card">
                    <div class="review-card__stars" aria-label="5 stars">★★★★★</div>
                    <blockquote class="review-card__text">
                        Lynda was brilliant — very professional and knowledgeable. She took
                        her time going through my history and explained everything clearly.
                        The home visit was so convenient. Absolutely recommend.
                    </blockquote>
                    <cite class="review-card__cite">
                        David T
                        <span class="review-card__source">via Fresha</span>
                    </cite>
                </article>

                <article class="review-card">
                    <div class="review-card__stars" aria-label="5 stars">★★★★★</div>
                    <blockquote class="review-card__text">
                        I had been feeling exhausted for months and my GP just kept saying
                        my bloods were fine. CoreMedica actually sat down and talked through
                        everything properly. The B12 injection has made a real difference.
                    </blockquote>
                    <cite class="review-card__cite">
                        Caroline B
                        <span class="review-card__source">via Google</span>
                    </cite>
                </article>

            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════
         FAQs
    ═══════════════════════════════════════════ -->
    <section class="faq-section faq-section--light">
        <div class="container">

            <div class="section-header">
                <h2 class="section-header__heading">Frequently Asked Questions</h2>
                <p class="section-header__lead">
                    Answers to the questions we hear most often about wellness
                    consultations and vitamin injection therapy.
                </p>
            </div>

            <div class="faq-grid">
                <ul class="faq-list" role="list">

                    <li class="faq-item">
                        <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-w-1">
                            Do I need a GP referral to book a wellness consultation?
                            <span class="faq-item__icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__answer" id="faq-w-1" role="region" hidden>
                            <div class="faq-item__answer-inner">
                                <p>
                                    No. You can book directly without a GP referral. Our
                                    Advanced Practitioners are qualified to independently
                                    assess, diagnose, and recommend treatment. If something
                                    requires onward referral to a GP or specialist, we will
                                    tell you clearly and help you understand the next step.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="faq-item">
                        <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-w-2">
                            What is the difference between a wellness consultation
                            and a GP appointment?
                            <span class="faq-item__icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__answer" id="faq-w-2" role="region" hidden>
                            <div class="faq-item__answer-inner">
                                <p>
                                    A CoreMedica wellness consultation is a private appointment
                                    with an Advanced Practitioner. There are no time
                                    restrictions — your practitioner will take a thorough
                                    history, explore your symptoms in detail, and discuss all
                                    appropriate options. This is not intended to replace your
                                    NHS GP relationship, but it can provide a level of depth
                                    and time that a standard GP appointment cannot always
                                    accommodate.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="faq-item">
                        <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-w-3">
                            Can I have a vitamin injection without a consultation?
                            <span class="faq-item__icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__answer" id="faq-w-3" role="region" hidden>
                            <div class="faq-item__answer-inner">
                                <p>
                                    No. A clinical assessment must take place before any
                                    injection is administered. This is not a formality — it
                                    is how we confirm the injection is appropriate for you,
                                    identify any contraindications, and ensure the treatment
                                    is documented correctly as a patient-specific direction.
                                    Where the assessment confirms it is clinically indicated,
                                    the injection can be given at the same visit.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="faq-item">
                        <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-w-4">
                            Do I need to bring blood test results?
                            <span class="faq-item__icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__answer" id="faq-w-4" role="region" hidden>
                            <div class="faq-item__answer-inner">
                                <p>
                                    It is helpful but not essential. If you have recent
                                    blood results, bring them — they give your practitioner
                                    a useful starting point. However, many patients come to
                                    us having already been told their results are normal
                                    whilst still feeling unwell. A clinical assessment looks
                                    at the full picture, not just a single number.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="faq-item">
                        <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-w-5">
                            Are vitamin injections safe?
                            <span class="faq-item__icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__answer" id="faq-w-5" role="region" hidden>
                            <div class="faq-item__answer-inner">
                                <p>
                                    Vitamin B12 and Vitamin D injections are well-established
                                    treatments with a strong safety record when administered
                                    by qualified practitioners following clinical assessment.
                                    Your practitioner will discuss any relevant considerations
                                    specific to you before proceeding. All injections are
                                    documented in your Cliniko record with batch number and
                                    expiry date. Any minor side effects — such as brief
                                    discomfort at the injection site — will be explained
                                    beforehand along with aftercare advice.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="faq-item">
                        <button class="faq-item__trigger"
                                aria-expanded="false"
                                aria-controls="faq-w-6">
                            Is the home visit service available in Portsmouth?
                            <span class="faq-item__icon" aria-hidden="true"></span>
                        </button>
                        <div class="faq-item__answer" id="faq-w-6" role="region" hidden>
                            <div class="faq-item__answer-inner">
                                <p>
                                    Yes. Home visits are available across Portsmouth
                                    postcodes PO1-PO6 at a flat rate of £80 for a wellness
                                    consultation. Vitamin injection therapy is also available
                                    on home visits where clinically indicated — injection
                                    pricing is in addition to the consultation fee. Please
                                    use the home visit request form to confirm your postcode
                                    and we will be in touch within two hours during clinic
                                    hours.
                                </p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════
         BOOKING BAND
    ═══════════════════════════════════════════ -->
    <section class="svc-booking">
        <div class="svc-booking__inner container">

            <div>
                <p class="svc-booking__eyebrow">Book Today</p>
                <h2 class="svc-booking__heading">
                    Ready to Feel Better?
                </h2>
                <p class="svc-booking__text">
                    Clinic appointments are available Thursdays 14:00-18:00 and
                    Saturdays 08:00-12:00 at our Bitterne clinic. Home visits are
                    available across Southampton SO postcodes, SO31, and Portsmouth
                    PO1-PO6. Book online in seconds or request a home visit below.
                </p>

                <ul class="svc-booking__meta">
                    <li>
                        <i class="fa-sharp fa-thin fa-location-dot" aria-hidden="true"></i>
                        4 Chessel Avenue, Bitterne, Southampton, SO19 4AA
                    </li>
                    <li>
                        <i class="fa-sharp fa-thin fa-clock" aria-hidden="true"></i>
                        Thursday 14:00-18:00 &amp; Saturday 08:00-12:00
                    </li>
                    <li>
                        <i class="fa-sharp fa-thin fa-phone" aria-hidden="true"></i>
                        <a href="tel:02382350112">023 8235 0112</a>
                    </li>
                    <li>
                        <i class="fa-sharp fa-thin fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:reception@coremedica.co.uk">reception@coremedica.co.uk</a>
                    </li>
                </ul>

                <div class="svc-booking__ctas">
                    <a href="https://coremedica.cliniko.com/bookings"
                       class="btn btn--primary"
                       target="_blank"
                       rel="noopener noreferrer">
                        Book Online
                    </a>
                    <button class="btn btn--outline" data-modal-open="home-visit-modal">
                        Request a Home Visit
                    </button>
                </div>
            </div>

            <div class="svc-booking__map">
                <?php include '../includes/mappin.php'; ?>
            </div>

        </div>
    </section>

</main>

<!-- ══════════════════════════════════════════
     SCHEMA — JSON-LD
═══════════════════════════════════════════ -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "MedicalProcedure",
            "@id": "https://www.coremedica.co.uk/services/wellness-consultations/#procedure",
            "name": "Wellness Consultation & Vitamin Injection Therapy",
            "description": "Clinician-led wellness consultations assessing fatigue, low energy, poor immunity, and brain fog. Vitamin B12 and Vitamin D injection therapy available following clinical assessment. Clinic and home visits across Southampton and Portsmouth.",
            "procedureType": "https://schema.org/PhysicalExam",
            "followup": "Further consultations available as clinically indicated.",
            "preparation": "No preparation required. Bring any recent blood test results if available.",
            "howPerformed": "Full clinical history and assessment by an Advanced Practitioner. Vitamin injections administered intramuscularly at the same visit where clinically indicated and agreed by the patient.",
            "provider": {
                "@id": "https://www.coremedica.co.uk/#clinic"
            }
        },
        {
            "@type": "MedicalClinic",
            "@id": "https://www.coremedica.co.uk/#clinic",
            "name": "CoreMedica Wellness Group",
            "url": "https://www.coremedica.co.uk",
            "logo": "https://www.coremedica.co.uk/assets/images/coremedica_new_logo_text.webp",
            "image": "https://www.coremedica.co.uk/assets/images/og-wellness.jpg",
            "telephone": "02382350112",
            "email": "reception@coremedica.co.uk",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "4 Chessel Avenue, Bitterne",
                "addressLocality": "Southampton",
                "postalCode": "SO19 4AA",
                "addressCountry": "GB"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 50.9097,
                "longitude": -1.3667
            },
            "openingHoursSpecification": [
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "https://schema.org/Thursday",
                    "opens": "14:00",
                    "closes": "18:00"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "https://schema.org/Saturday",
                    "opens": "08:00",
                    "closes": "12:00"
                }
            ],
            "medicalSpecialty": [
                "https://schema.org/Nursing",
                "https://schema.org/GeneralPractice"
            ],
            "areaServed": [
                "Southampton",
                "Portsmouth"
            ]
        },
        {
            "@type": "WebPage",
            "@id": "https://www.coremedica.co.uk/services/wellness-consultations/#webpage",
            "url": "https://www.coremedica.co.uk/services/wellness-consultations/",
            "name": "Wellness Consultations Southampton & Portsmouth | CoreMedica",
            "description": "Clinician-led wellness consultations in Southampton and Portsmouth. Fatigue, low energy, immunity, and vitamin injection therapy — B12 and Vitamin D. Clinic and home visits. No GP referral required.",
            "inLanguage": "en-GB",
            "isPartOf": {
                "@id": "https://www.coremedica.co.uk/#website"
            },
            "about": {
                "@id": "https://www.coremedica.co.uk/services/wellness-consultations/#procedure"
            },
            "breadcrumb": {
                "@type": "BreadcrumbList",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Home",
                        "item": "https://www.coremedica.co.uk/"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Services",
                        "item": "https://www.coremedica.co.uk/services/"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "Wellness Consultations",
                        "item": "https://www.coremedica.co.uk/services/wellness-consultations/"
                    }
                ]
            }
        },
        {
            "@type": "FAQPage",
            "@id": "https://www.coremedica.co.uk/services/wellness-consultations/#faq",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "Do I need a GP referral to book a wellness consultation?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No. You can book directly without a GP referral. Our Advanced Practitioners are qualified to independently assess, diagnose, and recommend treatment. If something requires onward referral to a GP or specialist, we will tell you clearly and help you understand the next step."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What is the difference between a wellness consultation and a GP appointment?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "A CoreMedica wellness consultation is a private appointment with an Advanced Practitioner. There are no time restrictions — your practitioner will take a thorough history, explore your symptoms in detail, and discuss all appropriate options. This is not intended to replace your NHS GP relationship, but it can provide a level of depth and time that a standard GP appointment cannot always accommodate."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I have a vitamin injection without a consultation?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No. A clinical assessment must take place before any injection is administered. This confirms the injection is appropriate for you, identifies any contraindications, and ensures the treatment is documented correctly as a patient-specific direction. Where the assessment confirms it is clinically indicated, the injection can be given at the same visit."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do I need to bring blood test results?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "It is helpful but not essential. If you have recent blood results, bring them — they give your practitioner a useful starting point. However, many patients come to us having already been told their results are normal whilst still feeling unwell. A clinical assessment looks at the full picture, not just a single number."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Are vitamin injections safe?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Vitamin B12 and Vitamin D injections are well-established treatments with a strong safety record when administered by qualified practitioners following clinical assessment. Your practitioner will discuss any relevant considerations specific to you before proceeding. All injections are documented in your Cliniko record with batch number and expiry date."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Is the home visit service available in Portsmouth?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. Home visits are available across Portsmouth postcodes PO1-PO6 at a flat rate of £80 for a wellness consultation. Vitamin injection therapy is also available on home visits where clinically indicated — injection pricing is in addition to the consultation fee."
                    }
                }
            ]
        }
    ]
}
</script>

<?php include '../includes/home-visit-modal.php'; ?>
<?php include '../includes/footer.php'; ?>