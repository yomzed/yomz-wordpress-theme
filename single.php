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
        <aside class="single-post-navigation">
            <?php 
                $prev_post = get_adjacent_post( false, '', true);
                $next_post = get_adjacent_post( false, '', false );
            ?>
                <div class="former-post">
                    <?php if (!empty($prev_post)) : ?>
                        Article précédent&nbsp;:
                        <a href="<?php the_permalink($prev_post->ID); ?>" alt="<?php echo get_the_title($prev_post->ID); ?>"><span><?php echo get_the_title($prev_post->ID); ?></span></a>
                    <?php endif; ?>
                </div>

                <div class="next-post">
                    <?php if (!empty($next_post)) : ?>
                        Article suivant&nbsp;:
                        <a href="<?php the_permalink($next_post->ID); ?>" alt="<?php echo get_the_title($next_post->ID); ?>"><span><?php echo get_the_title($next_post->ID); ?></span></a>
                    <?php endif; ?>
                </div>
        </aside>
        <?php  
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
