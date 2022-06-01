<?php
/**
 * Customizer Config.
 *
 * @package Byte Ki Duniya
*/
// dashicons-admin-tools
// dashicons-editor-spellcheck
// dashicons-edit
// dashicons-layout

Kirki::add_config( 'bkd_options', array(
    'capability' => 'edit_theme_options',
    'options_type' => 'theme_mod',
) );

Kirki::add_panel( 'homepage_settings', array(
    'title'       => esc_html__( 'Homepage Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Homepage Layout', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-layout',
) );

Kirki::add_section( 'layout', array(
    'title'       => esc_html__( 'Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Complete Home Page', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

Kirki::add_section( 'masterhead_section', array(
    'title'       => esc_html__( 'Master Head Section', 'kirki' ),
    'description' => esc_html__( 'Manage Master Head Section Text', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

Kirki::add_section( 'service_section', array(
    'title'       => esc_html__( 'Services Section', 'kirki' ),
    'description' => esc_html__( 'Manage Services Section Text', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

Kirki::add_section( 'portfolio_section', array(
    'title'       => esc_html__( 'Portfolio Section', 'kirki' ),
    'description' => esc_html__( 'Manage Portfolio Section Text', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

Kirki::add_section( 'about_section', array(
    'title'       => esc_html__( 'About Section', 'kirki' ),
    'description' => esc_html__( 'Manage About Section Text', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

Kirki::add_section( 'team_section', array(
    'title'       => esc_html__( 'Team Section', 'kirki' ),
    'description' => esc_html__( 'Manage Team Section Text', 'kirki' ),
    'panel'       => 'homepage_settings',
) );

Kirki::add_section( 'footer_settings', array(
    'title'       => esc_html__( 'Footer Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Footer Copyright Text', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-edit',
) );

/**************************** Field For Button Background Control ****************************/
Kirki::add_field( 'bkd_options', [
    'type'            => 'background',
    'settings'      => 'button_background_setting',
    'label'           => esc_html__( 'Button Background Control', 'kirki' ),
    'description' => esc_html__( 'Change the all site buttons background color', 'kirki' ),
    'section'       => 'layout',
    'default'       => [
        'background-color'           => '#ffc800',
    ],
    'transport' => 'refresh',
    'output'      => [
        [
            'element' => '.btn-primary, .svg-inline--fa.fa-stack-2x',
        ],
    ],
] );

/**************************** Field For Button Hover Background Control ****************************/
Kirki::add_field( 'bkd_options', [
    'type'            => 'background',
    'settings'      => 'button_hover_background_setting',
    'label'           => esc_html__( 'Button Hover Color Control', 'kirki' ),
    'description' => esc_html__( 'Change the all site buttons hover color', 'kirki' ),
    'section'       => 'layout',
    'default'       => [
        'background-color'           => '#d9aa00',
    ],
    'transport' => 'refresh',
    'output'      => [
        [
            'element' => '.btn-primary:hover',
        ],
    ],
] );

/**************************** Field For Master Head Div 1 Text Control ****************************/
Kirki::add_field( 'bkd_options', [
    'type'    => 'text',
    'settings' => 'masterhead_div_1_text',
    'label'    => esc_html__( 'Master Head Div 1', 'kirki' ),
    'section'  => 'masterhead_section',
    'default'  => esc_html__( 'Welcome To Byte Ki Duniya', 'kirki' ),
    'priority' => 10,
] );

/**************************** Field For Master Head Div 2 Text Control ****************************/
Kirki::add_field( 'bkd_options', [
    'type'    => 'text',
    'settings' => 'masterhead_div_2_text',
    'label'    => esc_html__( 'Master Head Div 2', 'kirki' ),
    'section'  => 'masterhead_section',
    'default'  => esc_html__( 'It`s Nice To Meet You', 'kirki' ),
    'priority' => 10,
] );

/**************************** Field For Services Section Text Control ****************************/
Kirki::add_field( 'bkd_options', [
    'type'    => 'text',
    'settings' => 'services_section_text',
    'label'    => esc_html__( 'Services section text control', 'kirki' ),
    'section'  => 'service_section',
    'default'  => esc_html__( 'This is description for services section.', 'kirki' ),
] );

/**************************** Field For Portfolio Section Text Control ****************************/
Kirki::add_field( 'bkd_options', [
    'type'    => 'text',
    'settings' => 'portfolio_section_text',
    'label'    => esc_html__( 'Portfolio section text control', 'kirki' ),
    'section'  => 'portfolio_section',
    'default'  => esc_html__( 'This is description for portfolio section.', 'kirki' ),
] );

/**************************** Field For About Section Text Control ****************************/
Kirki::add_field( 'bkd_options', [
    'type'    => 'text',
    'settings' => 'about_section_text',
    'label'    => esc_html__( 'About section text control', 'kirki' ),
    'section'  => 'about_section',
    'default'  => esc_html__( 'This is description for about section.', 'kirki' ),
] );

/**************************** Field For Team Section Text Control ****************************/
Kirki::add_field( 'bkd_options', [
    'type'    => 'text',
    'settings' => 'team_section_text',
    'label'    => esc_html__( 'Team section text control', 'kirki' ),
    'section'  => 'team_section',
    'default'  => esc_html__( '', 'kirki' ),
] );

/**************************** Field For Footer Copyright Text Control ****************************/
Kirki::add_field( 'bkd_options', [
    'type'    => 'text',
    'settings' => 'footer_copyright_text',
    'label'    => esc_html__( 'Footer Copyright', 'kirki' ),
    'section'  => 'footer_settings',
    'default'  => esc_html__( '© Copyright 2021. Theme by ByteBunch.', 'kirki' ),
    'priority' => 10,
] );

?>