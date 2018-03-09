<?php

if ( ! function_exists( 'tonik_thumbnails_size' ) ) {
    /**
     * Set theme thumbnails sizes
     *
     * @return void
     */
    function tonik_thumbnails_size() {
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'post', 440, 310, true );
    }
}

add_action( 'after_setup_theme', 'tonik_thumbnails_size' );
