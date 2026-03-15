<?php

/**
 * petgrub: Block styles register *
 *
 * @package petgrub
 * @since petgrub 1.0.0
 */
function petgrub_register_block_styles() {
	$block_styles = array(
		array(
			'block' => 'core/separator',
			'name'  => 'dotted',
			'label' => esc_html__( 'Dotted', 'petgrub-lite' ),
		),
		array(
			'block' => 'core/image',
			'name'  => 'image-hover-zoom-effect',
			'label' => esc_html__( 'Zoom Effect', 'petgrub-lite' ),
		),
		array(
			'block' => 'core/image',
			'name'  => 'image-hover-slide-effect',
			'label' => esc_html__( 'Slide Effect', 'petgrub-lite' ),
		),
		array(
			'block' => 'core/image',
			'name'  => 'image-hover-rotate-effect',
			'label' => esc_html__( 'Rotate Effect', 'petgrub-lite' ),
		),
		array(
			'block' => 'core/image',
			'name'  => 'image-hover-shine-effect',
			'label' => esc_html__( 'Shine Effect', 'petgrub-lite' ),
		),
	);

	foreach ( $block_styles as $style ) {
		register_block_style(
			$style['block'],
			array(
				'name'  => $style['name'],
				'label' => $style['label'],
			)
		);
	}
}
add_action( 'init', 'petgrub_register_block_styles' );
