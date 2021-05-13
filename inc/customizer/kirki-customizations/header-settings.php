<?php

/*
----------------------------
    
    Default Mods
    
----------------------------
*/   
function gi_customizer_default_header_mods( $wp_customize ) {

    $wp_customize->get_section( 'header_image'  )->title   = 'Header Background';
	$wp_customize->get_section( 'header_image'  )->priority   = 10;
    $wp_customize->get_control( 'header_image'  )->priority   = 10;
	$wp_customize->get_control( 'header_image'  )->description = esc_attr__( 'Click “Add new image” to upload an image file from your computer. This is only visible if either no color is set above or, if a color is set, the transparency is set to less that full. This theme works best with an image with a header size of 1280 × 250 pixels, but most sizes will work We can crop the image once it is uploaded, if needed.', 'gi-essence-theme' ),
    
}
add_action( 'customize_register', 'gi_customizer_default_header_mods' );


/*
----------------------------
    
     Intro Text
    
----------------------------
*/   
Kirki::add_field( 'gi_theme_config', [
	'type'        => 'custom',
	'settings'    => 'header_title_for_customizer',
	'section'     => 'header_image',
	'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'kirki' ) . '</div>',
	'priority'    => 5,
] );

Kirki::add_field( 'gi_theme_config', [
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
	Kirki::add_field( 'gi_theme_config', array(
		'type'        => 'color',
		'settings'    => 'header_backgroundcolor-setting',
		'label'       => __( 'Header Background Color', 'gi-essence-theme' ),
		'description' => esc_attr__( 'Set the background color for the page head. Note: This will cover over any image set below. This allows us to tint the image if we wish by setting the color transparency (slider on the far right) to about halfway or wherever is desired. If we wish to only see the image with no tinting, click the  "Clear" button to remove the color completely.', 'gi-essence-theme' ),
		'section'     => 'header_image',
		'default'     => $generalThemeDefaults['header']['header_background_color'],
		'priority'       => 10,
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