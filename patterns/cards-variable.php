<?php
/**
 * Title: Cards variable
 *  Slug: blankone/cards-variable
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"5vh","right":"5vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:60px;padding-right:5vh;padding-bottom:60px;padding-left:5vh"><!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center"></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"></p>
    <!-- /wp:paragraph -->

    <!-- wp:query {"queryId":16,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
    <div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

        <!-- wp:post-title {"isLink":true} /-->

        <!-- wp:post-excerpt /-->
        <!-- /wp:post-template --></div>
    <!-- /wp:query --></div>
<!-- /wp:group -->