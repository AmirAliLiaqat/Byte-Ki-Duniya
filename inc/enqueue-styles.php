<?php

/************** Function using for adding styles and scripts links **************/
function bkd_enqueue_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'Google-Fonts-1', 'https://fonts.googleapis.com/css?family=Montserrat:400,700' );
    wp_enqueue_style( 'Google-Fonts-2', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' );
    
    wp_enqueue_script( 'script', THEME_DIR_URL . '/assets/js/script.js' );
    wp_enqueue_script( 'Font-Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js' );
    wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' );
    wp_enqueue_script( 'Popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js' );
    wp_enqueue_script( 'Bootstrap-min', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js' );
    wp_enqueue_script( 'Bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' );

}
add_action( 'wp_enqueue_scripts', 'bkd_enqueue_scripts' );

?>