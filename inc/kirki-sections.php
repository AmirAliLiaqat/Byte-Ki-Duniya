<?php

/**************************** Adding config theme options ****************************/
Kirki::add_config( 'bkd_options', array(
    'capability' => 'edit_theme_options',
    'options_type' => 'theme_mod',
) );

/**************************** Panel For Homepage settings ****************************/
Kirki::add_panel( 'homepage_settings', array(
    'title'       => esc_html__( 'Homepage Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Homepage Layout', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-layout',
) );

/**************************** Section For Homepage Layout ****************************/
Kirki::add_section( 'layout', array(
    'title'       => esc_html__( 'Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Complete Home Page', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

/**************************** Section For Homepage Master Head Section ****************************/
Kirki::add_section( 'masterhead_section', array(
    'title'       => esc_html__( 'Master Head Section', 'kirki' ),
    'description' => esc_html__( 'Manage Master Head Section Text', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

/**************************** Section For Homepage Services Section ****************************/
Kirki::add_section( 'service_section', array(
    'title'       => esc_html__( 'Services Section', 'kirki' ),
    'description' => esc_html__( 'Manage Services Section Text', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

/**************************** Section For Homepage Portfolio Section ****************************/
Kirki::add_section( 'portfolio_section', array(
    'title'       => esc_html__( 'Portfolio Section', 'kirki' ),
    'description' => esc_html__( 'Manage Portfolio Section Text', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

/**************************** Section For Homepage About Section ****************************/
Kirki::add_section( 'about_section', array(
    'title'       => esc_html__( 'About Section', 'kirki' ),
    'description' => esc_html__( 'Manage About Section Text', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

/**************************** Section For Homepage Team Section ****************************/
Kirki::add_section( 'team_section', array(
    'title'       => esc_html__( 'Team Section', 'kirki' ),
    'description' => esc_html__( 'Manage Team Section Text', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

/**************************** Section For Homepage Newsletter Section ****************************/
Kirki::add_section( 'newsletter_section', array(
    'title'       => esc_html__( 'Newsletter Section', 'kirki' ),
    'description' => esc_html__( 'Manage Newsletter Section Text', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

/**************************** Section For Footer Settings ****************************/
Kirki::add_section( 'footer_settings', array(
    'title'       => esc_html__( 'Footer Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Footer Copyright Text', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-edit',
) );

?>