<?php
/**
 * ------------------------------------------------------------------------
 * Theme's JavaScript Assets
 * ------------------------------------------------------------------------
 * This file is for registering your theme's scripts. In here you
 * should also deregister all unwanted assets which can be
 * shiped with various third-parity plugins.
 */

if ( ! function_exists( 'tonik_register_scripts' ) ) {
    /**
     * Registers theme's JavaScript scripts.
     *
     * @return void
     */
    function tonik_register_scripts() {
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/public/js/main.js', [ 'jquery' ], null, true );
    }
}
add_action( 'wp_enqueue_scripts', 'tonik_register_scripts' );
