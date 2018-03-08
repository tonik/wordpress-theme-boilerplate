<?php

    if (!function_exists('openinvest_register_styles')) {
        /**
         * Register styles
         *
         * @return void
         */
        function openinvest_register_styles() {
            wp_register_style('styles', get_template_directory_uri() . '/build/styles/style.css', array(), time());

            wp_enqueue_style('styles');
        }
    }

    add_action('wp_enqueue_scripts', 'openinvest_register_styles');
