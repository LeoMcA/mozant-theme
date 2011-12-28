<?php get_header(); ?>
        <div class="container_12">
            <div class="grid_9">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <article>
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>

                    <?php the_content(""); ?>

                </article>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
<?php get_footer(); ?>