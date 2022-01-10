<?php
/**
 * Mu: Call-to-action pattern with button
 *
 * @package Mu
 */

ob_start('html_minifier');
?>
<!-- wp:group {"tagName":"section", "className":"container"} -->
<section class="wp-block-group container">
    <!-- wp:group {"className":"row"} -->
    <div class="wp-block-group row">
        <!-- wp:columns {"className":"align-items-center"} -->
        <div class="wp-block-columns align-items-center">
            <!-- wp:column {"className":"col-md-8"} -->
            <div class="wp-block-column col-md-8">
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"className":"is-style-no-margin","fontSize":"large"} -->
                    <p class="is-style-no-margin has-large-font-size" style="line-height:1.5">Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.
                    </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"className":"col-md-4"} -->
            <div class="wp-block-column col-md-4">
                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"style":{"spacing":{"padding":{"top":"15px","right":"25px","bottom":"15px","left":"25px"}},"border":{"radius":"0px"}},"className":"is-style-fill btn"} -->
                    <div class="wp-block-button is-style-fill btn">
                        <a class="wp-block-button__link" style="border-radius:0px;padding-top:15px;padding-right:25px;padding-bottom:15px;padding-left:25px">Call to Action
                        </a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->

<?php
$content = ob_get_clean();
return array(
	'title'      => __( '[Mu] Call to action.', MU_THEME_SLUG ),
	'categories' => array( 'mu-call-to-action' ),
	'content'    => $content,
);
