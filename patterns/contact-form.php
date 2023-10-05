<?php
/**
 * Title: Contact form.
 *  Slug: blankone/contact-form
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:media-text {"align":"wide"} -->
    <div class="wp-block-media-text alignwide is-stacked-on-mobile">
        <figure class="wp-block-media-text__media"></figure>
        <div class="wp-block-media-text__content">
            <!-- wp:heading -->
            <h2 class="wp-block-heading"></h2>
            <!-- /wp:heading -->

            <!-- wp:jetpack/contact-form {"subject":"[CoderDojo Kinsale] Contact Form","style":{"spacing":{"padding":{"top":"16px","right":"16px","bottom":"16px","left":"16px"}}}} -->
            <div class="wp-block-jetpack-contact-form" style="padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px">
                <!-- wp:jetpack/field-name {"required":true,"requiredText":"(required)"} /-->

                <!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)"} /-->

                <!-- wp:jetpack/field-select {"label":"Subject","requiredText":"(required)","options":["Find a Dojo","Start a Dojo","Volunteer at a Dojo"],"toggleLabel":"Please select a subject"} /-->

                <!-- wp:jetpack/field-textarea {"label":"Message","requiredText":"(required)"} /-->

                <!-- wp:jetpack/button {"element":"button","text":"Send message","lock":{"remove":true}} /-->
            </div>
            <!-- /wp:jetpack/contact-form -->
        </div>
    </div>
    <!-- /wp:media-text -->
</div>
<!-- /wp:group -->
