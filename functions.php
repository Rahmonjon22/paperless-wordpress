<?php
if ( ! function_exists( 'paperless_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 1.0
	 *
	 * @return void
	 */
	function paperless_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'paperless_theme_support' );


/*---------------------------------------------------------------------------
Enqueue Styles
https://developer.wordpress.org/reference/functions/wp_enqueue_script/ 
---------------------------------------------------------------------------*/

if ( ! function_exists( 'paperless_styles' ) ) :


function paperless_styles(){
// Register Stylesheet
wp_enqueue_style('paperless-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
wp_enqueue_style('paperless-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css');
}
endif;

add_action( 'wp_enqueue_scripts', 'paperless_styles' );