<?php

/**************************** Field For Header Background Control ****************************/
Kirki::add_field( 'bkd_options', [
    'type'            => 'background',
    'settings'      => 'header_background_setting',
    'label'           => esc_html__( 'Header Background Control', 'kirki' ),
    'description' => esc_html__( 'Change the all site header background color', 'kirki' ),
    'section'       => 'menu_settings',
    'default'       => [
        'background-color'           => '#000',
    ],
    'transport' => 'refresh',
    'output'      => [
        [
            'element' => '#mainNav, #mainNav.navbar-shrink',
        ],
    ],
] );

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
            'element' => '.btn-primary, .timeline > li .timeline-image, #portfolio .portfolio-item .portfolio-link .portfolio-hover',
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

/**************************** Field For Newsletter Heading Text Control ****************************/
Kirki::add_field( 'bkd_options', [
    'type'    => 'text',
    'settings' => 'newsletter_heading',
    'label'    => esc_html__( 'Newsletter Heading', 'kirki' ),
    'section'  => 'newsletter_section',
    'default'  => esc_html__( 'Join our newsletter', 'kirki' ),
] );

/**************************** Field For Newsletter Paragraph Text Control ****************************/
Kirki::add_field( 'bkd_options', [
    'type'    => 'text',
    'settings' => 'newsletter_paragraph',
    'label'    => esc_html__( 'Newsletter Paragraph', 'kirki' ),
    'section'  => 'newsletter_section',
    'default'  => esc_html__( 'Subscribe to our newsletter to recieve exclusive offers, latest news and updated.', 'kirki' ),
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