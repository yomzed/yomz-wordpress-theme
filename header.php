<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- FAVICONS-->
        <link rel="icon" sizes="16x16" href="<?php theme_file_uri('/img/favicons/favicon-16x16.png'); ?>">
        <!-- <link rel="icon" sizes="32x32" href="/favicons/favicon-32x32.png">
        <link rel="icon" sizes="48x48" href="/favicons/favicon-48x48.png">
        <link rel="icon" sizes="128x128" href="/favicons/favicon-128x128.png">
        <link rel="icon" sizes="152x152" href="/favicons/favicon-152x152.png">
        <link rel="icon" sizes="167x167" href="/favicons/favicon-167x167.png">
        <link rel="icon" sizes="180x180" href="/favicons/favicon-180x180.png">
        <link rel="icon" sizes="192x192" href="/favicons/favicon-192x192.png">
        <link rel='mask-icon' href='/favicons/mask-icon.svg' color='#9400d3'> -->
    <!-- END FAVICONS-->
    <!-- favicon -->
    <!--
        FAVICON 

        META
        og:image:width
        og:image:height


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
