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
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
        </article>

	<?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
