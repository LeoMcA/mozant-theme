<?php get_header(); ?>
        <div class="container_12 home">
            <div class="grid_12 featured">
                <div>
                    <img src="img/orbit/overflow.jpg" alt="Overflow: Hidden No More">
                    <img src="img/orbit/captions.jpg"  alt="HTML Captions" data-caption="#htmlCaption">
                    <img src="img/orbit/features.jpg" alt="and more features">
                    <img src="img/orbit/coffee.jpg" alt="Coffee">
                </div>
                <span class="orbit-caption" id="htmlCaption">I'm A Badass Caption</span>
            </div>

            <div class="grid_9">

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