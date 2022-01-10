<?php
/**
 * Mu: Header default pattern
 *
 * @package Mu
 */

ob_start('html_minifier');
?>
<!-- wp:group {"className":"container"} -->
<div class="wp-block-group container">
    <!-- wp:group {"className":"row"} -->
    <div class="wp-block-group row">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"className":"col-md-6"} -->
            <div class="wp-block-column col-md-6">
                <!-- wp:site-title /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"col-md-6"} -->
            <div class="wp-block-column col-md-6">
                <!-- wp:navigation {"isResponsive":true} -->
                    <!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<?php
$content = ob_get_clean();
return array(
	'title'      => __( '[Mu] Header with site title, navigation.', MU_THEME_SLUG ),
	'categories' => array( 'mu-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => $content,
);
