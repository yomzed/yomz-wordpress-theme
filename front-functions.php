<?php
function yomzpress_meta_head() {
    // Default meta
    $meta = [
        'og:title' => get_bloginfo( 'name' ) . '–' . get_bloginfo( 'description' ),
        'og:site_name' => get_bloginfo( 'name' ),
        'description' => get_bloginfo( 'description' ),
        'og:description' => get_bloginfo( 'description' ),
        'og:type' => 'website',
        'og:url' => home_url( '/' ),
        'og:image' => get_template_directory_uri() . '/img/og-image.jpg',
        'twitter:card' => 'summary',
        'twitter:site' => '@iomzed',
        'twitter:image' => get_template_directory_uri() . '/img/og-image.jpg'
    ];
    // Pages & Posts
    if( is_singular() ) {
        $meta['og:title'] = wp_strip_all_tags(get_the_title());
        $meta['description'] = get_the_excerpt();
        $meta['og:description'] = get_the_excerpt();
        $meta['og:url'] = get_permalink();
        
        // Posts
        if( is_single() ) {
            $meta['og:type'] = 'article';
            $meta['twitter:card'] = 'summary_large_image';
            $meta['article:published_time'] = get_the_time('c');
            $meta['article:modified_time'] = get_the_modified_time('c');
            $meta['og:image'] = get_the_post_thumbnail_url();
            $meta['twitter:image'] = get_the_post_thumbnail_url();
        }
    }
    foreach( $meta as $name => $content ) {
        echo '<meta name="' . $name . '" content="' . $content . '">' . "\n";
    }
}
add_action( 'wp_head', 'yomzpress_meta_head' );
