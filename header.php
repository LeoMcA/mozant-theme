<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php bloginfo("name"); ?><?php wp_title(); ?></title>
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
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

                    <a class="logo" href="<?php echo home_url(); ?>">
                        <img src="<?php bloginfo("template_url"); ?>/img/mozilla_antarctica_logo.svg">
                        <h1><?php bloginfo("name"); ?></h1>
                    </a>

                    <nav>
                        <?php wp_nav_menu( array(
                            'container'       => false,
                            'menu_class'      => false,
                            'fallback_cb'     => 'page_menu_awesome',
                            'depth'           => 1,
                            'walker'          => false
                        )); ?>
                        <?php get_search_form(); ?>
                    </nav>

                </div>
            </div>
        </header>
        
        <div class="container_12">