<?php get_header(); ?>

    <main>
        <h1>Cette page n'existe pas !</h1>
        <p>
            <a href="<?php echo home_url( '/' ); ?>">Retournez à l'accueil</a> ou consultez les derniers articles.
        </p>
        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
    </main>

<?php get_footer(); ?>
