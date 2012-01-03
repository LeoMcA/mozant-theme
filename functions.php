<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
    	'id'          => 'sidebar',
		'name'        => __( 'Sidebar' ),
		'description' => __( 'This sidebar is at the side of the page.' ),
        'before_widget' => '<div class="sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
    	'id'          => 'sidebar-footer',
		'name'        => __( 'Footer' ),
		'description' => __( 'This sidebar is at the bottom of the page in the footer.' ),
        'before_widget' => '<div class="grid_2">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
add_theme_support( 'automatic-feed-links' );
if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'primary', 'Primary Menu' );
}
function page_menu_awesome(){
    ?><ul><li><a href="<?php echo get_option("home"); ?>">Home</a></li><?php
    wp_list_pages( array( "depth" => 1, "title_li" => "", "link_before" => "", "link_after" => "" ) );?></ul><?php
}
?>