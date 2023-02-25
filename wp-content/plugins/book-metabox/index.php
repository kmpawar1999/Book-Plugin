<?php
/**
* Plugin Name: Book Meta Information
* Description: This plugin adds a custom meta box to save book meta information.
*/


function book_meta_information_meta_box() {
    add_meta_box( 'book_meta_information', 'Book Meta Information', 'book_meta_information_callback', 'wporg_book', 'normal', 'high' );
}

add_action( 'add_meta_boxes', 'book_meta_information_meta_box' );

function book_meta_information_callback( $post ) {
    wp_nonce_field( 'book_meta_information_save', 'book_meta_information_nonce' );

    $author = get_post_meta( $post->ID, 'book_author', true );
    $price = get_post_meta( $post->ID, 'book_price', true );
    $publisher = get_post_meta( $post->ID, 'book_publisher', true );
    $published_year = get_post_meta( $post->ID, 'book_published_year', true );
    $edition = get_post_meta( $post->ID, 'book_edition', true );
    $url = get_post_meta( $post->ID, 'book_url', true );

    ?>
<table>
    <tr>
        <th><label for="book_author">Author Name</label></th>
        <td><input type="text" name="book_author" id="book_author" value="<?php echo $author; ?>"></td>
    </tr>
    <tr>
        <th><label for="book_price">Price</label></th>
        <td><input type="text" name="book_price" id="book_price" value="<?php echo $price; ?>"></td>
    </tr>

    <tr>
        <th><label for="book_publisher">Publisher</label></th>
        <td><input type="text" name="book_publisher" id="book_publisher" value="<?php echo $publisher; ?>"></td>
    </tr>
    <tr>
        <th><label for="book_published_year">Published Year</label></th>
        <td><input type="text" name="book_published_year" id="book_published_year" value="<?php echo $published_year; ?>"></td>
    </tr>
    <tr>
        <th><label for="book_edition">Edition</label></th>
        <td><input type="text" name="book_edition" id="book_edition" value="<?php echo $edition; ?>"></td>
    </tr>
    <tr>
        <th><label for="book_url">URL</label></th>
        <td><input type="text" name="book_url" id="book_url" value="<?php echo $url; ?>"></td>
    </tr>

</div>
<?php


}

function book_meta_information_save( $post_id ) {
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
return;
}


if ( ! isset( $_POST['book_meta_information_nonce'] ) || ! wp_verify_nonce( $_POST['book_meta_information_nonce'], 'book_meta_information_save' ) ) {
    return;
}

if ( ! current_user_can( 'edit_book', $post_id ) ) {
    return;
}

if ( isset( $_POST['book_author'] ) ) {
    update_post_meta( $post_id, 'book_author', sanitize_text_field( $_POST['book_author'] ) );
}

if ( isset( $_POST['book_price'] ) ) {
    update_post_meta( $post_id, 'book_price', sanitize_text_field( $_POST['book_price'] ) );
}

if ( isset( $_POST['book_publisher'] ) ) {
    update_post_meta( $post_id, 'book_publisher', sanitize_text_field( $_POST['book_publisher'] ) );
}

if ( isset( $_POST['book_published_year'] ) ) {
    update_post_meta( $post_id, 'book_published_year', sanitize_text_field( $_POST['book_published_year'] ) );
}

if ( isset( $_POST['book_edition'] ) ) {
    update_post_meta( $post_id, 'book_edition', sanitize_text_field( $_POST['book_edition'] ) );
}

if ( isset( $_POST['book_url'] ) ) {
    update_post_meta( $post_id, 'book_url', sanitize_text_field( $_POST['book_url'] ) );
}

}

add_action( 'save_book', 'book_meta_information_save' );

?>