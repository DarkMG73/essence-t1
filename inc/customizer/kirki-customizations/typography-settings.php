<?php

Kirki::add_panel( 'typography', array(
    'priority'    => 8,
    'title'       => esc_html__( 'Typography', 'kirki' ),
    'description' => esc_html__( 'The style, arrangement, or appearance of all of the text.', 'kirki' ),
) );


/*
----------------------------
    
     Body Text
    
----------------------------
*/   
Kirki::add_section( 'body_text_type', array(
    'title'          => esc_html__( 'Body Typography', 'kirki' ),
    'panel'          => 'typography',
    'priority'       => 5,
) );

	/* Intro Text
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'bodytext_title_for_customizer',
		'section'     => 'body_text_type',
		'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'kirki' ) . '</div>',
		'priority'    => 0,
	] );

	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'bodytext_intro_for_customizer',
		'section'     => 'body_text_type',
			'default'         => '<div class="intro-text"><p>Here we can set up the font, size, color and more for the main body text.</p></div>',
		'priority'    => 0,
	] );

	/* Group Title
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'body_text_title_for_customizer',
		'section'     => 'body_text_type',
		'default'         => '<div class="customizer-divider">' . __( 'General Body Text', 'kirki' ) . '</div>',
		'priority'    => 5,
	] );

	/* Body Font Field
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'typography',
		'settings'    => 'typography_setting',
		'label'       => esc_html__( 'Body Font', 'kirki' ),
		'section'     => 'body_text_type',
		'choices' => [
			'fonts' => [
				'standard' => [
					'"Kodchasan", sans-serif', 
					'"Helvetica Neue", sans-serif', 
					'Georgia,Times, serif',
					'"Times New Roman",serif',
				],
				'google'   => [ 'trending', 200],
			],
		],
		'default'     => $generalThemeDefaults['typography']['body_typography'],
		'priority'    => 10,
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => 'body',
			],
		],
	] );

	/* Color Picker for Body Text
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', array(
		'type'        => 'color',
		'settings'    => 'body_general_text_color_setting',
		'label'       => __( 'Main Body Text Color', 'gi-essence-theme' ),
		'description' => esc_attr__( 'This will set the color for most of the text, but will not affect the site titles or logos. Those have their owns sections in this Customizer tool. &nbsp; &nbsp; NOTE: This will affect posts in the masonry post display, but not affect the text color in the one-column post display. This is due to the latter being designed with a white background and dark text as part of intended style', 'gi-essence-theme' ),
		'section'     => 'body_text_type',
		'default'     => $generalThemeDefaults['typography']['body_text_color'],
		'transport'   => 'auto',
		'priority'    => 20,
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
				'element'  => 'body',
				'property' => 'color',
				),
			),
		) 
	);


	
	/* Group Title
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'link_title_for_customizer',
		'section'     => 'body_text_type',
		'default'         => '<div class="customizer-divider">' . __( 'Link Text', 'kirki' ) . '</div>',
		'priority'    => 40,
	] );

	/* Link Font Field
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'typography',
		'settings'    => 'link_font_setting',
		'label'       => esc_html__( 'Link Font & Style', 'kirki' ),
		'description'       => esc_html__( 'It is unlikely to ever want to have a different font family for the links, but styling links bold, italics, etc, is not uncommon. This tool will default to the body font settings for almost everything, but we can override them here, if desired. &nbsp; &nbsp; NOTE: This will affect posts in the masonry post display, but not affect the link color in the one-column post display. This is due to the latter being designed with a white background and dark text as part of intended style', 'kirki' ),
		'section'     => 'body_text_type',
		'choices' => [
			'fonts' => [
				'standard' => [
					'"Kodchasan", sans-serif', 
					'"Helvetica Neue", sans-serif', 
					'Georgia,Times, serif',
					'"Times New Roman",serif',
				],
				'google'   => [ 'trending', 200],
			],
		],
		'default'     => $generalThemeDefaults['typography']['link_font'],
		'priority'    => 40,
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => 'a',
			],
		],
	] );

	/* Color Picker for Link Text
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', array(
		'type'        => 'color',
		'settings'    => 'link_color_setting',
		'label'       => __( 'Link Color', 'gi-essence-theme' ),
		'section'     => 'body_text_type',
		'default'     => $generalThemeDefaults['typography']['link_color'],
		'transport'   => 'auto',
		'priority'    => 40,
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
				'element'  => 'a',
				'property' => 'color',
				),
			),
		) 
	);


/*
----------------------------
    
     Nav Menu Text
    
----------------------------
*/  
Kirki::add_section( 'nav_text_type', array(
    'title'          => esc_html__( 'Navigation Typography', 'kirki' ),
    'panel'          => 'typography',
    'priority'       => 5,
) );

	/* Intro Text
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'navtext_title_for_customizer',
		'section'     => 'nav_text_type',
		'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'kirki' ) . '</div>',
		'priority'    => 0,
	] );

	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'navtext_intro_for_customizer',
		'section'     => 'nav_text_type',
			'default'         => '<div class="intro-text"><p>Here we can set up the font, size, color and more for the main nav menu text. <strong>NOTE: This does not include the site title and logo in the menu bar.</strong>.</p></div>',
		'priority'    => 0,
	] );

	/* Group Title
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'text_menubar_title_for_customizer',
		'section'     => 'nav_text_type',
		'default'         => '<div class="customizer-divider">' . __( 'General Text in Menubar', 'kirki' ) . '</div>',
		'priority'    => 20,
	] );

	/* Nav Menu Bar General Text
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'typography',
		'settings'    => 'menu_bar_type_setting',
		'label'       => esc_html__( 'Menu Bar Text', 'kirki' ),
		'description' => esc_html__( 'This will control the settings for the menu bar text. NOTE: This will not affect the small site title in the menu bar. That is controlled in the "Small Site Title Text" controller above.', 'kirki' ),
		'section'     => 'nav_text_type',
		'choices' => [
			'fonts' => [
				'standard' => [
					'"Kodchasan", sans-serif', 
					'"Helvetica Neue", sans-serif', 
					'Georgia,Times, serif',
					'"Times New Roman",serif',
				],
				'google'   => [ 'trending', 200],
			],
			'alpha' => true,
			'palettes' => $generalThemeDefaults['typography']['menu_bar_type_PALETTE'],
		],
		'default'     => $generalThemeDefaults['typography']['menu_bar_type_DEFAULTS'],
		'priority'    => 20,
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#masthead, .site-header:not(.site-title a)',
			],
		],
	] );
 
	/* Override Input Box for Nav bar general text
	----------------------------*/ 
	Kirki::add_field( 'my_theme_config', array(
		'type'        => 'textarea',
		'settings'    => 'menu_typography_override_box',
		'label'       => esc_attr__( 'Menu Font Family Manual Override', 'human-connection' ),
		'description' => esc_attr__( 'These settings override the setting above. This can be any CSS you wish to apply. It must be is valid CSS format. For example: font-family: "Good Times Rg";', 'human-connection' ),
		'section'     => 'nav_text_type',
		'default'     => $generalThemeDefaults['typography']['menu_typography_override_box'],
		'transport'   => 'auto',
		'priority'    => 20,
		'output'      => [
			[
				'element' => '#masthead, .site-header:not(.site-title a)',
				'property' => 'font-famly'
			],
		],
		) 
	);

	/* Color Picker for Nav bar general text
	----------------------------*/  
	// Kirki::add_field( 'gi_theme_config', array(
	// 	'type'        => 'color',
	// 	'settings'    => 'menubar_general_text_color_setting',
	// 	'label'       => __( 'Menu Bar Text Color', 'gi-essence-theme' ),
	// 	'description' => esc_attr__( 'This will set the color for the text in the menu bar, but will not affect the site title or logo in there.', 'gi-essence-theme' ),
	// 	'section'     => 'nav_text_type',
	// 	'default'     => 'inherit',
	// 	'transport'   => 'auto',
	// 	'priority'    => 20,
	// 	'choices'     => array(
	// 		'alpha' => true,
	// 		'palettes' => array(
	// 			$colorOne,
	// 			$colorTwo,
	// 			$colorThree,
	// 			$colorFour,
	// 			$colorFive,
	// 			$colorSix,
	// 			$colorSeven,
	// 			),
	// 	),
	// 	'output' => array(
	// 		array(
	// 			'element'  => '#masthead, .site-header:not(.site-title a) .page_item,  .site-header:not(.site-title a)  *',
	// 			'property' => 'color',
	// 			),
	// 		),
	// 	) 
	// );


/*
----------------------------
    
    Site Title in Menu Bar
    
----------------------------
*/  
	/* Group Title
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'sitetitle_menubar_title_for_customizer',
		'section'     => 'nav_text_type',
		'default'         => '<div class="customizer-divider">' . __( 'Site Title in Menubar', 'kirki' ) . '</div>',
		'priority'    => 30,
	] );

	/* Toggle visibility of
	   the menu bar site title
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'toggle',
		'settings'    => 'site_title_menubar_toggle_setting',
		'label'       => esc_html__( 'Show/Hide the Site Title in the Menu Bar', 'kirki' ),
		'section'     => 'nav_text_type',
		'default'     => '1',
		'priority'    => 30,
	] );

	/* Horizontal placement of
	   the menu bar site title
	----------------------------*/ 
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'slider',
		'settings'    => 'menubar-logo_horizonal_setting',
		'label'       => esc_html__( 'Menu Bar Site Title Horizontal Adjustment', 'kirki' ),
		'description'=>  esc_html__( 'Move the menu bar site title left or right NOTE: The page must be SCROLLED UPWARD to see the site title.', 'kirki' ),
		'section'     => 'nav_text_type',
		'default'     => $generalThemeDefaults['typography']['menubar-logo_horizonal_adjustment'],
		'choices'     => [
			'min'  => -100,
			'max'  => 100,
			'step' => 1,
		],
		'output'      => [
			[
				'element' => '#masthead .site-branding .menubar-title-positioning-wrap-x',
				'property' => 'transform',
				'prefix' => 'translateX(',
				'suffix' => '%)',
			],
		],
		'priority'    => 30,
		'transport'   => 'auto',
	] );

	/* Horixontal placement of 
	   the menu bar site title
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'slider',
		'settings'    => 'menubar-title_vertical_setting',
		'label'       => esc_html__( 'Menu Bar Site Title Vertical Adjustment', 'kirki' ),
		'description'=>  esc_html__( 'Move the menu bar site title up or down NOTE: The page must be SCROLLED UPWARD to see the site title.', 'kirki' ),
		'section'     => 'nav_text_type',
		'default'     => $generalThemeDefaults['typography']['menubar-logo_vertical_adjustment'],
		'choices'     => [
			'min'  => -100,
			'max'  => 100,
			'step' => 1,
		],
		'output'      => [
			[
				'element' => '#masthead .site-branding .menubar-title-positioning-wrap-y ',
				'property' => 'transform',
				'prefix' => 'translateY(',
				'suffix' => '%)',
			],
		],
		'priority'    => 30,
		'transport'   => 'auto',
	] );

	/* Site Title in Menu Bar Font
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'typography',
		'settings'    => 'site_title_font_setting',
		'label'       => esc_html__( 'Small Site Title Text', 'kirki' ),
		'description' => esc_html__( 'This will control the settings ONLY for the the website title in the menu bar. This will not control the large site title that appears in the page head on the "Front and "Home" pages. For that, use the "Large Site Title Text" controller below.', 'kirki' ),
		'section'     => 'nav_text_type',
		'choices' => [
			'fonts' => [
				'standard' => [
					'"Kodchasan", sans-serif', 
					'"Helvetica Neue", sans-serif', 
					'Georgia,Times, serif',
					'"Times New Roman",serif',
				],
				'google'   => [ 'trending', 200],
			],
		],
		'default'     => $generalThemeDefaults['typography']['site_title_font_setting'],
		'priority'    => 30,
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#masthead .site-title',
			],
		],
	] );

	/* SIte Title in Menu Bar Color
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', array(
		'type'        => 'color',
		'settings'    => 'color_title_menubar',
		'label'       => __( 'Site Title in Menu Bar', 'gi-essence-theme' ),
		'description' => esc_attr__( 'Set the color for the small site title in the menu bar.', 'gi-essence-theme' ),
		'section'     => 'nav_text_type',
		'default'     => $generalThemeDefaults['typography']['color_title_menubar'],
		'priority'       => 30,
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
				'element'  => '#masthead .site-title',
				'property' => 'color',
				),
			),
		) 
	);


	

/*
----------------------------
    
   Large Page Head Title
    
----------------------------
*/  
Kirki::add_section( 'page_head_title_type', array(
	'title'          => esc_html__( 'Large Page Head Titles', 'kirki' ),
	'description'    => esc_html__( 'The style, arrangement, or appearance of large titles in the page heads on the "Front, "Home and standard pages.', 'kirki' ),
	'panel'          => 'typography',
	'priority'       => 5,
) );

 	/* Intro Text
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'site_pagehead_title_for_customizer',
		'section'     => 'page_head_title_type',
		'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'kirki' ) . '</div>',
		'priority'    => 0,
	] );

	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'site_pagehead_intro_for_customizer',
		'section'     => 'page_head_title_type',
			'default'         => '<div class="intro-text"><p>Here we can set up the font, size, color and more for the large site title and description in the page head. <strong>NOTE: Only the "Home" and "Front" pages.</strong></p></div>',
		'priority'    => 0,
	] );


	/* Site title Group Title
	----------------------------*/
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'sitetitle_pagehead_title_for_customizer',
		'section'     => 'page_head_title_type',
			'default'         => '<div class="customizer-divider">' . __( 'Page Head Site Title', 'kirki' ) . '</div>',
		'priority'    => 50,
	] );


	/* Toggle Visibility of the
	   Site title in page head
	----------------------------*/
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'toggle',
		'settings'    => 'site_title_pagehead_toggle_setting',
		'label'       => esc_html__( 'Show/Hide the Site Title in the Page Head (Front & Home Pages Only)', 'kirki' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['typography']['site_title_pagehead_toggle'],
		'priority'    => 50,
	] );
	
	/* Horixontal Placement of
	   Site title in page head
	----------------------------*/
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'slider',
		'settings'    => 'large_page_title_horizonal_setting',
		'label'       => esc_html__( 'Large Page Title Horizontal Plaement (NOT on the "Front" and "Home" pages)', 'kirki' ),
		'description'=>  esc_html__( 'Move the large page title up or down. NOTE: This will NOT affect the large site title on the "Front" and "Home" pages.', 'kirki' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['large_page_title_horizonal_adjustment'],
		'choices'     => [
			'min'  => -500,
			'max'  => 500,
			'step' => 1,
		],
		'priority'    => 50,
		'output'      => [
			[
				'element' => '#site-welcome-container #welcome-title-wrap .positioning-wrap-x',
				'property' => 'transform',
				'prefix' => 'translateX(',
				'suffix' => '%)',
			],
		],
		'transport'   => 'auto',
	] );

	/* Vertical Placement of
	   Site title in page head
	----------------------------*/
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'slider',
		'settings'    => 'large_page_title_vertical_setting',
		'label'       => esc_html__( 'Large Page Title Vertical Plaement (NOT on the "Front" and "Home" pages)', 'kirki' ),
		'description'=>  esc_html__( 'Move the large page title up or down. NOTE: This will NOT affect the large site title on the "Front" and "Home" pages.', 'kirki' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['large_page_title_vertical_adjustment'],
		'choices'     => [
			'min'  => -500,
			'max'  => 500,
			'step' => 1,
		],
		'priority'    => 50,
		'output'      => [
			[
				'element' => '#site-welcome-container #welcome-title-wrap .positioning-wrap-y',
				'property' => 'transform',
				'prefix' => 'translateY(',
				'suffix' => '%)',
			],
		],
		'transport'   => 'auto',
	] );


	/* Site title in Page Head Font
	----------------------------*/
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'typography',
		'settings'    => 'page_title_font_setting',
		'label'       => esc_html__( 'Large Page Title Text', 'kirki' ),
		'description' => esc_html__( 'This will control all settings for the the large page title in the page head of standard pages. In addition, this will control the large site title that is used in the page head on the "Home" and "Front" pages, but settings for this can be overridden in the "Large Site Title Text" controller above, which allows us to make the site title unique, if we wish. ', 'kirki' ),
		'section'     => 'page_head_title_type',
		'choices' => [
			'fonts' => [
				'standard' => [
					'"Kodchasan", sans-serif', 
					'"Helvetica Neue", sans-serif', 
					'Georgia,Times, serif',
					'"Times New Roman",serif',
				],
				'google'   => [ 'trending', 200],
			],
		],
		'default'     => $generalThemeDefaults['branding']['page_title_font'],
		'priority'    => 50,
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#site-welcome-container #welcome-title-wrap .page-title',
			],
		],
	] );

	/* Site Title in Page Head Color
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', array(
		'type'        => 'color',
		'settings'    => 'Site_title_color_pagehead_setting',
		'label'       => __( 'Color the Page Head Site Title', 'gi-essence-theme' ),
		'description' => esc_attr__( 'Set the color for the large site title in the page head.', 'gi-essence-theme' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['Site_title_color_pagehead'],
		'priority'       => 70,
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
				'element'  => '#welcome-title-wrap .page-title',
				'property' => 'color',
				),
			),
		) 
	);




	/* Site Description Group Title
	----------------------------*/
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'sitedesc_pagehead_title_for_customizer',
		'section'     => 'page_head_title_type',
			'default'         => '<div class="customizer-divider">' . __( 'Page Head Site Description', 'kirki' ) . '</div>',
		'priority'    => 70,
	] );

 	/* Toggle Visibility of Site 
	 Description in the Page Head
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'toggle',
		'settings'    => 'site_description_pagehead_toggle_setting',
		'label'       => esc_html__( 'Show/Hide the Site description in the Page Head (Front & Home Pages Only)', 'kirki' ),
		'section'     => 'page_head_title_type',
		'default'     => '1',
		'priority'    => 70,
	] );


 	/* Vertical Placement of Site 
	 Descripton in the page head
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'slider',
		'settings'    => 'page_description_vertical_setting',
		'label'       => esc_html__( 'Page Description Vertical Plaement', 'kirki' ),
		'description'=>  esc_html__( 'Move the page description up or down.', 'kirki' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['page_description_vertical_adjustment'],
		'choices'     => [
			'min'  => -500,
			'max'  => 500,
			'step' => 1,
		],
		'output'      => [
			[
				'element' => '#site-welcome-container #welcome-title-wrap .site-description',
				'property' => 'transform',
				'prefix' => 'translateY(',
				'suffix' => '%)',
			],
		],
		'priority'    => 70,
		'transport'   => 'auto',
	] );

	/* Site Description in 
	   the Page Head Font
	----------------------------*/ 
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'typography',
		'settings'    => 'description_font_setting',
		'label'       => esc_html__( 'Page & Site Description Text', 'kirki' ),
		'description' => esc_html__( 'Here we can control the page and site descriptions shown under the title in the page head.', 'kirki' ),
		'section'     => 'page_head_title_type',
		'choices' => [
			'fonts' => [
				'standard' => [
					'"Kodchasan", sans-serif', 
					'"Helvetica Neue", sans-serif', 
					'Georgia,Times, serif',
					'"Times New Roman",serif',
				],
				'google'   => [ 'trending', 200],
			],
		],
		'default'     => $generalThemeDefaults['branding']['description_font'],
		'priority'    => 70,
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#site-welcome-container #welcome-title-wrap .site-description',
			],
		],
		'transport'   => 'auto',
	] );

	/* Site Description in 
	   Pagehead Color
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', array(
		'type'        => 'color',
		'settings'    => 'site_description_color_pagehead_setting',
		'label'       => __( 'Color the Page Head Site Description', 'gi-essence-theme' ),
		'description' => esc_attr__( 'Set the color for the site description in the page head (Front & Home Pages Only).', 'gi-essence-theme' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['site_description_color_pagehead'],
		'priority'       => 70,
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
				'element'  => '#site-welcome-container #welcome-title-wrap .site-description',
				'property' => 'color',
				),
			),
		) 
	);



	



/*
----------------------------
    
     Footer Text
    
----------------------------
*/   
Kirki::add_section( 'footer_text', array(
    'title'          => esc_html__( 'Footer Typography', 'kirki' ),
    'panel'          => 'typography',
    'priority'       => 5,
) );

	/* Intro Text
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'footer_title_for_customizer',
		'section'     => 'footer_text',
		'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'kirki' ) . '</div>',
		'priority'    => 0,
	] );

	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'footer_intro_for_customizer',
		'section'     => 'footer_text',
			'default'         => '<div class="intro-text"><p>Here we can set up the font, size, color and more for the footer text.</p></div>',
		'priority'    => 0,
	] );


	/* Group Title
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'footer_title_for_customizer',
		'section'     => 'footer_text',
		'default'         => '<div class="customizer-divider">' . __( 'Footer Text', 'kirki' ) . '</div>',
		'priority'    => 20,
	] );

	/* Footer Font Field
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'typography',
		'settings'    => 'footer_typography_setting',
		'label'       => esc_html__( 'Footer Font', 'kirki' ),
		'section'     => 'footer_text',
		'choices' => [
			'fonts' => [
				'standard' => [
					'"Kodchasan", sans-serif', 
					'"Helvetica Neue", sans-serif', 
					'Georgia,Times, serif',
					'"Times New Roman",serif',
				],
				'google'   => [ 'trending', 200],
			],
		],
		'default'     => $generalThemeDefaults['typography']['footer_typography'],
		'priority'    => 20,
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.site-footer',
			],
		],
	] );

	/* Color Picker for footer Text
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', array(
		'type'        => 'color',
		'settings'    => 'footer_text_color_setting',
		'label'       => __( 'Footer Text Color', 'gi-essence-theme' ),
		'description' => esc_attr__( 'This will set the footer text. The link colors can be set separately with the controls below this section.', 'gi-essence-theme' ),
		'section'     => 'footer_text',
		'default'     => $generalThemeDefaults['typography']['footer_text_color'],
		'transport'   => 'auto',
		'priority'    => 20,
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
				'element'  => '.site-footer',
				'property' => 'color',
				),
			),
		) 
	);

		/* Footer Link Font Field
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'typography',
		'settings'    => 'footer_link_typography_setting',
		'label'       => esc_html__( 'Footer Link Font', 'kirki' ),
		'section'     => 'footer_text',
		'choices' => [
			'fonts' => [
				'standard' => [
					'"Kodchasan", sans-serif', 
					'"Helvetica Neue", sans-serif', 
					'Georgia,Times, serif',
					'"Times New Roman",serif',
				],
				'google'   => [ 'trending', 200],
			],
		],
		'default'     => $generalThemeDefaults['typography']['footer_link_typography'],
		'priority'    => 20,
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.site-footer a',
			],
		],
	] );

	/* Color Picker for footer Text
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', array(
		'type'        => 'color',
		'settings'    => 'footer_link_color_setting',
		'label'       => __( 'Footer Link Color', 'gi-essence-theme' ),
		'section'     => 'footer_text',
		'default'     => $generalThemeDefaults['typography']['footer_link_color'],
		'transport'   => 'auto',
		'priority'    => 20,
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
				'element'  => '.site-footer a',
				'property' => 'color',
				),
			),
		) 
	);
