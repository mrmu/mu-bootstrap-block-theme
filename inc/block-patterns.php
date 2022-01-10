<?php
/**
 * Mu: Register Block Patterns
 *
 * @since Mu 0.1.0
 */

if ( !function_exists('html_minifier') ){
    function html_minifier($code) {
        $search = array(
            // Remove whitespaces after tags
            '/\>[^\S ]+/s',
            // Remove whitespaces before tags
            '/[^\S ]+\</s',
            // Remove multiple whitespace sequences
            '/(\s)+/s',
        );
        $replace = array('>', '<', '\\1');
        $code = preg_replace($search, $replace, $code);
        return $code;
    }
}

add_action( 'init', 'mu_register_block_patterns', 9 );
function mu_register_block_patterns(){
    // 註冊 Pattern Category Type
    if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 
            'mu', 
            array( 
                'label' => __( 'Mu', MU_THEME_SLUG ) 
            ) 
        );
	}

    // 註冊 Pattern Category
	$block_pattern_categories = array(
		'mu-header' => array(
			'label' => __( 'Header', MU_THEME_SLUG ),
			'categoryTypes' => array( 'mu' ),
		),
		'mu-call-to-action' => array(
			'label' => __( 'Call-to-Action', MU_THEME_SLUG ),
			'categoryTypes' => array( 'mu' ),
		),
    );

    $block_pattern_categories = apply_filters( 'mu_block_pattern_categories', $block_pattern_categories );
	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

    // 註冊 Pattern
	$block_patterns = array(
        'header/header-default',
		'call-to-action/call-to-action-button',
    );

	$block_patterns = apply_filters( 'mu_block_patterns', $block_patterns );
	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'mu/' . $block_pattern,
			require get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' )
		);
	}

}