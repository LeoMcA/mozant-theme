<?php get_header(); ?>
        <div class="container_12">
            <div class="grid_9">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <article>
                    <header>
                        <h1><?php the_title(); ?></h1>
                        <address>
                            <?php echo get_avatar( get_the_author_meta("user_email"), "48", "" ); ?>
                            <div>Written by: <?php the_author_posts_link(); ?></div>
                        </address>
                        <div>
                            <time><?php the_time(get_option('date_format')); ?> at <?php the_time('g:i a'); ?></time>
                            <span class="tags">Categories: <?php the_category(', '); ?> <?php the_tags(); ?></span>
                        </div>
                    </header>

                    <?php the_content(""); ?>

                </article>

                <?php comments_template(); ?>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
<?php get_footer(); ?>