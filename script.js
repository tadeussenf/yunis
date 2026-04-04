document.addEventListener("DOMContentLoaded", () => {
    // Parallax logic for the hero image
    const heroImage = document.querySelector('.hero-image');
    
    window.addEventListener('scroll', () => {
        let scrollY = window.scrollY;
        
        if (heroImage) {
            // Slight downward movement creates a parallax effect
            // We use transform scale to prevent edges from showing
            heroImage.style.transform = `translateY(${scrollY * 0.4}px) scale(1.1)`;
        }
    });

    // Intersection Observer for fade-up animations
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const fadeObsever = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Optional: unobserve if we only want it to fade in once
                // observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const fadeElements = document.querySelectorAll('.fade-up');
    fadeElements.forEach(el => fadeObsever.observe(el));
});
