<?php

if ( ! function_exists('tonik_nav_register') ) {
    /**
     * Register navigation
     *
     * @return void
     */
    function tonik_nav_register() {
        register_nav_menus(array(
            'top_nav' => __('Top Nav', 'tonik'),
            'bottom_nav' => __('Bottom Nav', 'tonik')
        ));
    }
}

add_action( 'after_setup_theme', 'tonik_nav_register' );
