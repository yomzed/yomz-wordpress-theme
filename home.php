<?php get_header(); ?>
    <main class="list-post">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <article class="list-post-article">
            <?php the_post_thumbnail( 'list-thumb', ['class' => 'list-post-thumbnail'] ); ?>
            <div>
                <h3>
                    <?php foreach ( get_the_category() as $category ) {
                        echo $category->cat_name;
                    } ?>
                </h3>
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time( 'd/m/y' ); ?></time>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
        </article>

	<?php endwhile; endif; ?>
        <aside class="list-post-pagination">
            <div class="nav-previous"><?php previous_posts_link( '<< Articles plus récents' ); ?></div>
            <div class="nav-next"><?php next_posts_link( 'Plus d\'articles >>' ); ?></div>
        </aside>
    </main>
<?php get_footer(); ?>
