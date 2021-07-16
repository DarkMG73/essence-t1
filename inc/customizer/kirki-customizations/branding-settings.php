<?php
/*
----------------------------
    
    Default Mods
    
----------------------------
*/   
function glassinteractive_customizer_default_branding_mods( $wp_customize ) {

    $wp_customize->get_section( 'title_tagline'  )->title   = 'Branding';
	$wp_customize->get_section( 'title_tagline'  )->priority   = 5;
    $wp_customize->get_control( 'blogname'  )->priority   = 5;
    $wp_customize->get_control( 'blogdescription'  )->priority   = 5;
    $wp_customize->get_control( 'site_icon'  )->priority   = 8;
    $wp_customize->get_control( 'custom_logo'  )->priority   = 20;
	$wp_customize->get_control( 'custom_logo'  )->description   = 'A logo is highly recommended as it helps your audience easily and visually recognize and identify you or your business. This can be an official logo or, in the case of a blogger, even just initials. The recommended logo size is 512px x 512px but most sizes will work fine. A cropping tool is provided after you select the image. Round or Square are most common, but any shape will work. A sizing tool is provided below to bring the end size down to a more common 100px or so. There are other tools below including special tools for rounding the frame to match, if needed. ';
    
    $wp_customize->remove_control( 'display_header_text'  );
}
add_action( 'customize_register', 'glassinteractive_customizer_default_branding_mods' );


/*
----------------------------
    
     Intro Text
    
----------------------------
*/   
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'branding_title_for_customizer',
	'section'     => 'title_tagline',
	'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'essence-t1' ) . '</div>',
	'priority'    => 0,
] );

Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'brand_intro_output_for_customizer',
	'section'     => 'title_tagline',
		'default'         => '<div class="intro-text"><p>Here we can setup the basic branding for the site.<i><b>Note:</b></i> All font settings and site title in the page head area settings are found in the <b>Typography</b> section.</p></div>',
		'default'         => '<div class="intro-text"><p>Here we can setup the basic branding for the site. <i><b>Note:</b></i> All font settings, as well as the settings for the site title in the page head area, are found in the <b>Typography</b> section.</p></div>',
	'priority'    => 0,
] );


/*
----------------------------
    
    Site Title and Tagline
    
----------------------------
*/   
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'title_tagline_output_for_customizer',
	'section'     => 'title_tagline',
		'default'         => '<div class="customizer-divider">' . __( 'Title & Tagline', 'essence-t1' ) . '</div>',
	'priority'    => 2,
] );


/*
----------------------------
    
     Site Icon
    
----------------------------
*/   
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'icon_output_for_customizer',
	'section'     => 'title_tagline',
		'default'         => '<div class="customizer-divider">' . __( 'Site Icon', 'essence-t1' ) . '</div>',
	'priority'    => 7,
] );


/*
----------------------------
    
    Logo in Menu Bar
    
----------------------------
*/   

Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'logo_output_for_customizer',
	// 'label'       => esc_html__( 'This is the label', 'essence-t1' ), // optional
	'section'     => 'title_tagline',
		'default'         => '<div class="customizer-divider">' . __( 'Site Logo', 'essence-t1' ) . '</div>',
	'priority'    => 19,
] );

// Toggle visibility of the logo in the menu bar
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'logo_menubar_toggle_setting',
	'label'       => esc_html__( 'Show/Hide the logo in the Menu Bar', 'essence-t1' ),
	'section'     => 'title_tagline',
	'default'     => $generalThemeDefaults['branding']['show_logo'],
	'priority'    => 20,
] );

// Adjust the width of the logo in the menu bar
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'slider',
	'settings'    => 'menubar_logo_size_setting',
	'label'       => esc_html__( 'Logo size Adjustment.', 'essence-t1' ),
	'description'=>  esc_html__( 'Increase or decrease the logo size.', 'essence-t1' ),
	'section'     => 'title_tagline',
	'default'     => $generalThemeDefaults['branding']['menubar_width'],
	'choices'     => [
		'min'  => 0,
		'max'  => 300,
		'step' => 1,
	],
	'output'      => [
		[
			'element' => '#masthead .site-branding #custom-logo-wrap',
			'property' => 'width',
			'suffix' => 'px',
		],
	],
    'priority'    => 20,
	'transport'   => 'auto',
] );

// Adjust the shape of the logo container
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'slider',
	'settings'    => 'menubar_logo_container_shape_setting',
	'label'       => esc_html__( 'Logo Container Shape Adjustment.', 'essence-t1' ),
	'description'=>  esc_html__( 'Change the shape of the logo container. The purpose of this control is to allow for the logo container to better match the various round, square or rectangle logos. It is not needed to match it exactly, but just to generally allow the whitespace around the logo to be similar in shape.', 'essence-t1' ),
	'section'     => 'title_tagline',
	'default'     => $generalThemeDefaults['branding']['menubar_logo_cont_shape_adjustment'],
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	],
	'output'      => [
		[
			'element'   => '#masthead .site-branding #custom-logo-wrap',
			'property'  => 'border-radius',
			'prefix'    => '0 0 ',
			'suffix'    => 'px',
		],
	],
    'priority'    => 20,
	'transport'   => 'auto',
] );

// Adjust the vertical position of the logo container
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'slider',
	'settings'    => 'menubar_logo_container_vertical_setting',
	'label'       => esc_html__( 'Logo Container Vertical Adjustment.', 'essence-t1' ),
	'description'=>  esc_html__( 'Increase or decrease the position of the logo container. The purpose of this control is to allow for more versatile positioning of the logo container in relation to the menu bar. This becomes very helpful as the size of the logo changes.', 'essence-t1' ),
	'section'     => 'title_tagline',
	'default'     => $generalThemeDefaults['branding']['menubar_logo_cont_vertical_adjustment'],
	'choices'     => [
		'min'  => 0,
		'max'  => 150,
		'step' => 1,
	],
	'output'      => [
		[
			'element' => '#masthead .site-branding #custom-logo-wrap',
			'property' => 'top',
			'suffix' => 'px',
		],
	],
    'priority'    => 20,
	'transport'   => 'auto',
] );

// Adjust the logo padding in the menu bar
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'slider',
	'settings'    => 'menubar_logo_padding_setting',
	'label'       => esc_html__( 'Logo Padding Adjustment', 'essence-t1' ),
	'description'=>  esc_html__( 'Add or remove padding to the logo in the menu bar. NOTE: The logo can be move around inside this padding using the vertical and horizontal sliders below.', 'essence-t1' ),
	'section'     => 'title_tagline',
	'default'     => $generalThemeDefaults['branding']['menubar_logo_padding'],
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	],
	'output'      => [
		[
			'element' => '#masthead .site-branding #custom-logo-wrap',
			'property' => 'padding',
			'suffix' => 'px',
		],
	],
    'priority'    => 20,
	'transport'   => 'auto',
] );

// Adjust the horixontal placement of the logo in the menu bar
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'slider',
	'settings'    => 'menubar_logo_horizonal_setting',
	'label'       => esc_html__( 'Logo Horizontal Adjustment in the Menu Bar.', 'essence-t1' ),
	'description'=>  esc_html__( 'Move the logo in the menu bar left to right.', 'essence-t1' ),
	'section'     => 'title_tagline',
	'default'     => $generalThemeDefaults['branding']['menubar_logo_horizontal_adjustment'],
	'choices'     => [
		'min'  => -100,
		'max'  => 100,
		'step' => 1,
	],
	'output'      => [
		[
			'element' => '#masthead .site-branding .custom-logo-positioning-wrap-x',
			'property' => 'transform',
			'prefix' => 'translateX(',
			'suffix' => '%)',
		],
	],
    'priority'    => 20,
	'transport'   => 'auto',
] );

// Adjust the vertical placement of the logo in the menu bar
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'slider',
	'settings'    => 'menubar-logo_vertical_setting',
	'label'       => esc_html__( 'Logo Vertical Adjustment in the menu bar.', 'essence-t1' ),
	'description'=>  esc_html__( 'Move the logo in the menu bar upward or downward.', 'essence-t1' ),
	'section'     => 'title_tagline',
	'default'     => $generalThemeDefaults['branding']['menubar_logo_vertical_adjustment'],
	'choices'     => [
		'min'  => -100,
		'max'  => 100,
		'step' => 1,
	],
	'output'      => [
		[
			'element' => '#masthead .site-branding .custom-logo-positioning-wrap-y ',
			'property' => 'transform',
			'prefix' => 'translateY(',
			'suffix' => '%)',
		],
	],
    'priority'    => 20,
	'transport'   => 'auto',
] );
