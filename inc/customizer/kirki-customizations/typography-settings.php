<?php

Kirki::add_panel( 'typography', array(
    'priority'    => 8,
    'title'       => esc_html__( 'Typography', 'essence-t1' ),
    'description' => esc_html__( 'The style, arrangement, or appearance of all of the text.', 'essence-t1' ),
) );


/*
----------------------------
    
     Body Text
    
----------------------------
*/   
Kirki::add_section( 'body_text_type', array(
    'title'          => esc_html__( 'Body Typography', 'essence-t1' ),
    'panel'          => 'typography',
    'priority'       => 5,
) );

	/* Intro Text
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'bodytext_title_for_customizer',
		'section'     => 'body_text_type',
		'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'essence-t1' ) . '</div>',
		'priority'    => 0,
	] );

	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'bodytext_intro_for_customizer',
		'section'     => 'body_text_type',
			'default'         => '<div class="intro-text"><p>Here we can set up the font, size, color and more for the main body text.</p></div>',
		'priority'    => 0,
	] );

	/* Group Title
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'body_text_title_for_customizer',
		'section'     => 'body_text_type',
		'default'         => '<div class="customizer-divider">' . __( 'General Body Text', 'essence-t1' ) . '</div>',
		'priority'    => 5,
	] );

	/* Body Font Field
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'typography',
		'settings'    => 'typography_setting',
		'label'       => esc_html__( 'Body Font', 'essence-t1' ),
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
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'color',
		'settings'    => 'body_general_text_color_setting',
		'label'       => __( 'Main Body Text Color', 'essence-t1' ),
		'description' => esc_attr__( 'This will set the color for most of the text, but will not affect the site titles or logos. Those have their owns sections in this Customizer tool. &nbsp; &nbsp; NOTE: This will affect posts in the masonry post display, but not affect the text color in the one-column post display. This is due to the latter being designed with a white background and dark text as part of intended style', 'essence-t1' ),
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
				'element'  => 'body, #site-navigation .menu > li > ul *, #site-navigation .menu .menu-item a, #site-navigation .menu .page_item a',
				'property' => 'color',
				),
			),
		) 
	);


	
	/* Group Title
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'link_title_for_customizer',
		'section'     => 'body_text_type',
		'default'         => '<div class="customizer-divider">' . __( 'Link Text', 'essence-t1' ) . '</div>',
		'priority'    => 40,
	] );

	/* Link Font Field
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'typography',
		'settings'    => 'link_font_setting',
		'label'       => esc_html__( 'Link Font & Style', 'essence-t1' ),
		'description'       => esc_html__( 'It is unlikely to ever want to have a different font family for the links, but styling links bold, italics, etc, is not uncommon. This tool will default to the body font settings for almost everything, but we can override them here, if desired. &nbsp; &nbsp; NOTE: This will affect posts in the masonry post display, but not affect the link color in the one-column post display. This is due to the latter being designed with a white background and dark text as part of intended style', 'essence-t1' ),
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
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'color',
		'settings'    => 'link_color_setting',
		'label'       => __( 'Link Color', 'essence-t1' ),
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
				'element'  => 'a, a:visited',
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
    'title'          => esc_html__( 'Navigation Typography', 'essence-t1' ),
    'panel'          => 'typography',
    'priority'       => 5,
) );

	/* Intro Text
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'navtext_title_for_customizer',
		'section'     => 'nav_text_type',
		'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'essence-t1' ) . '</div>',
		'priority'    => 0,
	] );

	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'navtext_intro_for_customizer',
		'section'     => 'nav_text_type',
			'default'         => '<div class="intro-text"><p>Here we can set up the font, size, color and more for the main nav menu text. <strong>NOTE: This does not include the site title and logo in the menu bar.</strong></p></div>',
		'priority'    => 0,
	] );

	/* Group Title
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'text_menubar_title_for_customizer',
		'section'     => 'nav_text_type',
		'default'         => '<div class="customizer-divider">' . __( 'General Text in Menubar', 'essence-t1' ) . '</div>',
		'priority'    => 20,
	] );

	/* Nav Menu Bar General Text
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'typography',
		'settings'    => 'menu_bar_type_setting',
		'label'       => esc_html__( 'Menu Bar Text', 'essence-t1' ),
		'description' => esc_html__( 'This will control the settings for the menu bar text. NOTE: This will not affect the small site title in the menu bar. That is controlled in the "Small Site Title Text" controller above.', 'essence-t1' ),
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
			'palettes' => array(
				$colorOne,
				$colorTwo,
				$colorThree,
				$colorFour,
				$colorFive,
				$colorSix,
				$colorSeven,
				),
		],
		'default'     => $generalThemeDefaults['typography']['menu_bar_type_defaults'],
		'priority'    => 20,
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#masthead',
			],
		],
	] );

/*
----------------------------
    
    Site Title in Menu Bar
    
----------------------------
*/  
	/* Group Title
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'sitetitle_menubar_title_for_customizer',
		'section'     => 'nav_text_type',
		'default'         => '<div class="customizer-divider">' . __( 'Site Title in Menubar', 'essence-t1' ) . '</div>',
		'priority'    => 30,
	] );

	/* Toggle visibility of
	   the menu bar site title
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'toggle',
		'settings'    => 'site_title_menubar_toggle_setting',
		'label'       => esc_html__( 'Show/Hide the Site Title in the Menu Bar', 'essence-t1' ),
		'section'     => 'nav_text_type',
		'default'     => '1',
		'priority'    => 30,
	] );

	/* Horizontal placement of
	   the menu bar site title
	----------------------------*/ 
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'slider',
		'settings'    => 'menubar-logo_horizonal_setting',
		'label'       => esc_html__( 'Menu Bar Site Title Horizontal Adjustment', 'essence-t1' ),
		'description'=>  esc_html__( 'Move the menu bar site title left or right NOTE: IN some cases the page must be SCROLLED UPWARD to see the site title.', 'essence-t1' ),
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
				'property' => 'margin-left',
				'suffix' => 'px',
			],
		],
		'priority'    => 30,
		'transport'   => 'auto',
	] );

	/* Horixontal placement of 
	   the menu bar site title
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'slider',
		'settings'    => 'menubar-title_vertical_setting',
		'label'       => esc_html__( 'Menu Bar Site Title Vertical Adjustment', 'essence-t1' ),
		'description'=>  esc_html__( 'Move the menu bar site title up or down NOTE: In some cases the page must be SCROLLED UPWARD to see the site title.', 'essence-t1' ),
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
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'typography',
		'settings'    => 'site_title_font_setting',
		'label'       => esc_html__( 'Small Site Title Text', 'essence-t1' ),
		'description' => esc_html__( 'This will control the settings ONLY for the website title in the menu bar. This will not control the large site title that appears in the page head on the "Front and "Home" pages. For that, use the "Large Site Title Text" controller.', 'essence-t1' ),
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

		/* Override Input Box 
		for Site Title in Menu Bar
	----------------------------*/ 
	Kirki::add_field( 'my_theme_config', array(
		'type'        => 'text',
		'settings'    => 'site_title_manubar_font_family_override_box',
		'label'       => esc_attr__( 'Menu Bar Site Title Manual Override', 'essence-t1' ),
		'description' => esc_attr__( 'These settings override the font-family setting above. This can be any font you wish to apply. For example: font-family: "Good Times Rg"; NOTE: THIS DOES NOT LOAD THE FONT INTO THE BROWSER. If the font is not already one of the included Google fonts or part of the browser, this will need to be loaded either through a plugin or by adding the font via linking in the document head. Information on this is readily available online. If you are not familiar with this, it might be best to stick to the many supplied Google and browser fonts.', 'essence-t1' ),
		'section'     => 'nav_text_type',
		'default'     => $generalThemeDefaults['typography']['site_title_menubar_typography_override_box'],
		'transport'   => 'refresh',
		'priority'    => 60,
		) 
	);

	/* Site Title in Menu Bar Color
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'color',
		'settings'    => 'color_title_menubar',
		'label'       => __( 'Site Title in Menu Bar', 'essence-t1' ),
		'description' => esc_attr__( 'Set the color for the small site title in the menu bar.', 'essence-t1' ),
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
	'title'          => esc_html__( 'Large Page Head Titles', 'essence-t1' ),
	'panel'          => 'typography',
	'priority'       => 5,
) );

 	/* Intro Text
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'site_pagehead_title_for_customizer',
		'section'     => 'page_head_title_type',
		'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'essence-t1' ) . '</div>',
		'priority'    => 0,
	] );

	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'site_pagehead_intro_for_customizer',
		'section'     => 'page_head_title_type',
			'default'         => '<div class="intro-text"><p>Here we can set up the font, size, color and more for the large site title and description in the page head. <strong>NOTE: This applies only on the "Home" and "Front" pages as these use the site title and description instead of a page title. This will not affect any other page.</strong></p></div>',
		'priority'    => 0,
	] );


	/* Site title Group Title
	----------------------------*/
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'sitetitle_pagehead_title_for_customizer',
		'section'     => 'page_head_title_type',
			'default'         => '<div class="customizer-divider">' . __( 'Page Head Site Title', 'essence-t1' ) . '</div>',
		'priority'    => 50,
	] );


	/* Toggle Visibility of the
	   Site Title in Page Head
	----------------------------*/
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'toggle',
		'settings'    => 'site_title_pagehead_toggle_setting',
		'label'       => esc_html__( 'Show/Hide the Site Title in the Page Head (Front & Home Pages Only)', 'essence-t1' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['typography']['site_title_pagehead_toggle'],
		'priority'    => 50,
	] );
	
	/* Horixontal Placement of
	   Site Title & Description
	   in Page Head
	----------------------------*/
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'slider',
		'settings'    => 'large_page_title_horizonal_setting',
		'label'       => esc_html__( 'Large Site Title Horizontal Plaement ("Front" and "Home" pages only)', 'essence-t1' ),
		'description'=>  esc_html__( 'Move the large site title up or down. NOTE: This will only affect the large site title on the "Front" and "Home" pages, not the page title on all other pages.', 'essence-t1' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['large_page_title_horizonal_adjustment'],
		'choices'     => [
			'min'  => -20,
			'max'  => 20,
			'step' => 1,
		],
		'priority'    => 50,
		'output'      => [
			[
				'element' => '#site-welcome-container #welcome-title-wrap .positioning-wrap-x',
				'property' => 'margin-left',
				'suffix' => '%',
			],
		],
		'transport'   => 'auto',
	] );

	/* Vertical Placement of
	   Site Title in Page Head
	   Site Title & Description
	   in Page Head
	----------------------------*/
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'slider',
		'settings'    => 'large_page_title_vertical_setting',
		'label'       => esc_html__( 'Large Site Title & Description Vertical Plaement ("Front" and "Home" pages only)', 'essence-t1' ),
		'description'=>  esc_html__( 'Move the large site title up or down. NOTE: This will only affect the large site title on the "Front" and "Home" pages, not the page title on all other pages.', 'essence-t1' ),
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


	/* Site Title in Page Head Font
	----------------------------*/
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'typography',
		'settings'    => 'page_title_font_setting',
		'label'       => esc_html__( 'Large Site Title Text', 'essence-t1' ),
		'description' => esc_html__( 'This will control all settings for the large site title in the page head of standard pages. In addition, this will control the large site title that is used in the page head on the "Home" and "Front" pages, but settings for this can be overridden in the "Large Site Title Text" controller above, which allows us to make the site title unique, if we wish.', 'essence-t1' ),
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


	/* Site Title Size (%)
		in Page Head
	----------------------------*/
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'slider',
		'settings'    => 'large_page_font_size_setting',
		'label'       => esc_html__( 'Site Title Font Size', 'essence-t1' ),
		'description'=>  esc_html__( 'We want the site title in the page head to look good on all devices. Setting this size as a percentage here, along with some wizardry behind the scenes, will keep the title looking right on cell phones as well as 4K monitors.', 'essence-t1' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['page_title_font_size_percent'],
		'choices'     => [
			'min'  => 1,
			'max'  => 150,
			'step' => 1,
		],
		'priority'    => 60,
		'output'      => [
			[
				'element' => '#site-welcome-container #welcome-title-wrap .page-title ',
				'property' => 'font-size',
				'prefix' => 'calc(',
				'suffix' => '% + 2vw)',
			],
		],
		'transport'   => 'auto',
	] );
	

	/* Site Title in Page
	    Head Font Variant
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'select',
		'settings'    => 'site_title_pagehead_font_variant_setting',
		'label'       => esc_html__( 'Site Title Font Variant', 'essence-t1' ),
		'description' => esc_html__( 'Here we can make the site title small caps, petite caps and more. NOTE: These options will only work if the specific font being used supplies them. For example, most fonts will have small caps, but not all will have petite caps.', 'essence-t1' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['page_title_font_variant'],
		'placeholder' => esc_html__( 'Select an option...', 'essence-t1' ),
		'priority'    => 60,
		'multiple'    => 1,
		'choices'     => [
			'' => esc_html__( '-none-', 'essence-t1' ),
			'small-caps' => esc_html__( 'small-caps', 'essence-t1' ),
			'all-small-caps' => esc_html__( 'all-small-caps', 'essence-t1' ),
			'petite-caps' => esc_html__( 'petite-caps', 'essence-t1' ),
			'all-petite-caps' => esc_html__( 'all-petite-caps', 'essence-t1' ),
			'unicase' => esc_html__( 'unicase', 'essence-t1' ),
			'titling-caps' => esc_html__( 'titling-caps', 'essence-t1' ),
			'common-lig-values' => esc_html__( 'common-lig-values', 'essence-t1' ),
			'no-common-ligatures' => esc_html__( 'no-common-ligatures', 'essence-t1' ),
		],
		'output' => array(
			array(
				'element'  => '#welcome-title-wrap .page-title',
				'property' => 'font-variant',
				),
			),
		)
	);

	/* Site Title in Page Head Color
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'color',
		'settings'    => 'site_title_color_pagehead_setting',
		'label'       => __( 'Color the Page Head Site Title', 'essence-t1' ),
		'description' => esc_attr__( 'Set the color for the large site title in the page head.', 'essence-t1' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['site_title_color_pagehead'],
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

	/* Override Input Box for Large Site Title
	----------------------------*/ 
	Kirki::add_field( 'my_theme_config', array(
		'type'        => 'text',
		'settings'    => 'large_title_font_family_override_box',
		'label'       => esc_attr__( 'Large Site Title Manual Override', 'essence-t1' ),
		'description' => esc_attr__( 'These settings override the font-family setting above. This can be any font you wish to apply to the large title selector. For example: font-family: "Good Times Rg"; NOTE: THIS DOES NOT LOAD THE FONT INTO THE BROWSER. If the font is not already one of the included Google fonts or part of the browser, this will need to be loaded either through a plugin or by adding the font via linking in the document head. Information on this is readily available online. If you are not familiar with this, it might be best to stick to the many supplied Google and browser fonts.', 'essence-t1' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['large_title_typography_override_box'],
		'transport'   => 'refresh',
		'priority'    => 60,
		) 
	);


	/* Site Description Group Title
	----------------------------*/
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'sitedesc_pagehead_title_for_customizer',
		'section'     => 'page_head_title_type',
			'default'         => '<div class="customizer-divider">' . __( 'Page Head Site Description', 'essence-t1' ) . '</div>',
		'priority'    => 70,
	] );

 	/* Toggle Visibility of Site 
	 Description in the Page Head
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'toggle',
		'settings'    => 'site_description_pagehead_toggle_setting',
		'label'       => esc_html__( 'Show/Hide the Site description in the Page Head (Front & Home Pages Only)', 'essence-t1' ),
		'section'     => 'page_head_title_type',
		'default'     => '1',
		'priority'    => 70,
	] );

	/* Horizontal Placement of Site 
	 Descripton in the Page Head
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'slider',
		'settings'    => 'page_description_horizontal_setting',
		'label'       => esc_html__( 'Page Description Horizontal Plaement', 'essence-t1' ),
		'description'=>  esc_html__( 'Move the page description left or right.', 'essence-t1' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['page_description_horizontal_adjustment'],
		'choices'     => [
			'min'  => -500,
			'max'  => 500,
			'step' => 1,
		],
		'output'      => [
			[
				'element' => '#site-welcome-container #welcome-title-wrap #site-description-wrap.positioning-wrap-x',
				'property' => 'margin-left',
				'suffix' => 'px',
			],
		],
		'priority'    => 70,
		'transport'   => 'auto',
	] );

 	/* Vertical Placement of Site 
	 Descripton in the Page Head
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'slider',
		'settings'    => 'page_description_vertical_setting',
		'label'       => esc_html__( 'Page Description Vertical Plaement', 'essence-t1' ),
		'description'=>  esc_html__( 'Move the page description up or down.', 'essence-t1' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['page_description_vertical_adjustment'],
		'choices'     => [
			'min'  => -200,
			'max'  => 200,
			'step' => 1,
		],
		'output'      => [
			[
				'element' => '#site-welcome-container #welcome-title-wrap .site-description',
				'property' => 'transform',
				'prefix' => 'translateY(',
				'suffix' => 'px)',
			],
		],
		'priority'    => 70,
		'transport'   => 'auto',
	] );

	/* Site Description Font 
	    in the Page Head
	----------------------------*/ 
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'typography',
		'settings'    => 'description_font_setting',
		'label'       => esc_html__( 'Page & Site Description Text', 'essence-t1' ),
		'description' => esc_html__( 'Here we can control the page and site descriptions shown under the title in the page head.', 'essence-t1' ),
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

	/* Site Description
	Size (%) in Page Head
	----------------------------*/	
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'slider',
		'settings'    => 'site_description_font_size_setting',
		'label'       => esc_html__( 'Site Description Font Size', 'essence-t1' ),
		'description'=>  esc_html__( 'Like the site title, we want the site description in the page head to look good on all devices. Setting this size as a percentage here, along with some wizardry behind the scenes, will keep the description looking right on cell phones and large 4K monitors.', 'essence-t1' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['page_description_font_size_percent'],
		'choices'     => [
			'min'  => 1,
			'max'  => 150,
			'step' => 1,
		],
		'priority'    => 70,
		'output'      => [
			[
				'element' => '#site-welcome-container #welcome-title-wrap .site-description ',
				'property' => 'font-size',
				'prefix' => 'calc(',
				'suffix' => '% + 0.5vw)',
			],
		],
		'transport'   => 'auto',
	] );

	/* Site Description in Page
		Head Font Variant
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'select',
		'settings'    => 'site_description_pagehead_font_variant_setting',
		'label'       => esc_html__( 'Site Description Font Variant', 'essence-t1' ),
		'description' => esc_html__( 'Like the site title, we can make the site description small caps, petite caps and more. NOTE: These options will only work if the specific font being used supplies them. For example, most fonts will have small caps, but not all will have petite caps.', 'essence-t1' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['site_description_font_variant'],
		'placeholder' => esc_html__( 'Select an option...', 'essence-t1' ),
		'priority'    => 70,
		'multiple'    => 1,
		'choices'     => [
			'' => esc_html__( '-none-', 'essence-t1' ),
			'small-caps' => esc_html__( 'small-caps', 'essence-t1' ),
			'all-small-caps' => esc_html__( 'all-small-caps', 'essence-t1' ),
			'petite-caps' => esc_html__( 'petite-caps', 'essence-t1' ),
			'all-petite-caps' => esc_html__( 'all-petite-caps', 'essence-t1' ),
			'unicase' => esc_html__( 'unicase', 'essence-t1' ),
			'titling-caps' => esc_html__( 'titling-caps', 'essence-t1' ),
			'common-lig-values' => esc_html__( 'common-lig-values', 'essence-t1' ),
			'no-common-ligatures' => esc_html__( 'no-common-ligatures', 'essence-t1' ),
		],
		'output' => array(
			array(
				'element'  => '#site-welcome-container #welcome-title-wrap .site-description',
				'property' => 'font-variant',
				),
			),
		)
	);

	/* Site Description in 
	   Page Head Color
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'color',
		'settings'    => 'site_description_color_pagehead_setting',
		'label'       => __( 'Color the Page Head Site Description', 'essence-t1' ),
		'description' => esc_attr__( 'Set the color for the site description in the page head (Front & Home Pages Only).', 'essence-t1' ),
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

    /* Override Input Box for Site Description
	----------------------------*/ 
	Kirki::add_field( 'my_theme_config', array(
		'type'        => 'text',
		'settings'    => 'site_description_font_family_override_box',
		'label'       => esc_attr__( 'Site Description Manual Override', 'essence-t1' ),
		'description' => esc_attr__( 'These settings override the font-family setting above. This can be any font you wish to apply to the large title selector. For example: font-family: "Good Times Rg", Arial, sans; NOTE: THIS DOES NOT LOAD THE FONT INTO THE BROWSER. If the font is not already one of the included Google fonts or part of the browser, this will need to be loaded either through a plugin or by adding the font via linking in the document head. Information on this is readily available online. If you are not familiar with this, it might be best to stick to the many supplied Google and browser fonts.', 'essence-t1' ),
		'section'     => 'page_head_title_type',
		'default'     => $generalThemeDefaults['branding']['site_description_typography_override_box'],
		'transport'   => 'refresh',
		'priority'    => 70,
		) 
	);


/*
----------------------------
    
     Footer Text
    
----------------------------
*/   
Kirki::add_section( 'footer_text', array(
    'title'          => esc_html__( 'Footer Typography', 'essence-t1' ),
    'panel'          => 'typography',
    'priority'       => 5,
) );

	/* Intro Text
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'footer_title_for_customizer',
		'section'     => 'footer_text',
		'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'essence-t1' ) . '</div>',
		'priority'    => 0,
	] );

	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'footer_intro_for_customizer',
		'section'     => 'footer_text',
			'default'         => '<div class="intro-text"><p>Here we can set up the font, size, color and more for the footer text.</p></div>',
		'priority'    => 0,
	] );


	/* Group Title
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'footer_title_for_customizer',
		'section'     => 'footer_text',
		'default'         => '<div class="customizer-divider">' . __( 'Footer Text', 'essence-t1' ) . '</div>',
		'priority'    => 20,
	] );

	/* Footer Font Field
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'typography',
		'settings'    => 'footer_typography_setting',
		'label'       => esc_html__( 'Footer Font', 'essence-t1' ),
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
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'color',
		'settings'    => 'footer_text_color_setting',
		'label'       => __( 'Footer Text Color', 'essence-t1' ),
		'description' => esc_attr__( 'This will set the footer text. The link colors can be set separately with the controls below this section.', 'essence-t1' ),
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
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'typography',
		'settings'    => 'footer_link_typography_setting',
		'label'       => esc_html__( 'Footer Link Font', 'essence-t1' ),
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
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'color',
		'settings'    => 'footer_link_color_setting',
		'label'       => __( 'Footer Link Color', 'essence-t1' ),
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