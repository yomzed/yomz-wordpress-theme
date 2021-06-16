<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- favicon -->
    <!--
        FAVICON 

        META
        description
        og:site_name
        og:type (website|article)
        og:title
        og:description
        og:url
        og:image
        twitter:card
        twitter:title
        twitter:description
        twitter:url
        twitter:image
        twitter:site
        og:image:width
        og:image:height
        article:published_time
        article:modified_time
        article:tag


        SCHEMA

        RSS
     -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <?php if( is_home() || is_front_page() ) : ?>
            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
        <?php else : ?>
            <a class="site-title" href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a>
        <?php endif; ?>
    </header>
