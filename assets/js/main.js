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
