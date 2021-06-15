<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
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
