<!doctype html>
<html>
    <head>
        <title><?php bloginfo("name"); ?><?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
        <script src="<?php bloginfo("template_url"); ?>/js/jquery-1.5.1.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo("template_url"); ?>/js/jquery.orbit-1.2.3.min.js" type="text/javascript"></script>
        <?php wp_head(); ?>
    </head>
    <body>

        <header>
            <div class="container_12">
                <div class="grid_12">

                    <div class="tab">
                        <ul>
                            <?php wp_register("<li>", "</li><li>or</li>"); ?>
                            <li><?php wp_loginout(); ?></li>
                        </ul>
                        <a class="mozilla" href="http://www.mozilla.org/">visit mozilla</a>
                    </div>

                    <div class="logo">
                        <img src="<?php bloginfo("template_url"); ?>/img/mozilla_community_logo.svg">
                        <h1><?php bloginfo("name"); ?></h1>
                    </div>

                    <nav>
                        <ul>
                            <li><a href="<?php echo get_option("home"); ?>">Home</a></li>
                            <?php wp_list_pages( array( "depth" => 0, "title_li" => "", "link_before" => "", "link_after" => "" ) ); ?>
                        </ul>
                        <?php get_search_form(); ?>
                    </nav>

                </div>
            </div>
        </header>