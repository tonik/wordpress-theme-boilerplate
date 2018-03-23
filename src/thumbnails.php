<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Custom Image Sizes
 * ------------------------------------------------------------------------
 * This file is for registering custom image
 * sizes for using as for thumbnails.
 */

if ( ! function_exists( 'tonik_register_thumbnails' ) ) {
	/**
	 * Registers theme's additional thumbnail sizes.
	 *
	 * @return void
	 */
	function tonik_register_thumbnails() {
		add_image_size( 'custom-thumbnail', 800, 600, true );
	}
}
add_action( 'after_setup_theme', 'tonik_register_thumbnails' );
