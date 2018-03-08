<?php

function tonik_custom_post_type() {

    $labels = [
        'name'                  => _x( 'Custom', 'Post Type General Name', 'tonik_b' ),
        'singular_name'         => _x( 'Custom', 'Post Type Singular Name', 'tonik_b' ),
        'menu_name'             => __( 'Custom', 'tonik_b' ),
        'name_admin_bar'        => __( 'Custom', 'tonik_b' ),
        'archives'              => __( 'Custom', 'tonik_b' ),
        'attributes'            => __( 'Custom', 'tonik_b' ),
        'parent_item_colon'     => __( 'Parent Item:', 'tonik_b' ),
        'all_items'             => __( 'Wszystkie posty', 'tonik_b' ),
        'add_new_item'          => __( 'Dodaj nowy post', 'tonik_b' ),
        'add_new'               => __( 'Dodaj nowy post', 'tonik_b' ),
        'new_item'              => __( 'Nowy post', 'tonik_b' ),
        'edit_item'             => __( 'Edytuj post', 'tonik_b' ),
        'update_item'           => __( 'Zaktualizuj post', 'tonik_b' ),
        'view_item'             => __( 'Zobacz post', 'tonik_b' ),
        'view_items'            => __( 'ZObacz posty', 'tonik_b' ),
        'search_items'          => __( 'Wyszukaj posty', 'tonik_b' ),
        'not_found'             => __( 'Nie znaleziono', 'tonik_b' ),
        'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'tonik_b' ),
        'featured_image'        => __( 'Obrazek wyróżniający', 'tonik_b' ),
        'set_featured_image'    => __( 'Ustaw obrazek wyróżniający', 'tonik_b' ),
        'remove_featured_image' => __( 'Usuń obrazek wyróżniający', 'tonik_b' ),
        'use_featured_image'    => __( 'Użyj jako obrazek wyróżniający', 'tonik_b' ),
        'insert_into_item'      => __( 'Wstaw w post', 'tonik_b' ),
        'uploaded_to_this_item' => __( 'Załaduj do tego postu', 'tonik_b' ),
        'items_list'            => __( 'Lista postów', 'tonik_b' ),
        'items_list_navigation' => __( 'Nawigacja po postach', 'tonik_b' ),
        'filter_items_list'     => __( 'Filtruj posty', 'tonik_b' ),
    ];
    $args = [
        'label'                 => __( 'Custom', 'tonik_b' ),
        'description'           => __( 'Custom', 'tonik_b' ),
        'labels'                => $labels,
        'supports'              => ['title', 'editor', 'thumbnail', 'post-formats'],
        'taxonomies'            => [],
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

add_action( 'init', 'tonik_custom_post_type', 0 );
