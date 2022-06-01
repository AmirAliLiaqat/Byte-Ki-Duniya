<?php

/************** Function using for adding theme supports **************/
function bkd_theme_setup() {
    
    add_theme_support( 'custom-logo' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'automatic-feed-links' );
    
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'bytekiduniya' )
    ) );
}
add_action( 'after_setup_theme', 'bkd_theme_setup' );

?>