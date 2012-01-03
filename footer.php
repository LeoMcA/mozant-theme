            <div class="grid_3">

                <?php dynamic_sidebar('sidebar'); ?>

            </div>
            <div class="clear"></div>
        </div>
        <footer>
            <div class="container_12">
                <div class="grid_3 legal_notice">
                    <img src="<?php bloginfo("template_url"); ?>/img/mozilla_community_logo_white.svg">
                    Except where otherwise noted, content on this site is licensed under the <a href="#">Creative Commons Attribution Share-Alike License v3.0</a> or any later version.
                </div>
                <?php dynamic_sidebar('sidebar-footer'); ?>
            </div>
        </footer>
    <?php wp_footer(); ?>
    </body>
</html>