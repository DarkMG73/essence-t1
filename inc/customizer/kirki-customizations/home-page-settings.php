<?php

/*
----------------------------
    
    Default Mods
    
----------------------------
*/   
function glassinteractive_customizer_default_homepage_mods( $wp_customize ) {

    $wp_customize->get_section( 'static_front_page'  )->title   = 'Home/Front Page';
    $wp_customize->get_section( 'static_front_page'  )->description   = '';
    $wp_customize->get_section( 'static_front_page'  )->priority   = 15;
    $wp_customize->get_control( 'show_on_front'  )->label   = 'Choose the Home or Front Page';
    $wp_customize->get_control( 'show_on_front'  )->priority   = 5;
    $wp_customize->get_control( 'show_on_front'  )->description   = 'We can choose what is displayed on the first page of this site. It can be a standard blog page with posts in reverse chronological order, or a fixed/static page. To set a static first page, we first need to create two pages. One will become the "Front" page with a custom-made display, and the other will be the "Home" page where the posts are displayed.';
    
}
add_action( 'customize_register', 'glassinteractive_customizer_default_homepage_mods' );


/*
----------------------------
    
     Intro Text
    
----------------------------
*/   
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'static_front_page_title_for_customizer',
	'section'     => 'static_front_page',
	'default'         => '<div class="intro-text customizer-divider">' . esc_html__(  'About This Section', 'essence-t1' ) . '</div>',
	'priority'    => 0,
] );

Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'static_front_page_intro_output_for_customizer',
	'section'     => 'static_front_page',
		'default'         => '<div class="intro-text"><p>' .esc_html__( 'Here we can define and adjust the "Home" and "Front" pages.', 'essence-t1' ) . '</p></div>',
	'priority'    => 0,
] );


/*
----------------------------
    
   Home Page Posts
    
----------------------------
*/  
	/* Enable Masonry Post FLow
	----------------------------*/  

    Kirki::add_field( 'glassinteractive_theme_config', [
        'type'        => 'switch',
        'settings'    => 'home_page_masonry_posts_enable_setting',
        'label'       => esc_html__( 'Masonry Post Flow', 'essence-t1' ),
        'description'    => esc_html__('The standard WordPress layout for posts is a single column. Our theme provides a powerful and effective masonry post flow to display the posts in multiple columns without unnecessary whitespace. This masonry post flow is turned on and off here.', 'essence-t1' ),
        'section'     => 'static_front_page',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Enabled', 'essence-t1' ),
            'off' => esc_html__( 'Disabled', 'essence-t1' ),
        ],
    ] );