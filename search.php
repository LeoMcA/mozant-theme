<?php get_header(); ?>
        <div class="container_12 archive">
            <div class="grid_9">
                <h1 class="title">Search results for: &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <article>
                    <header>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="title"><?php the_title(); ?></a>
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

                    <footer>
                        <ul>
                            <li><a href="<?php the_permalink(); ?>">Read more</a></li>
                        </ul>
                    </footer>
                </article>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
<?php get_footer(); ?>