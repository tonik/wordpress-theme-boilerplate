<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Post Types
 * ------------------------------------------------------------------------
 * This file is for registering your theme post types. Custom post types
 * allow users to easily create and manage various types of content.
 */

if ( ! function_exists( 'tonik_register_book_post_type' ) ) {
	/**
	 * Registers a `book` custom post type.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function tonik_register_book_post_type() {
		register_post_type(
			'book', array(
				'public'      => true,
				'supports'    => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
				'description' => __( 'Collection of books.', 'tonik' ),
				'labels'      => array(
					'name'               => _x( 'Books', 'post type general name', 'tonik' ),
					'singular_name'      => _x( 'Book', 'post type singular name', 'tonik' ),
					'menu_name'          => _x( 'Books', 'admin menu', 'tonik' ),
					'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'tonik' ),
					'add_new'            => _x( 'Add New', 'book', 'tonik' ),
					'add_new_item'       => __( 'Add New Book', 'tonik' ),
					'new_item'           => __( 'New Book', 'tonik' ),
					'edit_item'          => __( 'Edit Book', 'tonik' ),
					'view_item'          => __( 'View Book', 'tonik' ),
					'all_items'          => __( 'All Books', 'tonik' ),
					'search_items'       => __( 'Search Books', 'tonik' ),
					'parent_item_colon'  => __( 'Parent Books: ', 'tonik' ),
					'not_found'          => __( 'No books found.', 'tonik' ),
					'not_found_in_trash' => __( 'No books found in Trash.', 'tonik' ),
				),
			)
		);
	}
}
add_action( 'init', 'tonik_register_book_post_type' );
