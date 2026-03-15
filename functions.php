<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package petgrub
 * @since 1.0.0
 */

/**
 * petgrub Theme Support
 */
function petgrub_theme_support() {

	load_theme_textdomain( 'petgrub-lite', get_template_directory() . '/languages' );

	// Support Post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Support responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Support Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Support Editor Styles.
	add_editor_style( get_template_directory_uri() . '/assets/css/editor-styles.css' );
}
add_action( 'after_setup_theme', 'petgrub_theme_support' );


/**
 * Enqueue theme styles and scripts.
 */
require_once get_theme_file_path( 'includes/assets.php' );

/**
 * Pattern category register.
 */
require_once get_theme_file_path( 'includes/pattern-category.php' );
require_once get_theme_file_path( 'includes/omnipress-theme-notice/class-theme-notice.php' );

/**
 * Register Block Style
 */
 require_once get_theme_file_path( 'includes/block-style.php' );

 /**
 * Load TGMPA
 */
require get_parent_theme_file_path( '/includes/tgmpa/tgmpa.php' );

/**
 * Theme Skins
 */
require_once get_theme_file_path( 'includes/theme-skin.php' );
