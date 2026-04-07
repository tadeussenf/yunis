// ===== Parallax Scrolling =====
function initParallax() {
    const bgLayer = document.querySelector('.layer-bg');
    const fgLayer = document.querySelector('.layer-fg');
    if (!bgLayer && !fgLayer) return;

    window.addEventListener('scroll', function () {
        const scrollPosition = window.pageYOffset;
        if (bgLayer) {
            bgLayer.style.transform = 'translateY(' + (scrollPosition * 0.5) + 'px)';
        }
        if (fgLayer) {
            fgLayer.style.transform = 'translateY(' + (scrollPosition * 0.2) + 'px)';
        }
    }, { passive: true });
}

// ===== Scroll Reveal (IntersectionObserver) =====
function initScrollReveal() {
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReduced) return;

    const reveals = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-stagger');
    if (!reveals.length) return;

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '-50px'
    });

    reveals.forEach(function (el) {
        observer.observe(el);
    });
}

// ===== Hero Float Animation =====
function initHeroFloat() {
    const heroContent = document.querySelector('.hero-content');
    if (!heroContent) return;

    // After entrance animations complete, add float
    setTimeout(function () {
        heroContent.classList.add('animate-float');
    }, 2200);
}

// ===== Hamburger Menu =====
function initHamburger() {
    const hamburger = document.querySelector('.hamburger');
    const navOverlay = document.querySelector('.nav-overlay');
    if (!hamburger || !navOverlay) return;

    hamburger.addEventListener('click', function () {
        const isOpen = navOverlay.classList.toggle('open');
        hamburger.classList.toggle('active');
        hamburger.setAttribute('aria-expanded', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    // Close on link click
    navOverlay.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            navOverlay.classList.remove('open');
            hamburger.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        });
    });

    // Close on Escape
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && navOverlay.classList.contains('open')) {
            navOverlay.classList.remove('open');
            hamburger.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }
    });
}

// ===== Lightbox =====
function initLightbox() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    if (!galleryItems.length) return;

    // Create overlay
    const overlay = document.createElement('div');
    overlay.className = 'lightbox-overlay';
    overlay.innerHTML = '<button class="lightbox-close" aria-label="Close">&times;</button><img src="" alt="">';
    document.body.appendChild(overlay);

    const overlayImg = overlay.querySelector('img');
    const closeBtn = overlay.querySelector('.lightbox-close');

    function openLightbox(src) {
        overlayImg.src = src;
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    galleryItems.forEach(function (item) {
        item.style.cursor = 'pointer';
        item.addEventListener('click', function () {
            var img = item.querySelector('img');
            if (img) openLightbox(img.src);
        });
    });

    closeBtn.addEventListener('click', closeLightbox);
    overlay.addEventListener('click', function (e) {
        if (e.target === overlay) closeLightbox();
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && overlay.classList.contains('active')) {
            closeLightbox();
        }
    });
}

// ===== Back to Top =====
function initBackToTop() {
    const btn = document.querySelector('.back-to-top');
    if (!btn) return;

    var ticking = false;
    window.addEventListener('scroll', function () {
        if (!ticking) {
            requestAnimationFrame(function () {
                if (window.pageYOffset > 300) {
                    btn.classList.add('visible');
                } else {
                    btn.classList.remove('visible');
                }
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });

    btn.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// ===== Init =====
document.addEventListener('DOMContentLoaded', function () {
    initParallax();
    initScrollReveal();
    initHeroFloat();
    initHamburger();
    initLightbox();
    initBackToTop();
});
