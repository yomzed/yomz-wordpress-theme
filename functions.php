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
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'yomzpress',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'yomzpress_register_assets' );

// Ménage wp_head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');

// Retrait de la barre Admin
add_filter( 'show_admin_bar', '__return_false' );
