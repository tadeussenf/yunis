<?php
/**
 * Title: Activities Grid
 * Slug: yunis/activities-grid
 * Categories: yunis
 * Description: Three-column grid of retreat/activity cards with decorative elements.
 */
?>
<!-- wp:html -->
<section class="yunis-section" id="activities" style="position:relative;">
    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/plant_branch_1775364605554.png' ) ); ?>" alt="" class="decoration plant-1">
    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/smudge_orange_1775364639186.png' ) ); ?>" alt="" class="decoration smudge-1">

    <h2 class="section-title">Learn &amp; Understand</h2>
    <p class="section-subtitle">Holistic workshops &amp; wellbeing activities</p>

    <div class="retreats-grid">
        <div class="retreat-card">
            <div class="icon-wrapper">
                <svg viewBox="0 0 50 50" fill="none" stroke="#8fa07a" stroke-width="2" stroke-linecap="round">
                    <circle cx="25" cy="20" r="12"></circle>
                    <path d="M25,32 L25,45"></path>
                    <path d="M18,38 L25,45 L32,38"></path>
                    <path d="M15,20 Q25,5 35,20"></path>
                </svg>
            </div>
            <h3>Music lessons</h3>
            <p class="desc">I am happy to share my experience with playing the guitar, handpan and flute</p>
            <a href="/music-lessons/" class="btn-primary">LEARN MORE</a>
        </div>

        <div class="retreat-card">
            <div class="icon-wrapper">
                <svg viewBox="0 0 50 50" fill="none" stroke="#c17c5a" stroke-width="1.2" stroke-linecap="round">
                    <path d="M25,40 Q10,30 10,20 Q10,10 25,15 Q40,10 40,20 Q40,30 25,40Z"></path>
                </svg>
            </div>
            <h3>Explore nature</h3>
            <p class="desc">Join me on a walk to find and learn about nature's own medicine</p>
            <a href="/explore-nature/" class="btn-primary">LEARN MORE</a>
        </div>

        <div class="retreat-card">
            <div class="icon-wrapper">
                <svg viewBox="0 0 50 50" fill="none" stroke="#dbb563" stroke-width="1.2" stroke-linecap="round">
                    <circle cx="25" cy="15" r="5"></circle>
                    <circle cx="15" cy="28" r="4"></circle>
                    <circle cx="35" cy="28" r="4"></circle>
                    <circle cx="10" cy="40" r="3.5"></circle>
                    <circle cx="25" cy="38" r="3.5"></circle>
                    <circle cx="40" cy="40" r="3.5"></circle>
                    <path d="M25,20 L15,24 M25,20 L35,24 M15,32 L10,36.5 M15,32 L25,34.5 M35,32 L25,34.5 M35,32 L40,36.5"></path>
                </svg>
            </div>
            <h3>Holistic consulting</h3>
            <p class="desc">Improve your sleep and physical wellbeing</p>
            <a href="/holistic-consulting/" class="btn-primary">LEARN MORE</a>
        </div>
    </div>
</section>
<!-- /wp:html -->
