<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Navigations
 * ------------------------------------------------------------------------
 * This file is for registering your theme's custom navigation areas
 * where various menus can be assigned by site administrators.
 */

if ( ! function_exists( 'tonik_register_navigations' ) ) {
	/**
	 * Registers theme's navigation menus.
	 *
	 * @return void
	 */
	function tonik_register_navigations() {
		register_nav_menus( [
			'top'    => __( 'Top Navigation', 'tonik' ),
			'bottom' => __( 'Bottom Navigation', 'tonik' ),
		] );
	}
}
add_action( 'after_setup_theme', 'tonik_register_navigations' );
