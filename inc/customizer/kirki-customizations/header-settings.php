<?php

/*
----------------------------
    
    Default Mods
    
----------------------------
*/   
function glassinteractive_customizer_default_header_mods( $wp_customize ) {

    $wp_customize->get_section( 'header_image'  )->title   = 'Home Page Header Background';
	$wp_customize->get_section( 'header_image'  )->priority   = 10;
    $wp_customize->get_control( 'header_image'  )->priority   = 10;
}
add_action( 'customize_register', 'glassinteractive_customizer_default_header_mods' );


/*
----------------------------
    
     Intro Text
    
----------------------------
*/   
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'header_title_for_customizer',
	'section'     => 'header_image',
	'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'essence-t1' ) . '</div>',
	'priority'    => 5,
] );

Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'header_intro_output_for_customizer',
	'section'     => 'header_image',
		'default'         => '<div class="intro-text"><p>Here we can setup the page header for the "Home" and "Front" pages. <i><b>Note:</b> All font settings for the page head area are found in the <b>Typography</b> section.</i></p></div>',
	'priority'    => 0,
] );


/*
----------------------------
    
   Header Background
    
----------------------------
*/  
	/* 
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'color',
		'settings'    => 'header_backgroundcolor-setting',
		'label'       => __( 'Header Background Color', 'essence-t1' ),
		'description' => esc_attr__( 'Set the background color for the page head. NOTE: THIS WILL COVER OVER ANY IMAGE SET BELOW. This allows us to tint the image, if we wish, by setting the color transparency (slider on the far right) to something less than 100%. Setting the transparency slider around half way down will usually provide an ideal tint, but more or less can be used if desired. If we wish to only see the image with no tinting, click the  "Clear" button to remove the color completely.', 'essence-t1' ),
		'section'     => 'header_image',
		'default'     => $generalThemeDefaults['header']['header_background_color'],
		'priority'       => 5,
		'transport'   => 'auto',
		'choices'     => array(
			'alpha' => true,
			'palettes' => array(
				$colorOne,
				$colorTwo,
				$colorThree,
				$colorFour,
				$colorFive,
				$colorSix,
				$colorSeven,
				),
		),
		'output' => array(
			array(
				'element'  => '#top-welcome-section > .color-overlay',
				'property' => 'background-color',
				),
			),
		) 
	);