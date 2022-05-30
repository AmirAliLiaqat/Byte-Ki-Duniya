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
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
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
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
        'taxonomies' => array(),
		'capability_type' => 'page',
    );

    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'bkd_adding_portfolio_section' );

/************** Function Adding custom post type for portfolio-modals **************/
function bkd_adding_portfolio_modals_section() {
    $args = array(
        'label' => 'Portfolio Modals',
        'description' => '',
        'menu_icon' => 'dashicons-screenoptions',
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
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
        'taxonomies' => array(),
		'capability_type' => 'page',
    );

    register_post_type( 'portfolio-modals', $args );
}
add_action( 'init', 'bkd_adding_portfolio_modals_section' );

/************** Function Adding custom post type for team section **************/
function bkd_adding_team_section() {
    $args = array(
        'label' => 'Our Team',
        'description' => '',
        'menu_icon' => 'dashicons-businessman',
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
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
        'taxonomies' => array(),
		'capability_type' => 'page',
    );

    register_post_type( 'team', $args );
}
add_action( 'init', 'bkd_adding_team_section' );

/************** Function Adding custom post type for about section **************/
function bkd_adding_about_section() {
    $args = array(
        'label' => 'About Us',
        'description' => '',
        'menu_icon' => 'dashicons-format-gallery',
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
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
        'taxonomies' => array(),
		'capability_type' => 'page',
    );

    register_post_type( 'about', $args );
}
add_action( 'init', 'bkd_adding_about_section' );

/************** Function Adding custom post type for themes section **************/
function bkd_adding_themes_section() {
    $args = array(
        'label' => 'Themes',
        'description' => '',
        'menu_icon' => 'dashicons-schedule',
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
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
        'taxonomies' => array(),
		'capability_type' => 'page',
    );

    register_post_type( 'themes', $args );
}
add_action( 'init', 'bkd_adding_themes_section' );

?>