<?php
/*
* Plugin Name: Book Tag Taxonomy
* Description: This Plugin will define new Book Tag Taxonomy.
* Version: 1.0
*/

function wporg_register_taxonomy_book_tags() {
	 $labels = array(
		 'name'              => _x( 'Books Tags', 'taxonomy general name' ),
		 'singular_name'     => _x( 'Book Tag', 'taxonomy singular name' ),
		 'search_items'      => __( 'Search Book Tag' ),
		 'all_items'         => __( 'All Book Tags' ),
		 'parent_item'       => __( 'Parent Book Tag' ),
		 'parent_item_colon' => __( 'Parent Book Tag:' ),
		 'edit_item'         => __( 'Edit Book Tag' ),
		 'update_item'       => __( 'Update Book Tag' ),
		 'add_new_item'      => __( 'Add New Book Tag' ),
		 'new_item_name'     => __( 'New Book Tag Name' ),
		 'menu_name'         => __( 'Books Tags' ),
	 );
	 $args   = array(
		 'hierarchical'      => false, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
		 'rewrite'           => [ 'slug' => 'tag' ],
	 );
	 register_taxonomy( 'tag', [ 'wporg_book' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_book_tags' );

?>