<?php

if ( ! function_exists( 'pstones_fresh_support' ) ) :
	function pstones_fresh_support()  {

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
	add_action( 'after_setup_theme', 'pstones_fresh_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function pstones_fresh_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'pstones-fresh-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'pstones_fresh_scripts' );
