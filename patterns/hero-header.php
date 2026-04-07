<?php
/**
 * Title: Hero Header
 * Slug: yunis/hero-header
 * Categories: yunis
 * Description: Parallax hero header with wave divider for the homepage.
 */
?>
<!-- wp:html -->
<header class="yunis-hero-header">
    <div class="parallax-bg layer-bg"></div>
    <div class="parallax-bg layer-fg"></div>

    <div style="flex:1;"></div>

    <div style="text-align:center; position:relative; z-index:2;">
        <h1 style="font-family:var(--wp--preset--font-family--heading);font-size:2.5rem;color:var(--wp--preset--color--olive);letter-spacing:6px;font-weight:500;">Yunis</h1>
        <p class="section-subtitle">songs gathered from the road</p>
    </div>

    <div style="flex:1;"></div>

    <div class="wave-bottom">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#FDFBF7" fill-opacity="1" d="M0,160L48,170.7C96,181,192,203,288,208C384,213,480,203,576,192C672,181,768,171,864,181.3C960,192,1056,224,1152,213.3C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</header>
<!-- /wp:html -->
