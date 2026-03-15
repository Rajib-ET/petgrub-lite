<?php
/**
 * petgrub-lite: Block Patterns *
 *
 * @package petgrub-lite
 * @since petgrub-lite 1.0.0
 */

add_action( 'init', 'petgrub_remove_core_block_patterns', 9 );
/**
 * Removes core block patterns.
 *
 * @since petgrub-lite 1.0.0
 *
 * @return void
 */
function petgrub_remove_core_block_patterns() {
	remove_theme_support( 'core-block-patterns' );
}

/**
 * Registers block patterns and categories. *
 *
 * @since petgrub-lite 1.0.0
 */
function petgrub_register_block_patterns() {
	$block_pattern_categories = array(
		'petgrub-lite' => array( 'label' => __( 'petgrub-lite', 'petgrub-lite' ) ),
	);

	$block_pattern_categories = apply_filters( 'petgrub_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'petgrub_register_block_patterns', 8 );
