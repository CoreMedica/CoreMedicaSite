<?php
$page_title       = 'Hayfever &amp; Allergy Treatment in Southampton | CoreMedica';
$meta_description = 'Clinician-led hayfever and allergy consultations in Southampton. Full clinical assessment, treatment options, and home visits across SO postcodes. No GP referral required.';
$canonical_url    = 'https://coremedica.co.uk/services/hayfever-allergy-southampton/';
$body_class       = 'page-hayfever';

include '../includes/header.php';
?>


<!-- =====================================================
     HERO
     ===================================================== -->
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
                    <span aria-current="page" itemprop="name">Hayfever &amp; Allergy — Southampton</span>
                    <meta itemprop="position" content="3" />
                </li>
            </ol>
        </nav>

        <div class="svc-hero__inner">

            <p class="svc-hero__eyebrow">Hayfever &amp; Allergy</p>

            <h1 class="svc-hero__heading">
                Hayfever &amp; Allergy Treatment<br>
                <span class="svc-hero__heading-accent">in Southampton</span>
            </h1>

            <p class="svc-hero__subheading">
                Seasonal allergy symptoms that disrupt your sleep, work, and daily life deserve proper clinical
                attention — not just another packet of antihistamines. Our practitioners provide a thorough
                assessment and explore all appropriate treatment options with you. Clinic and home visits
                available. No GP referral required.
            </p>

            <div class="svc-hero__ctas">
                <a href="https://coremedica.cliniko.com/bookings" class="btn btn--primary" target="_blank" rel="noopener">
                    Book a Clinic Appointment
                </a>
                <button class="btn btn--secondary" data-modal-open="home-visit-modal" type="button">
                    Request a Home Visit
                </button>
            </div>

            <ul class="svc-hero__trust-list" aria-label="Key service details">
                <li class="svc-hero__trust-item">
                    <i class="fa-sharp fa-thin fa-location-dot"></i>
                    4 Chessel Avenue, Bitterne, SO19 4AA
                </li>
                <li class="svc-hero__trust-item">
                    <i class="fa-sharp fa-thin fa-clock"></i>
                    Thursdays 14:00-18:00 &amp; Saturdays 08:00-12:00
                </li>
                <li class="svc-hero__trust-item">
                    <i class="fa-sharp fa-thin fa-house"></i>
                    Home visits: SO14-SO19 &amp; SO31
                </li>
                <li class="svc-hero__trust-item">
                    <i class="fa-sharp fa-thin fa-circle-check"></i>
                    No GP referral required
                </li>
            </ul>

        </div><!-- /.svc-hero__inner -->
    </div>
</section>


<!-- =====================================================
     SYMPTOMS — uses .hayfever-symptoms from _hayfever.scss
     ===================================================== -->
<section class="hayfever-symptoms" aria-labelledby="symptoms-heading">
    <div class="container">

        <div class="section-header">
            <h2 class="section-header__heading" id="symptoms-heading">When Hayfever Becomes More Than a Nuisance</h2>
            <p class="section-header__lead">
                Seasonal allergic rhinitis affects millions of people in the UK every year. For many, over-the-counter
                antihistamines offer adequate relief. For others, symptoms are severe, persistent, or simply unresponsive
                to standard treatments — and that is when a proper clinical assessment makes the difference.
            </p>
        </div>

        <ul class="symptom-grid" aria-label="Common symptoms we treat">

            <li class="symptom-card">
                <i class="fa-sharp fa-thin fa-eye procedure-card__icon icon--xxxl" aria-hidden="true" focusable="false"></i>
                <h3 class="symptom-card__heading">Itchy, Watering Eyes</h3>
                <p class="symptom-card__text">Allergic conjunctivitis that makes it difficult to work, drive, or spend time outdoors during pollen season.</p>
            </li>

            <li class="symptom-card">
                <i class="fa-sharp fa-thin fa-wind procedure-card__icon icon--xxxl" aria-hidden="true" focusable="false"></i>
                <h3 class="symptom-card__heading">Persistent Sneezing &amp; Runny Nose</h3>
                <p class="symptom-card__text">Uncontrolled sneezing and nasal discharge that disrupt concentration, sleep, and everyday activities.</p>
            </li>

            <li class="symptom-card">
                <i class="fa-sharp fa-thin fa-nose procedure-card__icon icon--xxxl" aria-hidden="true" focusable="false"></i>
                <h3 class="symptom-card__heading">Nasal Congestion</h3>
                <p class="symptom-card__text">Blocked nasal passages affecting sleep quality, energy levels, and general comfort throughout spring and summer.</p>
            </li>

            <li class="symptom-card">
                <i class="fa-sharp fa-thin fa-moon procedure-card__icon icon--xxxl" aria-hidden="true" focusable="false"></i>
                <h3 class="symptom-card__heading">Sleep Disruption</h3>
                <p class="symptom-card__text">Allergy symptoms that worsen at night, causing broken sleep and daytime fatigue that compounds across the season.</p>
            </li>

            <li class="symptom-card">
                <i class="fa-sharp fa-thin fa-display procedure-card__icon icon--xxxl" aria-hidden="true" focusable="false"></i>
                <h3 class="symptom-card__heading">Impact on Work &amp; Daily Life</h3>
                <p class="symptom-card__text">Symptoms severe enough to affect concentration, performance at work, exercise, or outdoor activities.</p>
            </li>

            <li class="symptom-card">
                <i class="fa-sharp fa-thin fa-circle-question procedure-card__icon icon--xxxl" aria-hidden="true" focusable="false"></i>
                <h3 class="symptom-card__heading">Unresponsive to OTC Treatment</h3>
                <p class="symptom-card__text">Symptoms that persist despite regular antihistamines, nasal sprays, or eye drops — the point where a clinical pathway makes sense.</p>
            </li>

        </ul><!-- /.symptom-grid -->

    </div>
</section>


<!-- =====================================================
     WHAT TO EXPECT
     ===================================================== -->
<section class="svc-expect" aria-labelledby="expect-heading">
    <div class="container">

        <div class="section-header section-header--light">
            <h2 class="section-header__heading" id="expect-heading">Assessment First, Treatment Second</h2>
            <p class="section-header__lead">
                We do not simply dispense treatments. We assess each patient individually to confirm the diagnosis,
                review what has already been tried, and determine what is most appropriate and safe for that person.
            </p>
        </div>

        <ol class="expect-steps">

            <li class="expect-step">
                <span class="expect-step__number" aria-hidden="true">01</span>
                <div>
                    <h3 class="expect-step__heading">Clinical History</h3>
                    <p class="expect-step__text">
                        Your practitioner takes a detailed allergy history — symptom pattern, triggers, duration,
                        severity, and all treatments tried to date. This forms the foundation for everything that follows.
                    </p>
                </div>
            </li>

            <li class="expect-step">
                <span class="expect-step__number" aria-hidden="true">02</span>
                <div>
                    <h3 class="expect-step__heading">Clinical Assessment</h3>
                    <p class="expect-step__text">
                        A structured assessment confirms the diagnosis and checks for any contraindications to treatment.
                        Blood pressure, weight, and relevant medical history are reviewed where required.
                    </p>
                </div>
            </li>

            <li class="expect-step">
                <span class="expect-step__number" aria-hidden="true">03</span>
                <div>
                    <h3 class="expect-step__heading">Treatment Discussion</h3>
                    <p class="expect-step__text">
                        Your practitioner discusses the full range of options available, including the evidence base
                        for each and what is most appropriate given your history, symptoms, and preferences.
                    </p>
                </div>
            </li>

            <li class="expect-step">
                <span class="expect-step__number" aria-hidden="true">04</span>
                <div>
                    <h3 class="expect-step__heading">Treatment &amp; Aftercare</h3>
                    <p class="expect-step__text">
                        Where treatment is agreed and clinically indicated, it is administered at the same appointment.
                        Clear aftercare advice is provided, including what to expect and when to seek further review.
                    </p>
                </div>
            </li>

        </ol>

        <div class="svc-expect__cta">
            <a href="https://coremedica.cliniko.com/bookings" class="btn btn--primary" target="_blank" rel="noopener">
                Book Your Appointment
            </a>
        </div>

    </div>
</section>


<!-- =====================================================
     PRICING
     ===================================================== -->
<section class="svc-pricing" aria-labelledby="pricing-heading">
    <div class="container">

        <div class="section-header">
            <h2 class="section-header__heading" id="pricing-heading">Transparent, Fixed Pricing</h2>
            <p class="section-header__lead">
                No hidden fees. You will always know the full cost before any treatment begins.
            </p>
        </div>

        <div class="pricing-cards">

            <div class="pricing-card">
                <p class="pricing-card__label">Clinic — Bitterne SO19</p>
                <p class="pricing-card__name">Hayfever Consultation &amp; Treatment</p>
                <div class="pricing-card__price">
                    <span class="price-currency">£</span>
                    <span class="price-amount">60</span>
                </div>
                <p class="pricing-card__description">
                    Full clinical assessment and treatment consultation. Where injection therapy is agreed and
                    clinically indicated, this is administered at the same appointment. No GP referral required.
                </p>
                <a href="https://coremedica.cliniko.com/bookings" class="btn btn--primary" target="_blank" rel="noopener">
                    Book Clinic Appointment
                </a>
            </div>

            <div class="pricing-card pricing-card--featured">
                <p class="pricing-card__label">Clinic — Consultation Only</p>
                <p class="pricing-card__name">Assessment &amp; Advice</p>
                <div class="pricing-card__price">
                    <span class="price-currency">£</span>
                    <span class="price-amount">30</span>
                </div>
                <p class="pricing-card__description">
                    Clinical assessment and discussion only — for patients who wish to explore options before
                    committing to treatment, or where treatment is not appropriate at this appointment.
                </p>
                <a href="https://coremedica.cliniko.com/bookings" class="btn btn--primary" target="_blank" rel="noopener">
                    Book Appointment
                </a>
            </div>

            <div class="pricing-card">
                <p class="pricing-card__label">Home Visit — Southampton</p>
                <p class="pricing-card__name">Home Hayfever Consultation</p>
                <div class="pricing-card__price">
                    <span class="price-currency">£</span>
                    <span class="price-amount">80</span>
                </div>
                <p class="pricing-card__description">
                    Full clinical assessment and treatment at your home across SO14-SO19 and SO31.
                    Ideal for patients who cannot easily travel to clinic. No area surcharge.
                </p>
                <button class="btn btn--primary" data-modal-open="home-visit-modal" type="button">
                    Request a Home Visit
                </button>
            </div>

        </div><!-- /.pricing-cards -->

    </div>
</section>


<!-- =====================================================
     WHY COREMEDICA
     ===================================================== -->
<section class="svc-why" aria-labelledby="why-heading">
    <div class="container">

        <p class="svc-why__eyebrow">Why CoreMedica</p>
        <h2 class="svc-why__heading" id="why-heading">Clinician-Led from the First Appointment</h2>

        <div class="svc-why__inner">

            <div class="svc-why__content">
                <div class="svc-why__text">
                    <p>
                        Many hayfever sufferers spend years cycling through over-the-counter products without ever
                        receiving a proper clinical review of their condition. Our practitioners take the time to
                        understand your full symptom picture, review what has and has not worked, and offer a
                        genuinely clinical pathway — not just a product recommendation.
                    </p>
                    <p>
                        Our clinic is led by <strong>Jacqueline Allen</strong>, Advanced Clinical Practitioner,
                        and <strong>Lynda Morgan</strong>, Advanced Nurse Practitioner. Both are qualified to
                        assess, prescribe, and administer treatments where clinically indicated. Assessment and
                        treatment happen in a single visit — you will not be passed from appointment to appointment.
                    </p>
                    <p>
                        For patients who find it difficult to travel, or who simply prefer the convenience, our
                        home visit service brings the same clinical standard to your door across all Southampton
                        SO postcodes and SO31 — with no area surcharge.
                    </p>
                </div>
                <a href="/about/" class="btn btn--secondary">Meet Our Practitioners</a>
            </div>

            <div class="svc-why__stats" aria-label="Key statistics">
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

        </div><!-- /.svc-why__inner -->
    </div>
</section>


<!-- =====================================================
     HOME VISIT COVERAGE
     ===================================================== -->
<section class="svc-areas" aria-labelledby="coverage-heading">
    <div class="container">

        <div class="section-header">
            <h2 class="section-header__heading" id="coverage-heading">Southampton Home Visit Area</h2>
            <p class="section-header__lead">
                Our home visit service covers the following Southampton postcodes at a flat rate of £80 —
                no surcharge regardless of your location within the coverage area.
            </p>
        </div>

        <ul class="area-grid" aria-label="Covered postcodes">
            <?php
            $areas = [
                ['code' => 'SO14', 'name' => 'Southampton City Centre'],
                ['code' => 'SO15', 'name' => 'Shirley, Freemantle'],
                ['code' => 'SO16', 'name' => 'Bassett, Nursling'],
                ['code' => 'SO17', 'name' => 'Portswood, Highfield'],
                ['code' => 'SO18', 'name' => 'Thornhill, Bitterne Park'],
                ['code' => 'SO19', 'name' => 'Bitterne, Woolston'],
                ['code' => 'SO31', 'name' => 'Bursledon, Hedge End'],
            ];
            foreach ($areas as $area) : ?>
                <li class="area-item">
                    <i class="fa-sharp fa-thin fa-location-dot" aria-hidden="true" focusable="false"></i>
                    <strong><?= htmlspecialchars($area['code']) ?></strong> <?= htmlspecialchars($area['name']) ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="svc-areas__note">
            Not sure if your postcode is covered?
            <a href="mailto:reception@coremedica.co.uk">Contact us</a> and we will confirm availability.
        </p>

    </div>
</section>
<!-- =====================================================
     REVIEWS
     ===================================================== -->
<section class="svc-reviews" aria-labelledby="reviews-heading">
    <div class="container">

        <div class="section-header">
            <h2 class="section-header__heading section-header__heading--light" id="reviews-heading">What Our Patients Say</h2>
        </div>

        <div class="reviews-grid reviews-grid--standalone">

            <article class="review-card">
                <p class="review-card__stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                <blockquote class="review-card__text">
                    Jacqueline was incredibly thorough — she actually listened to everything I had tried before
                    and explained exactly what my options were. First time in years I have felt properly looked
                    after rather than just handed a leaflet.
                </blockquote>
                <cite class="review-card__cite">
                    Sarah M
                    <span class="review-card__source">
                        via Google
                    </span>
                </cite>
            </article>

            <article class="review-card">
                <p class="review-card__stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                <blockquote class="review-card__text">
                    Lynda was brilliant — very professional and knowledgeable. She took her time going through
                    my history and explained everything clearly. The home visit was so convenient.
                    Absolutely recommend.
                </blockquote>
                <cite class="review-card__cite">
                    David T
                    <span class="review-card__source">
                        via Fresha
                    </span>
                </cite>
            </article>

            <article class="review-card">
                <p class="review-card__stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                <blockquote class="review-card__text">
                    I have suffered with hayfever my whole life and never had a proper consultation before.
                    The assessment was thorough and everything was explained fully. Already feeling a significant
                    difference. Excellent service.
                </blockquote>
                <cite class="review-card__cite">
                    Caroline B
                    <span class="review-card__source">
                        via Google
                    </span>
                </cite>
            </article>

        </div><!-- /.reviews-grid -->

    </div>
</section>


<!-- =====================================================
     FAQs
     ===================================================== -->
<section class="faq-section faq-section--light" aria-labelledby="faq-heading">
    <div class="container">

        <div class="section-header">
            <h2 class="section-header__heading" id="faq-heading">Common Questions</h2>
        </div>

        <ul class="faq-list" id="faq-accordion">

            <li class="faq-item">
                <button class="faq-item__trigger" aria-expanded="false" aria-controls="faq-1" id="faq-btn-1" type="button">
                    Do I need a GP referral for a hayfever consultation?
                    <svg class="faq-item__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="faq-item__answer" id="faq-1" role="region" aria-labelledby="faq-btn-1" hidden>
                    <div class="faq-item__answer-inner">
                        <p>
                            No. You can book directly online or by contacting us. No GP letter or referral is
                            required. Our practitioners are qualified to assess, diagnose, and treat independently.
                        </p>
                    </div>
                </div>
            </li>

            <li class="faq-item">
                <button class="faq-item__trigger" aria-expanded="false" aria-controls="faq-2" id="faq-btn-2" type="button">
                    What treatments can you offer at the appointment?
                    <svg class="faq-item__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="faq-item__answer" id="faq-2" role="region" aria-labelledby="faq-btn-2" hidden>
                    <div class="faq-item__answer-inner">
                        <p>
                            Following a clinical assessment, your practitioner will discuss all appropriate
                            treatment options with you, including the evidence behind each option and any potential
                            side effects. Where injection therapy is clinically indicated and agreed, this can be
                            administered at the same appointment.
                        </p>
                    </div>
                </div>
            </li>

            <li class="faq-item">
                <button class="faq-item__trigger" aria-expanded="false" aria-controls="faq-3" id="faq-btn-3" type="button">
                    Is the consultation available as a home visit?
                    <svg class="faq-item__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="faq-item__answer" id="faq-3" role="region" aria-labelledby="faq-btn-3" hidden>
                    <div class="faq-item__answer-inner">
                        <p>
                            Yes. Home visit consultations are available across SO14-SO19 and SO31 at a flat rate
                            of £80 — no area surcharge. The full clinical assessment and, where appropriate,
                            treatment can be carried out at your home. Use the Request a Home Visit button to
                            submit your details.
                        </p>
                    </div>
                </div>
            </li>

            <li class="faq-item">
                <button class="faq-item__trigger" aria-expanded="false" aria-controls="faq-4" id="faq-btn-4" type="button">
                    When is the best time to book before the hayfever season?
                    <svg class="faq-item__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="faq-item__answer" id="faq-4" role="region" aria-labelledby="faq-btn-4" hidden>
                    <div class="faq-item__answer-inner">
                        <p>
                            Ideally, book before your symptoms begin — typically February to early March for tree
                            pollen sufferers, and April onwards for grass pollen. Treating before or at the very
                            start of your symptoms tends to be more effective than waiting until they are severe.
                            However, we can see patients at any point during the season.
                        </p>
                    </div>
                </div>
            </li>

            <li class="faq-item">
                <button class="faq-item__trigger" aria-expanded="false" aria-controls="faq-5" id="faq-btn-5" type="button">
                    Can children be seen for hayfever?
                    <svg class="faq-item__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="faq-item__answer" id="faq-5" role="region" aria-labelledby="faq-btn-5" hidden>
                    <div class="faq-item__answer-inner">
                        <p>
                            Our hayfever and allergy service is for adult patients aged 18 and over. For children
                            under 18, we recommend speaking with your GP in the first instance.
                        </p>
                    </div>
                </div>
            </li>

            <li class="faq-item">
                <button class="faq-item__trigger" aria-expanded="false" aria-controls="faq-6" id="faq-btn-6" type="button">
                    What should I bring to my appointment?
                    <svg class="faq-item__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="faq-item__answer" id="faq-6" role="region" aria-labelledby="faq-btn-6" hidden>
                    <div class="faq-item__answer-inner">
                        <p>
                            It is helpful to bring a list of any medications you currently take — including
                            antihistamines, nasal sprays, or eye drops — and how effective you have found them.
                            If you have had any allergy testing previously, bring those results if available.
                            Your practitioner will guide you through the rest.
                        </p>
                    </div>
                </div>
            </li>

        </ul><!-- /.faq-list -->

    </div>
</section>


<!-- =====================================================
     BOOKING / LOCATION
     ===================================================== -->
<section class="svc-booking" aria-labelledby="booking-heading">
    <div class="container">
        <div class="svc-booking__inner">

            <div class="svc-booking__content">

                <p class="svc-booking__eyebrow">Book Your Appointment</p>
                <h2 class="svc-booking__heading" id="booking-heading">
                    Visit Us in Bitterne or Book a Home Visit
                </h2>
                <p class="svc-booking__text">
                    Clinic appointments every Thursday afternoon and Saturday morning.
                    Home visits across Southampton SO postcodes, seven days a week subject to availability.
                </p>

                <ul class="svc-booking__meta" aria-label="Location and contact details">
                    <li>
                        <i class="fa-sharp fa-thin fa-location-dot"></i>
                        <span>4 Chessel Avenue, Bitterne, Southampton, SO19&nbsp;4AA</span>
                    </li>
                    <li>
                        <i class="fa-sharp fa-thin fa-clock"></i>
                        <span>Thursdays 14:00&ndash;18:00 &amp; Saturdays 08:00&ndash;12:00</span>
                    </li>
                    <li>
                        <i class="fa-sharp fa-thin fa-envelope"></i>
                        <span>
                            <a href="tel:07777100716">07777&nbsp;100716</a>
                            &nbsp;&mdash;&nbsp;
                            <a href="mailto:reception@coremedica.co.uk">reception@coremedica.co.uk</a>
                        </span>
                    </li>
                </ul>

                <div class="svc-booking__ctas">
                    <a href="https://coremedica.cliniko.com/bookings" class="btn btn--primary" target="_blank" rel="noopener">
                        Book Clinic Appointment
                    </a>
                    <button class="btn btn--outline" data-modal-open="home-visit-modal" type="button">
                        Request a Home Visit
                    </button>
                </div>

            </div><!-- /.svc-booking__content -->

            <div class="svc-booking__map">
                <?php include '../includes/mappin.php'; ?>
            </div>

        </div><!-- /.svc-booking__inner -->
    </div>
</section>


<!-- =====================================================
     JSON-LD SCHEMA
     ===================================================== -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [{
                "@type": "MedicalProcedure",
                "@id": "https://coremedica.co.uk/services/hayfever-allergy-southampton/#procedure",
                "name": "Hayfever and Allergy Consultation",
                "description": "Clinician-led hayfever and allergy assessment and treatment in Southampton. Includes full clinical history, diagnosis, treatment discussion, and administration of injection therapy where clinically indicated. Available at clinic or as a home visit.",
                "followup": "Aftercare advice provided at appointment. Further review available if required.",
                "howPerformed": "Clinical assessment followed by treatment discussion and, where agreed and indicated, same-appointment treatment.",
                "preparation": "No special preparation required. Bring a list of current medications and any previous allergy test results if available.",
                "relevantSpecialty": {
                    "@type": "MedicalSpecialty",
                    "name": "Allergy and Immunology"
                }
            },
            {
                "@type": "MedicalClinic",
                "@id": "https://coremedica.co.uk/#clinic",
                "name": "CoreMedica Wellness Group",
                "url": "https://coremedica.co.uk",
                "logo": "https://coremedica.co.uk/assets/images/coremedica_new_logo_text.webp",
                "telephone": "02382350112",
                "email": "reception@coremedica.co.uk",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "4 Chessel Avenue, Bitterne",
                    "addressLocality": "Southampton",
                    "addressRegion": "Hampshire",
                    "postalCode": "SO19 4AA",
                    "addressCountry": "GB"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "50.9136",
                    "longitude": "-1.3609"
                },
                "openingHoursSpecification": [{
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": "Thursday",
                        "opens": "14:00",
                        "closes": "18:00"
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": "Saturday",
                        "opens": "08:00",
                        "closes": "12:00"
                    }
                ],
                "areaServed": [{
                        "@type": "PostalAddress",
                        "postalCode": "SO14",
                        "addressCountry": "GB"
                    },
                    {
                        "@type": "PostalAddress",
                        "postalCode": "SO15",
                        "addressCountry": "GB"
                    },
                    {
                        "@type": "PostalAddress",
                        "postalCode": "SO16",
                        "addressCountry": "GB"
                    },
                    {
                        "@type": "PostalAddress",
                        "postalCode": "SO17",
                        "addressCountry": "GB"
                    },
                    {
                        "@type": "PostalAddress",
                        "postalCode": "SO18",
                        "addressCountry": "GB"
                    },
                    {
                        "@type": "PostalAddress",
                        "postalCode": "SO19",
                        "addressCountry": "GB"
                    },
                    {
                        "@type": "PostalAddress",
                        "postalCode": "SO31",
                        "addressCountry": "GB"
                    }
                ],
                "medicalSpecialty": "Allergy and Immunology",
                "availableService": {
                    "@id": "https://coremedica.co.uk/services/hayfever-allergy-southampton/#procedure"
                }
            },
            {
                "@type": "WebPage",
                "@id": "https://coremedica.co.uk/services/hayfever-allergy-southampton/",
                "url": "https://coremedica.co.uk/services/hayfever-allergy-southampton/",
                "name": "Hayfever & Allergy Treatment in Southampton | CoreMedica",
                "description": "Clinician-led hayfever and allergy consultations in Southampton. Full clinical assessment, treatment options, and home visits across SO postcodes. No GP referral required.",
                "isPartOf": {
                    "@id": "https://coremedica.co.uk/#website"
                },
                "about": {
                    "@id": "https://coremedica.co.uk/services/hayfever-allergy-southampton/#procedure"
                },
                "breadcrumb": {
                    "@type": "BreadcrumbList",
                    "itemListElement": [{
                            "@type": "ListItem",
                            "position": 1,
                            "name": "Home",
                            "item": "https://coremedica.co.uk/"
                        },
                        {
                            "@type": "ListItem",
                            "position": 2,
                            "name": "Services",
                            "item": "https://coremedica.co.uk/services/"
                        },
                        {
                            "@type": "ListItem",
                            "position": 3,
                            "name": "Hayfever & Allergy — Southampton",
                            "item": "https://coremedica.co.uk/services/hayfever-allergy-southampton/"
                        }
                    ]
                }
            },
            {
                "@type": "FAQPage",
                "mainEntity": [{
                        "@type": "Question",
                        "name": "Do I need a GP referral for a hayfever consultation?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "No. You can book directly online or by contacting us. No GP letter or referral is required. Our practitioners are qualified to assess, diagnose, and treat independently."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What treatments can you offer at the appointment?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Following a clinical assessment, your practitioner will discuss all appropriate treatment options with you, including the evidence behind each option and any potential side effects. Where injection therapy is clinically indicated and agreed, this can be administered at the same appointment."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Is the consultation available as a home visit?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes. Home visit consultations are available across SO14-SO19 and SO31 at a flat rate of £80 with no area surcharge. The full clinical assessment and, where appropriate, treatment can be carried out at your home."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "When is the best time to book before the hayfever season?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Ideally, book before your symptoms begin — typically February to early March for tree pollen sufferers, and April onwards for grass pollen. However, we can see patients at any point during the season."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Can children be seen for hayfever?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Our hayfever and allergy service is for adult patients aged 18 and over. For children under 18, we recommend speaking with your GP in the first instance."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What should I bring to my appointment?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "It is helpful to bring a list of any medications you currently take, including antihistamines, nasal sprays, or eye drops, and how effective you have found them. If you have had any allergy testing previously, bring those results if available."
                        }
                    }
                ]
            }
        ]
    }
</script>


<!-- =====================================================
     HOME VISIT MODAL
     ===================================================== -->
<?php include '../includes/home-visit-modal.php'; ?>


<?php include '../includes/footer.php'; ?>