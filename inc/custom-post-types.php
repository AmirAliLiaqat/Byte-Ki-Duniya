<?php

/************** Function Adding custom post type for services **************/
function bkd_adding_services_section() {
    $args = array(
        'label' => 'Services',
        'description' => '',
        'menu_icon' => 'dashicons-edit-page',
        'menu_position' => 5,
        'public' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,
		'can_export' => true,
		'has_archive' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'taxonomies' => array(),
		'capability_type' => 'page',
    );

    register_post_type( 'services', $args );
}
add_action( 'init', 'bkd_adding_services_section' );

/************** Function Adding custom post type for portfolio **************/
function bkd_adding_portfolio_section() {
    $args = array(
        'label' => 'Portfolio',
        'description' => '',
        'menu_icon' => 'dashicons-external',
        'menu_position' => 5,
        'public' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,
		'can_export' => true,
		'has_archive' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
        'taxonomies' => array(),
		'capability_type' => 'page',
    );

    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'bkd_adding_portfolio_section' );

?>