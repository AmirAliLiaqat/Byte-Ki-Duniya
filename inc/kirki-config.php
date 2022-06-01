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

Kirki::add_section( 'homepage_settings', array(
    'title'       => esc_html__( 'Homepage Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Homepage Layout', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-layout',
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
    'section'       => 'homepage_settings',
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
    'section'       => 'homepage_settings',
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