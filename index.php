<?php get_header(); ?>
            <div class="grid_9">
            
            <?php if (is_category()) { ?>
                <h1 class="title"><?php single_cat_title() ?></h1>
            <?php } elseif (is_tag()) { ?>
                <h1 class="title">Posts tagged with &ldquo;<?php single_tag_title() ?>&rdquo;</h1>
            <?php } elseif (is_day()) { ?>
                <h1 class="title"><?php the_time(get_option('date_format')); ?></h1>
            <?php } elseif (is_month()) { ?>
                <h1 class="title"><?php the_time("F Y") ?></h1>
            <?php } elseif (is_year()) { ?>
                <h1 class="title"><?php the_time("Y") ?></h1>
            <?php } elseif (is_author()) {
                $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
                <h1 class="title">Posts by <?php echo $curauth->display_name; ?></h1>
                <style>header address { display: none; }</style>
            <?php } elseif (is_search()) { ?>
                <h1 class="title">Search results for &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
                <?php global $wp_query;
                $total_results = $wp_query->found_posts;
                if ($total_results == 0) { ?>
                    <p>Uh-oh... There's no results. :(</p>
            <?php }} else {?>
                <style>article header a.title { font-size: 39px; line-height: 48px; }</style>
            <?php } ?>

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <article class="teaser">
                    <header>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="title"><?php the_title(); ?></a>
                        <address>
                            <?php echo get_avatar( get_the_author_meta("user_email"), "48", "" ); ?>
                            <div>Written by: <?php the_author_posts_link(); ?></div>
                        </address>
                        <time><?php the_time(get_option('date_format')); ?></time>
                    </header>

                    <?php the_content(""); ?>

                    <footer>
                        <ul>
                            <li>Categories: <?php the_category(', '); ?></li>
                            <li><?php the_tags(); ?></li><li></li>
                            <li><a href="<?php echo get_permalink(); ?>#comments"><?php comments_number(); ?></a></li>
                            <?php wp_link_pages( array(
                                'before'           => '<li>' . __('Pages:'),
                                'after'            => '</li>'
                            )); ?>
                            <li><?php edit_post_link("Edit"); ?></li>
                            <li><a href="<?php the_permalink(); ?>">Read more</a></li>
                        </ul>
                    </footer>
                </article>
                <?php endwhile; ?>
                <?php endif; ?>

                <footer>
                    <ul>
                        <li><?php previous_posts_link('« Newer Entries'); ?></li>
                        <li><?php next_posts_link('Older Entries »'); ?></li>
                    </ul>
                </footer>
            </div>
<?php get_footer(); ?>