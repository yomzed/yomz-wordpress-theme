<?php
function yomzpress_meta_head() {
    // Default meta
    $description = get_bloginfo( 'description' );
    $meta = [
        'og:title' => get_bloginfo( 'name' ) . ' – ' . get_bloginfo( 'description' ),
        'og:site_name' => get_bloginfo( 'name' ),
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
        $description = get_the_excerpt();
        $meta['og:title'] = wp_strip_all_tags(get_the_title());
        $meta['og:description'] = get_the_excerpt();
        $meta['og:url'] = get_permalink();
        
        // Posts
        if( is_single() ) {
            $post = $GLOBALS['post'];
            $meta['og:type'] = 'article';
            $meta['twitter:card'] = 'summary_large_image';
            $meta['article:published_time'] = get_the_time('c');
            $meta['article:modified_time'] = get_the_modified_time('c');
            $meta['og:image'] = get_the_post_thumbnail_url($post, 'medium');
            $meta['twitter:image'] = get_the_post_thumbnail_url($post, 'medium');
        }
    }
    echo '    <meta name="description" content="' . $description . '">' . "\n";
    foreach( $meta as $property => $content ) {
        echo '    <meta property="' . $property . '" content="' . $content . '">' . "\n";
    }
}
add_action( 'wp_head', 'yomzpress_meta_head' );

function yomzpress_schema_head() {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Blog',
        'name' => get_bloginfo( 'name' ), 
        'description' => get_bloginfo( 'description' ),
        'url' => home_url( '/' ), 
        'publisher' => [
            '@type' => 'Organization',
            'name' => get_bloginfo( 'name' ),
            'url' => home_url( '/' ),
            'logo' => [
                '@type' => 'ImageObject',
                'url' => get_template_directory_uri() . '/img/favicons/favicon-192x192.png', 
                'width' => '192',
                'height' => '192'
            ]
        ], 
        'author' => [
            '@type' => 'Person',
            'name' => 'Yoan Martinez',
            'url' => home_url( '/' )
        ],
        'image' => [
            '@type' => 'ImageObject',
            'url' => get_template_directory_uri() . '/img/og-image.jpg', 
            'width' => '1200'
        ], 
        'mainEntityOfPage' => [
            '@type' => 'Blog',
            '@id' => home_url( '/' )
        ]
    ];

    if ( is_singular() ) {
        $schema['url'] = get_permalink();
        $schema['description'] = get_the_excerpt();
        $schema['name'] = wp_strip_all_tags(get_the_title());
        $schema['headline'] = wp_strip_all_tags(get_the_title());

        if ( is_single() ) {
            $schema['@type'] = 'Article';
            $schema['image'] = [
                '@type' => 'ImageObject',
                'url' => get_the_post_thumbnail_url($GLOBALS['post'], 'medium'), 
                'width' => '1200'
            ]; 
            $schema['datePublished'] = get_the_time('c');
            $schema['dateModified'] = get_the_modified_time('c');
        } else {
            $schema['@type'] = 'WebPage';
        }
    }

    echo '    <script type="application/ld+json">' . "\n";
    echo '        ' . json_encode($schema) . "\n";
    echo '    </script>' . "\n";
}

add_action( 'wp_head', 'yomzpress_schema_head' );
