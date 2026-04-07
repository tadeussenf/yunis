<?php
/**
 * Title: Service Page Content
 * Slug: yunis/service-page-content
 * Categories: yunis
 * Description: Reusable content block for service sub-pages with heading, text, and CTA.
 */
?>
<!-- wp:group {"className":"yunis-service-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group yunis-service-content">

    <!-- wp:post-title {"textAlign":"center","className":"section-title"} /-->

    <!-- wp:post-content {"layout":{"type":"constrained","contentSize":"600px"}} /-->

    <!-- wp:html -->
    <div class="yunis-service-cta">
        <a href="/#contact" class="btn-primary">Get in Touch</a>
    </div>
    <!-- /wp:html -->

</div>
<!-- /wp:group -->
