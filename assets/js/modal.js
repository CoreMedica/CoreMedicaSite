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
