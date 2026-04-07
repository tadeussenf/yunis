<?php
/**
 * Title: About Section
 * Slug: yunis/about-section
 * Categories: yunis
 * Description: "The Journey Within" about section with text and image gallery.
 */
?>
<!-- wp:group {"anchor":"about","className":"yunis-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group yunis-section" id="about">

    <!-- wp:heading {"textAlign":"center","className":"section-title"} -->
    <h2 class="wp-block-heading has-text-align-center section-title">The Journey Within</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Born from silence and the hum of the earth beneath bare feet. Every song is a meditation — a prayer woven from the rhythms of the road, the whispers of ancient forests, the heartbeat of community gathered in circle.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">This music doesn't ask you to listen. It asks you to feel.</p>
    <!-- /wp:paragraph -->

    <!-- wp:html -->
    <span class="separator"></span>
    <!-- /wp:html -->

    <!-- wp:html -->
    <div class="gallery">
        <img class="gallery-image" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photo_5440877095157437845_y.jpg' ) ); ?>" alt="Yunis portrait 1">
        <img class="gallery-image" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photo_5440877095157437846_y.jpg' ) ); ?>" alt="Yunis portrait 2">
        <img class="gallery-image" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photo_5440877095157437847_y.jpg' ) ); ?>" alt="Yunis portrait 3">
        <img class="gallery-image" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photo_5440877095157437848_y.jpg' ) ); ?>" alt="Yunis portrait 4">
    </div>
    <!-- /wp:html -->

</div>
<!-- /wp:group -->
