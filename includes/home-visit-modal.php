<!-- ═══════════════════════════════════════════
     HOME VISIT MODAL
════════════════════════════════════════════ -->
<div class="modal" id="home-visit-modal" role="dialog" aria-modal="true" aria-labelledby="modal-heading" aria-hidden="true">
    <div class="modal__backdrop" data-modal-close></div>
    <div class="modal__panel">

        <button class="modal__close" data-modal-close aria-label="Close home visit request form">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>

        <div class="modal__header">
            <p class="modal__eyebrow">CoreMedica Wellness Group</p>
            <h2 class="modal__heading" id="modal-heading">Request a Home Visit</h2>
            <p class="modal__subheading">
                Fill in your details below and we will be in touch to confirm your appointment.
                We aim to respond within 2 hours during clinic hours.
            </p>
        </div>

        <!-- Success state (hidden until form submits) -->
        <div class="modal__success" hidden>
            <svg class="modal__success-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                <polyline points="22 4 12 14.01 9 11.01" />
            </svg>
            <h3 class="modal__success-heading">Request Sent</h3>
            <p class="modal__success-text">
                Thank you — we have received your home visit request and will be in touch shortly
                to confirm your appointment. If you need to reach us urgently, call
                <a href="tel:07777100716">07777&nbsp;100716</a>.
            </p>
        </div>

        <!-- Error banner (hidden until needed) -->
        <div class="modal__error" hidden role="alert">
            <p class="modal__error-text"></p>
        </div>

        <form class="modal__form" id="home-visit-form" novalidate>

            <!-- Honeypot — hidden from real users -->
            <div class="visually-hidden" aria-hidden="true">
                <label for="hv-website">Leave this blank</label>
                <input type="text" id="hv-website" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="form-row form-row--two">

                <div class="form-field">
                    <label class="form-field__label" for="hv-name">
                        Full Name <span class="form-field__required" aria-hidden="true">*</span>
                    </label>
                    <input
                        class="form-field__input"
                        type="text"
                        id="hv-name"
                        name="name"
                        autocomplete="name"
                        required
                        aria-required="true"
                        placeholder="e.g. Jane Smith">
                </div>

                <div class="form-field">
                    <label class="form-field__label" for="hv-postcode">
                        Postcode <span class="form-field__required" aria-hidden="true">*</span>
                    </label>
                    <input
                        class="form-field__input"
                        type="text"
                        id="hv-postcode"
                        name="postcode"
                        autocomplete="postal-code"
                        required
                        aria-required="true"
                        placeholder="e.g. PO4 8AB">
                </div>

            </div>

            <div class="form-row form-row--two">

                <div class="form-field">
                    <label class="form-field__label" for="hv-phone">Phone Number</label>
                    <input
                        class="form-field__input"
                        type="tel"
                        id="hv-phone"
                        name="phone"
                        autocomplete="tel"
                        placeholder="e.g. 07700 900000">
                </div>

                <div class="form-field">
                    <label class="form-field__label" for="hv-email">Email Address</label>
                    <input
                        class="form-field__input"
                        type="email"
                        id="hv-email"
                        name="email"
                        autocomplete="email"
                        placeholder="e.g. jane@example.com">
                </div>

            </div>

            <p class="form-note">Please provide at least a phone number or email address.</p>

            <div class="form-row form-row--two">

                <div class="form-field">
                    <label class="form-field__label" for="hv-date">Preferred Date</label>
                    <input
                        class="form-field__input"
                        type="date"
                        id="hv-date"
                        name="date">
                </div>

                <div class="form-field">
                    <label class="form-field__label" for="hv-time">Preferred Time</label>
                    <select class="form-field__input form-field__select" id="hv-time" name="time">
                        <option value="">No preference</option>
                        <option value="Morning (08:00-12:00)">Morning (08:00-12:00)</option>
                        <option value="Afternoon (12:00-17:00)">Afternoon (12:00-17:00)</option>
                        <option value="Evening (17:00-19:00)">Evening (17:00-19:00)</option>
                    </select>
                </div>

            </div>

            <div class="form-field">
                <label class="form-field__label" for="hv-message">Additional Notes</label>
                <textarea
                    class="form-field__input form-field__textarea"
                    id="hv-message"
                    name="message"
                    rows="3"
                    placeholder="Anything useful for us to know — e.g. which ear(s) are affected, any relevant medical history"></textarea>
            </div>

            <div class="modal__actions">
                <button type="submit" class="btn btn--primary modal__submit">
                    <span class="modal__submit-label">Send Request</span>
                    <span class="modal__submit-spinner" aria-hidden="true" hidden></span>
                </button>
                <p class="modal__privacy-note">
                    Your details are used only to respond to your request and will not be shared
                    with third parties. See our <a href="/privacy-policy">privacy policy</a>.
                </p>
            </div>

        </form>

    </div>
</div>