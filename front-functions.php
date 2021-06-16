<?php
function yomzpress_meta_head() {
    // echo '<meta name="og:site_name" content="'. get_bloginfo('name') .'">';
    $meta = [
        'og:title' => wp_title( '–', false ),
        'og:site_name' => get_bloginfo( 'name' ),
        'description' => get_bloginfo( 'description' ),
        'og:description' => get_bloginfo( 'description' ),
        'og:type' => 'website',
        'og:url' => home_url( '/' )
    ];
    if( is_single() ) {
        $post = $GLOBALS['post'];
        $meta['og:title'] = wp_strip_all_tags(get_the_title());
        $meta['description'] = get_the_excerpt();
        $meta['og:description'] = get_the_excerpt();
        $meta['og:url'] = get_permalink();
        $meta['og:type'] = 'article';
    }
    foreach( $meta as $name => $content ) {
        echo '<meta name="' . $name . '" content="' . $content . '">';
    }
}
add_action( 'wp_head', 'yomzpress_meta_head' );
