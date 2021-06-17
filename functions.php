<?php 
if ( ! is_admin() ) {
    include( get_template_directory() . '/front-functions.php' );
}
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
add_image_size( 'list-thumb', 100, 0, false );
add_image_size( 'list-thumb-large', 300, 0, false );
add_image_size( 'post-block', 800, 0, false );
add_image_size( 'post-large', 1600, 0, false );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajout des images mises en avant dans le RSS
function rss_post_thumbnail( $content ) {
    global $post;
    if( has_post_thumbnail( $post->ID ) ) {
        $content = '<p>' . get_the_post_thumbnail( $post->ID, 'thumbnail' ) . '</p>' . $content;
    }
    return $content;
}
add_filter('the_content_feed', 'rss_post_thumbnail');


// function yomzpress_remove_menu_pages() {
// 	remove_menu_page( 'tools.php' );
//     remove_menu_page( 'edit-comments.php' );
// }
// add_action( 'admin_menu', 'yomzpress_remove_menu_pages' );

// Retrait de la barre Admin
add_filter( 'show_admin_bar', '__return_false' );
