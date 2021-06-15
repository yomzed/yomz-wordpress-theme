<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <main>
            <article class="main-article">
                <header>
                    <h2>
                        <?php foreach ( get_the_category() as $category ) {
                            echo $category->cat_name;
                        } ?>
                    </h2>
                    <h1><?php the_title(); ?></h1>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
                </header>
                <?php the_content(); ?>
            </article>
        </main>
        <aside></aside>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
