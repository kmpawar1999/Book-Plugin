<?php
/*
Plugin Name: Book Meta Information Custom DB Tables
Description: A plugin for Data Table in Database
*/
// add_action( 'init', function () {
//     MB_Custom_Table_API::create(
//         'my_custom_table',                // Custom table name.
//         [                                 // List of columns with data types.
//             'book_author' => 'TEXT NOT NULL',
//             'book_price'   => 'TEXT NOT NULL',
//             'book_publisher'   => 'VARCHAR(20) NOT NULL',
//             'book_published_year' => 'TEXT NOT NULL',
//             'book_edition' => 'TEXT NOT NULL',
//             'book_url' => 'TEXT NOT NULL',
//         ], 
//     );
// } );

function create_the_custom_table() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
	
    $table_name = $wpdb->prefix . 'bookmetdata';

    $sql = "CREATE TABLE " . $table_name . " (
	id int(11) NOT NULL AUTO_INCREMENT,
	book_author TEXT NOT NULL,
	book_price INT NOT NULL,
	book_publisher TEXT NOT NULL,
    book_published_year TEXT NOT NULL,
    book_edition TEXT NOT NULL,
    book_url TEXT NOT NULL,
	ip_address varchar(15),
	PRIMARY KEY  (id),
	KEY ip_address (ip_address)
    ) $charset_collate;";
 
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

register_activation_hook(__FILE__, 'create_the_custom_table');