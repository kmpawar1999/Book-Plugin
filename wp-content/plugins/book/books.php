<?php
/*
 * Plugin Name: Books Custom Post Type
 * Description: This Plugin will define new custom post type.
 */
?> 
<?php
// Register Custom Post Type
function wporg_custom_post_type() {
	register_post_type('wporg_book',
		array(
			'labels'      => array(
				'name'          => __('Books', 'textdomain'),
				'singular_name' => __('Book', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
				'rewrite'     => array( 'slug' => 'books' ), // my custom slug
		)
	);
}
add_action('init', 'wporg_custom_post_type');

?>