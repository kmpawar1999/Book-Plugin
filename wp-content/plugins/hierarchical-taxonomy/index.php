<?php
/*
* Plugin Name: Book Category Taxonomy
* Description: This Plugin will define new Book Category Taxonomy.
* Version: 1.0
*/

function wporg_register_taxonomy_book_category() {
	 $labels = array(
		 'name'              => _x( 'Books Category', 'taxonomy general name' ),
		 'singular_name'     => _x( 'Book Category', 'taxonomy singular name' ),
		 'search_items'      => __( 'Search Books' ),
		 'all_items'         => __( 'All Books' ),
		 'parent_item'       => __( 'Parent Book' ),
		 'parent_item_colon' => __( 'Parent Book:' ),
		 'edit_item'         => __( 'Edit Book' ),
		 'update_item'       => __( 'Update Book' ),
		 'add_new_item'      => __( 'Add New Book' ),
		 'new_item_name'     => __( 'New Book Name' ),
		 'menu_name'         => __( 'Books Category' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
		 'rewrite'           => [ 'slug' => 'book' ],
	 );
	 register_taxonomy( 'book', [ 'wporg_book' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_book_category' );

?>