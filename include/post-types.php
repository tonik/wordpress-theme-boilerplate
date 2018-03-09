<?php

if ( ! function_exists( 'tonik_custom_post_type' ) ) {
    /**
     * Set custom post types
     *
     * @return void
     */
    function tonik_custom_post_type() {
        $labels = [
            'name'                  => _x( 'Custom', 'Post Type General Name', 'tonik' ),
            'singular_name'         => _x( 'Custom', 'Post Type Singular Name', 'tonik' ),
            'menu_name'             => __( 'Custom', 'tonik' ),
            'name_admin_bar'        => __( 'Custom', 'tonik' ),
            'archives'              => __( 'Custom', 'tonik' ),
            'attributes'            => __( 'Custom', 'tonik' ),
            'parent_item_colon'     => __( 'Parent Item:', 'tonik' ),
            'all_items'             => __( 'Wszystkie posty', 'tonik' ),
            'add_new_item'          => __( 'Dodaj nowy post', 'tonik' ),
            'add_new'               => __( 'Dodaj nowy post', 'tonik' ),
            'new_item'              => __( 'Nowy post', 'tonik' ),
            'edit_item'             => __( 'Edytuj post', 'tonik' ),
            'update_item'           => __( 'Zaktualizuj post', 'tonik' ),
            'view_item'             => __( 'Zobacz post', 'tonik' ),
            'view_items'            => __( 'ZObacz posty', 'tonik' ),
            'search_items'          => __( 'Wyszukaj posty', 'tonik' ),
            'not_found'             => __( 'Nie znaleziono', 'tonik' ),
            'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'tonik' ),
            'featured_image'        => __( 'Obrazek wyróżniający', 'tonik' ),
            'set_featured_image'    => __( 'Ustaw obrazek wyróżniający', 'tonik' ),
            'remove_featured_image' => __( 'Usuń obrazek wyróżniający', 'tonik' ),
            'use_featured_image'    => __( 'Użyj jako obrazek wyróżniający', 'tonik' ),
            'insert_into_item'      => __( 'Wstaw w post', 'tonik' ),
            'uploaded_to_this_item' => __( 'Załaduj do tego postu', 'tonik' ),
            'items_list'            => __( 'Lista postów', 'tonik' ),
            'items_list_navigation' => __( 'Nawigacja po postach', 'tonik' ),
            'filter_items_list'     => __( 'Filtruj posty', 'tonik' ),
        ];
        $args = [
            'label'                 => __( 'Custom', 'tonik' ),
            'description'           => __( 'Custom', 'tonik' ),
            'labels'                => $labels,
            'supports'              => ['title', 'editor', 'thumbnail', 'post-formats'],
            'taxonomies'            => array(),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-format-audio',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
        ];

        register_post_type( 'custom', $args );
    }
}

add_action( 'init', 'tonik_custom_post_type' );
