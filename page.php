<?php get_header(); ?>
            <div class="grid_9">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <article>
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>

                    <?php the_content(""); ?>

                    <footer>
                        <ul>
                            <li></li><li></li><li></li><?php wp_link_pages( array(
                                'before'           => '<li>' . __('Pages:'),
                                'after'            => '</li>'
                            )); ?>
                            <li><?php edit_post_link("Edit"); ?></li>
                        </ul>
                    </footer>
                </article>

                <?php comments_template(); ?>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>
<?php get_footer(); ?>