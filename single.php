<?php get_header(); ?>
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
                            <time><?php the_time(get_option('date_format')); ?></time>
                        </div>
                    </header>

                    <?php the_content(); ?>

                    <?php wp_link_pages(); ?>

                    <footer>
                        <ul>
                            <li><?php previous_post_link(); ?></li>
                            <li>Categories: <?php the_category(', '); ?></li>
                            <li><?php the_tags(); ?></li>
                            <?php wp_link_pages( array(
                                'before'           => '<li>' . __('Pages:'),
                                'after'            => '</li>'
                            )); ?>
                            <li><?php edit_post_link("Edit"); ?></li>
                            <li><?php next_post_link(); ?></li>
                        </ul>
                    </footer>
                </article>

                <?php comments_template(); ?>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>
<?php get_footer(); ?>