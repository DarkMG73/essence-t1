<?php

/*
----------------------------
    
    Default Mods
    
----------------------------
*/   
function glassinteractive_customizer_default_background_mods( $wp_customize ) {

    $wp_customize->get_section( 'background_image'  )->title   = 'Body & Content Backgrounds';
	$wp_customize->get_section( 'background_image'  )->priority   = 15;
    $wp_customize->remove_control( 'background_image'  );
	$wp_customize->remove_control( 'background_preset'  );
	$wp_customize->remove_control( 'background_preset'  );
	$wp_customize->remove_control( 'background_position'  );
	$wp_customize->remove_control( 'background_size'  );
	$wp_customize->remove_control( 'background_repeat'  );
	$wp_customize->remove_control( 'background_attachment'  );
}
add_action( 'customize_register', 'glassinteractive_customizer_default_background_mods' );


/*
----------------------------
    
     Intro Text
    
----------------------------
*/   
Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'background_title_for_customizer',
	'section'     => 'background_image',
	'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'essence-t1' ) . '</div>',
	'priority'    => 0,
] );

Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'background_intro_output_for_customizer',
	'section'     => 'background_image',
		'default'         => '<div class="intro-text"><p>Here we can setup the background for the body and the main content area. <i><b>NOTE:</b> Images will override colors.</i></p></div>',
	'priority'    => 1,
] );

/*
----------------------------
    
   Background Image
    
----------------------------
*/  
	/* Group Title
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'body_background_title_for_customizer',
		'section'     => 'background_image',
		'default'         => '<div class="customizer-divider">' . __( 'Body Background', 'essence-t1' ) . '</div>',
		'priority'    => 5,
	] );

	/* Body Background Image
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'background',
		'settings'    => 'body_background_image_settings',
		'label'       => esc_html__( 'Body Background', 'essence-t1' ),
		'description' => esc_html__( 'An image selected here will become the main background image for the entire page.   NOTE: This will only show when there is no background color for the body, or the color is set to some level of transparency (see "Body Background Color" below)', 'essence-t1' ),
		'section'     => 'background_image',
		'default'     => [
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'priority'    => 10,
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => 'body',
			],
		],
	] );

	/* Body Background Color
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'color',
		'settings'    => 'background_color_settings',
		'label'       => __( 'Site Background Color', 'essence-t1' ),
		'description' => esc_attr__( 'Set the background color for the page body. This becomes the page background. This will overlay any body background image set above. Click "Clear" to remove the color and show the body background image (if set).   NOTE: The alpha slider on the right of the color tool can be used to lower the transparency of the color to reveal the body background image (if set). This can be used artistically to add a color overlay to the body background image, if desired.', 'essence-t1' ),
		'section'     => 'background_image',
		'default'     => $generalThemeDefaults['background']['body_color'],
		'priority'       => 10,
		'transport'   => 'refresh',
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
				'element'  => 'body > .color-overlay',
				'property' => 'background-color',
				),
			),
		) 
	);

/*
----------------------------
    
   	Content Background
    
----------------------------
*/  

	/* Group Title
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'content_background_title_for_customizer',
		'section'     => 'background_image',
		'default'         => '<div class="customizer-divider">' . __( 'Content Background', 'essence-t1' ) . '</div>',
		'priority'    => 30,
	] );

	/* Content Background Image
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'background',
		'settings'    => 'content_background_image_settings',
		'label'       => esc_html__( 'Content Background', 'essence-t1' ),
		'description' => esc_html__( 'An image selected here will become the content area background image.   NOTE: This will only show when there is no background color set for the content area, or the color is set to some level of transparency (see "Content Area Background Color" below).', 'essence-t1' ),
		'section'     => 'background_image',
		'default'     => [
			'background'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'priority'    => 30,
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => 'body #page-container, .single .entry-header .image-overlay, .page .entry-header .image-overlay, #featured-posts .entry-header > .image-overlay, body #page-container #custom-logo-wrap .image-overlay',
			],
		],
	] );

	/* Content Background Color
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'color',
		'settings'    => 'content_background_color_settings',
		'label'       => __( 'Content Area Background Color', 'essence-t1' ),
		'description' => esc_attr__( 'Set the background color for the content area of the page. This will overlay any content area background image set above. This color tool is a little different from the body color tool in that if we want to see the image set above, we can not simply click a "Clear" button to remove the color and show the image (assuming one is set). Read on to see how to accomplish this with the alpha slider. The alpha slider on the right of the color tool can be used to lower the transparency of the color and reveal the content area background image (if set). This can be used to artistically to add a color overlay to the image or, if set to "0", will show the image with no color overlay.', 'essence-t1' ),
		'section'     => 'background_image',
		'default'     => $generalThemeDefaults['background']['content_color'],
		'priority'    => 30,
		'transport'   => 'refresh',
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
				'element'  => 'body #page-container > .color-overlay, #page-container .site-header > .color-overlay, .single .entry-header > .color-overlay, .page .entry-header > .color-overlay, .search .page-header > .color-overlay, .category #page-title > .color-overlay, .home-template #page-title > .color-overlay, #featured-posts .entry-header > .color-overlay, body #page-container #custom-logo-wrap .color-overlay',
				'property' => 'background-color',
				),
			),
		) 
	);