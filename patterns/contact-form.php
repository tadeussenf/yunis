<?php
/**
 * Title: Contact Form Section
 * Slug: yunis/contact-form
 * Categories: yunis
 * Description: Contact section with terracotta background, wave divider, and form.
 */
?>
<!-- wp:html -->
<section class="yunis-contact-section" id="contact">
    <div class="wave-top">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#FDFBF7" fill-opacity="1" d="M0,160L48,170.7C96,181,192,203,288,208C384,213,480,203,576,192C672,181,768,171,864,181.3C960,192,1056,224,1152,213.3C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>

    <h2 class="section-title">Get in Touch</h2>
    <p class="section-subtitle">let's connect</p>

    <!-- Replace this form with a Contact Form 7 or WPForms shortcode for full functionality -->
    <form class="contact-form">
        <div class="form-group">
            <input type="text" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
            <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn-primary form-submit">Send Message</button>
    </form>
</section>
<!-- /wp:html -->
