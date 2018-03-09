<?php

if ( ! function_exists( 'tonik_register_scripts' ) ) {
    /**
     * Register scripts
     *
     * @return void
     */
    function tonik_register_scripts() {
        wp_register_script('scripts', get_template_directory_uri() . '/public/js/main.js', 'jquery', null, true);

        wp_enqueue_script('scripts');
    }
}

add_action( 'wp_enqueue_scripts', 'tonik_register_scripts' );
