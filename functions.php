<?php
/**
 * This file adds functions to the theme for WordPress.
 *
 * @package Mu
 * @author  Audi Lu
 * @link    https://audilu.com/
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

define( 'MU_THEME_SLUG', 'mu-block-theme' );
define( 'MU_THEME_VERSION', '0.1.0' );
define( 'MU_THEME_DIR', trailingslashit( get_theme_file_path() ) );
define( 'MU_THEME_URI', trailingslashit( esc_url( get_stylesheet_directory_uri() ) ) );

add_action( 'after_setup_theme', 'mu_theme_setup' );
if ( ! function_exists( 'mu_theme_setup' ) ) {
    /**
     * 設定佈景支援的特色功能
     *
     * 因為這是 after_setup_theme 的 hook function，所以會在 init hook 之前就被執行，
     * 原因是設定佈景支援 (如: 精選圖片的特色功能)，必須早於 init hook。
     */
    function mu_theme_setup() {
		load_theme_textdomain( 'mu-block-theme', MU_THEME_DIR . 'languages' );

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_editor_style( array(
            'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css',
            MU_THEME_URI . 'style-editor.css',
		) );
		// // Disable loading core block inline styles.
		// add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// // Remove core block patterns.
		// remove_theme_support( 'core-block-patterns' );
    }
}

add_action( 'wp_enqueue_scripts', 'mu_theme_scripts_public' );
function mu_theme_scripts_public() {
    wp_enqueue_style(
        'bootstrap_style',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'
    );
    wp_enqueue_script(
        'bootstrap_scripts',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
    );

    wp_enqueue_style( 
        MU_THEME_SLUG, 
        MU_THEME_URI . 'style.css', 
        array('bootstrap_style'), 
        filemtime( MU_THEME_DIR . 'style.css' ),
        'all'
    );
}

// Include block styles.
require MU_THEME_DIR . 'inc/block-styles.php';

// Include block patterns.
require MU_THEME_DIR . 'inc/block-patterns.php';
