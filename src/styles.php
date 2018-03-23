<?php
/**
 * ------------------------------------------------------------------------
 * Theme's CSS Assets
 * ------------------------------------------------------------------------
 * This file is for registering your theme's stylesheets. In here you
 * should also deregister all unwanted assets which can be
 * shiped with various third-parity plugins.
 */

if ( ! function_exists( 'tonik_register_styles' ) ) {
	/**
	 * Registers theme's CSS styles.
	 *
	 * @return void
	 */
	function tonik_register_styles() {
		wp_enqueue_style( 'styles', get_template_directory_uri() . '/public/css/app.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'tonik_register_styles' );
