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

// Support RSS
add_theme_support( 'automatic-feed-links' );
add_filter( 'feed_links_show_comments_feed', '__return_false' );
function yomzpress_disable_postcomments_feed( $for_comments ) {
    return;
}
add_filter( 'post_comments_feed_link',  'yomzpress_disable_postcomments_feed' );

// Ajout des images mises en avant dans le RSS
function yomzpress_rss_post_thumbnail( $content ) {
    global $post;
    if( has_post_thumbnail( $post->ID ) ) {
        $content = '<p>' . get_the_post_thumbnail( $post->ID, 'thumbnail' ) . '</p>' . $content;
    }
    return $content;
}
add_filter('the_content_feed', 'yomzpress_rss_post_thumbnail');

// Retrait de la barre Admin
add_filter( 'show_admin_bar', '__return_false' );
