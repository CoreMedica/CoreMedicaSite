(function () {
  "use strict";

  // ─── Elements ─────────────────────────────
  const header = document.getElementById("siteHeader");
  const toggle = document.getElementById("navToggle");
  const nav = document.getElementById("siteNav");
  const overlay = document.getElementById("navOverlay");
  const megaItem = document.querySelector(".site-nav__item--mega");
  const megaTrigger = document.getElementById("megaTrigger");
  const megaMenu = document.querySelector(".mega-menu");

  // ─── Scroll-aware header shadow ───────────
  if (header) {
    const onScroll = () => {
      header.classList.toggle("is-scrolled", window.scrollY > 10);
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  // ─── Detect touch capability ───────────────
  // Used to decide whether hover or click drives the mega menu
  let hasTouch = false;
  window.addEventListener(
    "touchstart",
    () => {
      hasTouch = true;
    },
    { once: true, passive: true },
  );

  // ─── Mega menu ────────────────────────────
let megaCloseTimer = null;

function openMega() {
    if (!megaMenu || !megaTrigger) return;
    clearTimeout(megaCloseTimer);
    megaMenu.classList.add('is-open');
    megaTrigger.setAttribute('aria-expanded', 'true');
}

function closeMega() {
    if (!megaMenu || !megaTrigger) return;
    megaMenu.classList.remove('is-open');
    megaTrigger.setAttribute('aria-expanded', 'false');
}

function scheduledCloseMega() {
    megaCloseTimer = setTimeout(closeMega, 150);
}

function isMegaOpen() {
    return megaMenu && megaMenu.classList.contains('is-open');
}

if (megaItem && megaTrigger && megaMenu) {

    // Desktop hover — open immediately, close with delay
    megaItem.addEventListener('mouseenter', () => {
        if (!hasTouch) openMega();
    });

    megaItem.addEventListener('mouseleave', () => {
        if (!hasTouch) scheduledCloseMega();
    });

    // If cursor re-enters the mega menu before the timer fires, cancel close
    megaMenu.addEventListener('mouseenter', () => {
        if (!hasTouch) clearTimeout(megaCloseTimer);
    });

    megaMenu.addEventListener('mouseleave', () => {
        if (!hasTouch) scheduledCloseMega();
    });

    // Click/tap toggle (touch + keyboard)
    megaTrigger.addEventListener('click', (e) => {
        if (hasTouch || window.innerWidth <= 1025) {
            if (!isMegaOpen()) {
                e.preventDefault();
                openMega();
            }
        }
    });

    // Close on Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && isMegaOpen()) {
            closeMega();
            megaTrigger.focus();
        }
    });

    // Close when clicking outside
    document.addEventListener('click', (e) => {
        if (isMegaOpen() && !megaItem.contains(e.target)) {
            closeMega();
        }
    });

    // Keyboard: close when focus leaves the mega menu entirely
    megaMenu.addEventListener('focusout', (e) => {
        if (!megaItem.contains(e.relatedTarget)) {
            closeMega();
        }
    });
}

  // ─── Mobile nav toggle ────────────────────
  function openNav() {
    nav.classList.add("is-open");
    toggle.classList.add("is-open");
    overlay.classList.add("is-visible");
    toggle.setAttribute("aria-expanded", "true");
    toggle.setAttribute("aria-label", "Close navigation menu");
    document.body.style.overflow = "hidden";
  }

  function closeNav() {
    nav.classList.remove("is-open");
    toggle.classList.remove("is-open");
    overlay.classList.remove("is-visible");
    toggle.setAttribute("aria-expanded", "false");
    toggle.setAttribute("aria-label", "Open navigation menu");
    document.body.style.overflow = "";
    closeMega(); // also close mega if open
  }

  if (toggle && nav && overlay) {
    toggle.addEventListener("click", () => {
      nav.classList.contains("is-open") ? closeNav() : openNav();
    });

    overlay.addEventListener("click", closeNav);

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && nav.classList.contains("is-open")) {
        closeNav();
        toggle.focus();
      }
    });
  }

  // ─── Active nav link ──────────────────────
  const navLinks = document.querySelectorAll(".site-nav__link");
  const currentPath = window.location.pathname;

  navLinks.forEach((link) => {
    const href = link.getAttribute("href");
    if (
      href &&
      (href === currentPath || (href !== "/" && currentPath.startsWith(href)))
    ) {
      link.classList.add("is-active");
    }
  });
})();

// ─── FAQ Accordion ───────────────────────────────────────────
(function () {
  const triggers = document.querySelectorAll('.faq-item__trigger');
  if (!triggers.length) return;

  triggers.forEach(function (trigger) {
    trigger.addEventListener('click', function () {
      const expanded = this.getAttribute('aria-expanded') === 'true';
      const answerId = this.getAttribute('aria-controls');
      const answer   = document.getElementById(answerId);

      // Collapse all others
      triggers.forEach(function (t) {
        const id  = t.getAttribute('aria-controls');
        const ans = document.getElementById(id);
        t.setAttribute('aria-expanded', 'false');
        if (ans) ans.hidden = true;
      });

      // Toggle current
      if (!expanded) {
        this.setAttribute('aria-expanded', 'true');
        answer.hidden = false;
      }
    });
  });
}());

// ─── Reviews — show more ─────────────────────────────────────
(function () {
  const btn     = document.getElementById('reviews-show-more');
  if (!btn) return;

  const hidden  = document.querySelectorAll('.review-card--hidden');

  btn.addEventListener('click', function () {
    const expanded = this.getAttribute('aria-expanded') === 'true';

    hidden.forEach(function (card) {
      if (!expanded) {
        card.classList.add('is-visible');
      } else {
        card.classList.remove('is-visible');
      }
    });

    this.setAttribute('aria-expanded', String(!expanded));
    this.textContent = expanded ? 'Show More Reviews' : 'Show Fewer Reviews';
  });
}());
/**
 * Home Visit Modal
 * Handles open/close, focus trap, keyboard nav, and form submission.
 */

(function () {
  "use strict";

  const MODAL_ID = "home-visit-modal";
  const HANDLER_PATH = "/includes/form-handler.php";
  const FOCUSABLE =
    'a[href], button:not([disabled]), input, select, textarea, [tabindex]:not([tabindex="-1"])';

  let modal,
    panel,
    form,
    submitBtn,
    submitLabel,
    submitSpinner,
    successEl,
    errorEl,
    errorText;
  let previouslyFocused = null;

  // ── Init ────────────────────────────────────

  document.addEventListener("DOMContentLoaded", function () {
    modal = document.getElementById(MODAL_ID);
    if (!modal) return;

    panel = modal.querySelector(".modal__panel");
    form = modal.querySelector(".modal__form");
    submitBtn = modal.querySelector(".modal__submit");
    submitLabel = modal.querySelector(".modal__submit-label");
    submitSpinner = modal.querySelector(".modal__submit-spinner");
    successEl = modal.querySelector(".modal__success");
    errorEl = modal.querySelector(".modal__error");
    errorText = modal.querySelector(".modal__error-text");

    // Set min date to tomorrow on the date input
    var dateInput = form.querySelector('input[type="date"]');
    if (dateInput) {
      var tomorrow = new Date();
      tomorrow.setDate(tomorrow.getDate() + 1);
      dateInput.min = tomorrow.toISOString().split("T")[0];
    }

    // Bind triggers — any element with data-modal-open="home-visit-modal"
    document
      .querySelectorAll('[data-modal-open="' + MODAL_ID + '"]')
      .forEach(function (trigger) {
        trigger.addEventListener("click", openModal);
      });

    // Backdrop and explicit close buttons
    modal.querySelectorAll("[data-modal-close]").forEach(function (el) {
      el.addEventListener("click", closeModal);
    });

    // Keyboard: Escape to close, Tab to trap focus
    document.addEventListener("keydown", onKeyDown);

    // Form submission
    form.addEventListener("submit", onSubmit);
  });

  // ── Open / Close ─────────────────────────────

  function openModal() {
    previouslyFocused = document.activeElement;
    modal.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";

    // Focus first focusable element inside panel
    var focusable = panel.querySelectorAll(FOCUSABLE);
    if (focusable.length) {
      setTimeout(function () {
        focusable[0].focus();
      }, 50);
    }
  }

  function closeModal() {
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";

    // Restore focus to the trigger that opened the modal
    if (previouslyFocused) {
      previouslyFocused.focus();
      previouslyFocused = null;
    }
  }

  // ── Keyboard handling ─────────────────────────

  function onKeyDown(e) {
    if (modal.getAttribute("aria-hidden") === "true") return;

    if (e.key === "Escape") {
      closeModal();
      return;
    }

    if (e.key === "Tab") {
      trapFocus(e);
    }
  }

  function trapFocus(e) {
    var focusable = Array.from(panel.querySelectorAll(FOCUSABLE)).filter(
      function (el) {
        return !el.closest("[hidden]");
      },
    );

    if (!focusable.length) return;

    var first = focusable[0];
    var last = focusable[focusable.length - 1];

    if (e.shiftKey) {
      if (document.activeElement === first) {
        e.preventDefault();
        last.focus();
      }
    } else {
      if (document.activeElement === last) {
        e.preventDefault();
        first.focus();
      }
    }
  }

  // ── Form submission ───────────────────────────

  function onSubmit(e) {
    e.preventDefault();

    hideError();

    // Basic client-side validation
    var name = form.querySelector('[name="name"]').value.trim();
    var phone = form.querySelector('[name="phone"]').value.trim();
    var email = form.querySelector('[name="email"]').value.trim();
    var postcode = form.querySelector('[name="postcode"]').value.trim();

    if (!name) {
      showError("Please enter your name.");
      form.querySelector('[name="name"]').focus();
      return;
    }

    if (!phone && !email) {
      showError("Please provide at least a phone number or email address.");
      form.querySelector('[name="phone"]').focus();
      return;
    }

    if (!postcode) {
      showError("Please enter your postcode so we can confirm coverage.");
      form.querySelector('[name="postcode"]').focus();
      return;
    }

    setLoading(true);

    var data = new FormData(form);

    fetch(HANDLER_PATH, {
      method: "POST",
      body: data,
    })
      .then(function (response) {
        return response.json().then(function (json) {
          return { status: response.status, body: json };
        });
      })
      .then(function (result) {
        setLoading(false);
        if (result.body.success) {
          showSuccess();
        } else {
          showError(
            result.body.message || "Something went wrong. Please try again.",
          );
        }
      })
      .catch(function () {
        setLoading(false);
        showError(
          "A network error occurred. Please check your connection and try again.",
        );
      });
  }

  // ── State helpers ─────────────────────────────

  function setLoading(loading) {
    submitBtn.disabled = loading;
    submitLabel.textContent = loading ? "Sending\u2026" : "Send Request";
    submitSpinner.hidden = !loading;
  }

  function showSuccess() {
    form.hidden = true;
    errorEl.hidden = true;
    successEl.hidden = false;
    successEl.querySelector(".modal__success-heading").focus();
  }

  function showError(message) {
    errorText.textContent = message;
    errorEl.hidden = false;
    errorEl.scrollIntoView({ behavior: "smooth", block: "nearest" });
  }

  function hideError() {
    errorEl.hidden = true;
    errorText.textContent = "";
  }
})();
