<?php
/**
 * Main Functions File.
 *
 * @package Byte Ki Duniya
*/

// Define CONSTANT for plugin directory url.
if ( ! defined( 'THEME_DIR_URL' ) ) {
    define( 'THEME_DIR_URL', get_template_directory_uri() );
}

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

/************** Function using for adding styles and scripts links **************/
function bkd_enqueue_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'Font-Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js' );
    wp_enqueue_style( 'Google-Fonts-1', 'https://fonts.googleapis.com/css?family=Montserrat:400,700' );
    wp_enqueue_style( 'Google-Fonts-2', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' );

    wp_enqueue_script( 'script', THEME_DIR_URL . '/assets/js/script.js' );
    wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' );
    wp_enqueue_script( 'Popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js' );
    wp_enqueue_script( 'Bootstrap-min', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js' );
    wp_enqueue_script( 'Bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' );

}
add_action( 'wp_enqueue_scripts', 'bkd_enqueue_scripts' );

require_once 'inc/custom-post-types.php';

?>