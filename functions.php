<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
add_image_size( 'list-thumb', 100, 0, false );
add_image_size( 'post-block', 800, 0, false );
add_image_size( 'post-large', 1600, 0, false );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// function yomzpress_remove_menu_pages() {
// 	remove_menu_page( 'tools.php' );
//     remove_menu_page( 'edit-comments.php' );
// }
// add_action( 'admin_menu', 'yomzpress_remove_menu_pages' );

function yomzpress_register_assets() { 
    wp_enqueue_style( 
        'yomzpress',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
    // Retirer le CSS Gutenberg
    wp_dequeue_style( 'wp-block-library' );
    // Retirer les auto-embeds 
    wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_enqueue_scripts', 'yomzpress_register_assets' );

function yomzpress_meta_head() {
    // echo '<meta name="og:site_name" content="'. get_bloginfo('name') .'">';
    $meta = [
        'og:site_name' => get_bloginfo('name')
    ];
    if( is_single() ) {
        $post = $GLOBALS['post'];
        $meta['og:title'] = $post->post_title;
        $meta['og:description'] = $post->post_excerpt;
        $meta['og:url'] = get_permalink($post);
    } else {

    }
    foreach( $meta as $name => $content ) {
        echo '<meta name="' . $name . '" content="' . $content . '">';
    }
}
add_action( 'wp_head', 'yomzpress_meta_head' );

// Ménage wp_head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

// Retrait de la barre Admin
add_filter( 'show_admin_bar', '__return_false' );
