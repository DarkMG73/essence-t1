<?php

/*
----------------------------
    
    Create the Section
    
----------------------------
*/  
Kirki::add_section( 'footer_settings', array(
    'title'       => esc_html__( 'Footer Settings', 'essence-t1' ),
    'priority'       => 20,
) );

	/* Intro Text
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'footer_title_for_customizer',
		'section'     => 'footer_settings',
		'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'essence-t1' ) . '</div>',
		'priority'    => 0,
	] );

	Kirki::add_field( 'glassinteractive_theme_config', [
		'type'        => 'custom',
		'settings'    => 'footer_intro_for_customizer',
		'section'     => 'footer_settings',
			'default'         => '<div class="intro-text"><p>' . __( 'Here we can set up the content and color of the footer. <br><br><b>For footer content:</b> For the content in the three main footer columns, see the "Widgets" section.<br><br><b>For font settings:</b> For the font style, color and more, see the "Typography" section.', 'essence-t1' ).'</div>',
		'priority'    => 0,
	] );


/*

/*
----------------------------
    
   Footer Background
    
----------------------------
*/  
	/* Group Title
	----------------------------*/  
    Kirki::add_field( 'glassinteractive_theme_config', [
        'type'        => 'custom',
        'settings'    => 'footer_background_title_for_customizer',
        'section'     => 'footer_settings',
            'default'         => '<div class="customizer-divider">' . __( 'Footer Background Color', 'essence-t1' ) . '</div>',
        'priority'    => 10,
    ] );

	/* Footer Background 
       Color Control
	----------------------------*/  
	Kirki::add_field( 'glassinteractive_theme_config', array(
		'type'        => 'color',
		'settings'    => 'footer_backgroundcolor-setting',
		'label'       => __( 'Footer Background Color', 'essence-t1' ),
		'description' => esc_attr__( 'Set the background color for the footer. This will often require the footer text color to be changed. Like all text settings, this can be done in the "Typography" section of the Customizer.', 'essence-t1' ),
		'section'     => 'footer_settings',
		'default'     => '',
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
				'element'  => '.site-footer',
				'property' => 'background-color',
				),
			),
		) 
	);



/*
----------------------------
    
   Footer Photo CTA
    
----------------------------
*/  
	/* Group Title
	----------------------------*/  
    Kirki::add_field( 'glassinteractive_theme_config', [
        'type'        => 'custom',
        'settings'    => 'footer_photo_cta_title_for_customizer',
        'section'     => 'footer_settings',
            'default'         => '<div class="customizer-divider">' . __( 'Photo Call-To-Action', 'essence-t1' ) . '</div>',
        'priority'    => 30,
    ] );

    /* Group Toggle
	----------------------------*/  
    Kirki::add_field( 'glassinteractive_theme_config', [
        'type'        => 'toggle',
        'settings'    => 'footer_photo_cta_on_off_toggle_setting',
        'label'       => esc_html__( 'Photo CTA On/Off Switch', 'essence-t1' ),
        'section'     => 'footer_settings',
        'default'     => $generalThemeDefaults['footer-photo-cta']['footer_photo_cta_on_off_toggle_setting'],
        'priority'    => 30,
    ] );

    /* CTA Main Text Editor Control
	----------------------------*/  
    Kirki::add_field( 'glassinteractive_theme_config', [
        'type'        => 'editor',
        'settings'    => 'footer_photo_cta_photo_text_editor_setting',
        'label'       => esc_html__( 'Photo CTA Text', 'essence-t1' ),
        'description' => esc_html__( 'Here we add the call-to-action text. this can be as simple as "Hire Us!" with contact info, or more elaborate with links, icons, and more', 'essence-t1' ),
        'section'     => 'footer_settings',
        'default'     => $generalThemeDefaults['footer-photo-cta']['footer_photo_cta_text_editor_setting'],
        'priority'    => 30
    ] );

    /* Define Each Image Settings Group
	----------------------------*/  
    $photo_info = [
        [
            'slug' => 'photo_cta_photo_one',
            'title' => 'First Photo',
            'descriptive_use' => 'first photo',
            'section' => 'footer_settings',
            'elm_wrap' => '.photo-cta-1',
            'image_elm' => '.photo-cta-image-wrap.photo-cta-1 .photo-cta-image',
            'priority'    => 40,
        ],
        [
            'slug' => 'photo_cta_photo_two',
            'title' => 'Second Photo',
            'descriptive_use' => 'second photo',
            'section' => 'footer_settings',
            'elm_wrap' => '.photo-cta-2',
            'image_elm' => '.photo-cta-image-wrap.photo-cta-2 .photo-cta-image',
            'priority'    => 50,
        ],
        [
            'slug' => 'photo_cta_photo_three',
            'title' => 'Third Photo',
            'descriptive_use' => 'third photo',
            'section' => 'footer_settings',
            'elm_wrap' => '.photo-cta-3',
            'image_elm' => '.photo-cta-image-wrap.photo-cta-3 .photo-cta-image',
            'priority'    => 60,
        ]
    ];

    /* Build Each Image Settings Group
	----------------------------*/  
    foreach($photo_info as $photo){

        $slug = $photo['slug'];
        $section_title =  $photo['title'];
        $descriptive_use =  $photo['descriptive_use'];
        $elm_wrap = $photo['elm_wrap'];
        $image_elm = $photo['image_elm'];
        $section = $photo['section'];
        $priority = $photo['priority'];

        // Image Group Title
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'custom',
            'settings'    => $slug . 'subgroup_title_for_customizer',
            'section'     => 'footer_settings',
            'default'         =>  ' <div class="photo-cta-image-subgroup-title">' . sprintf( esc_html('%s'), $section_title ) . ' Settings Group </div>',
            'priority'    => $priority,
    ] );
   
        // Select the image
        Kirki::add_field( 'theme_config_id', [
            'type'        => 'image',
            'settings'    => $slug.'_setting_id',
            /* translators: %s: Section title, i.e. Photo One. */
            'label'       => sprintf( esc_html(' %s '), $section_title ),
            /* translators: %s: Section description, i.e. With this conttrol we can.... */
            'description' => sprintf( esc_html__(' Select the %s to appear.', 'essence-t1'), $descriptive_use ),
            'section'     => $section,
            'default'     => '',
            'choices'     => [
                'save_as' => 'id',
            ],
            'transport'      => 'refresh',
            'priority'    => $priority,
        ] );


        // Adjust the width of the photo wrap
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_wrap_size_setting',
             /* translators: %s: Section title, i.e. Photo One. */
            'label'       =>sprintf( esc_html__( '%s  Size', 'essence-t1' ), $section_title),
            'section'     => $section,
            'default'     => $generalThemeDefaults['footer-photo-cta'][$slug.'_width'],
            'choices'     => [
                'min'  => 10,
                'max'  => 200,
                'step' => 1,
            ],
            'output'      => [
                [
                    'element' => $elm_wrap,
                    'property' => 'width',
                    'suffix' => 'px',
                ],
            ],
            'transport'   => 'auto',
            'priority'    => $priority,
        ] );

        // Adjust the shape of the photo container
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_wrap_shape_setting',
            /* translators: %s: Section title, i.e. Photo One. */
            'label'       => sprintf( esc_html__( '%s Container Shape Adjustment', 'essence-t1' ), $section_title),
            /* translators: %s: Section description, i.e. With this conttrol we can.... */
            'description'=>  sprintf( esc_html__( 'Change the shape of the %s container: round, square or in between.', 'essence-t1' ), $descriptive_use),
            'section'     => $section,
            'default'     => $generalThemeDefaults['footer-photo-cta'][$slug.'_cont_shape_adjustment'],
            'choices'     => [
                'min'  => 0,
                'max'  => 50,
                'step' => 1,
            ],
            'output'      => [
                [
                    'element'   => $elm_wrap,
                    'property'  => 'border-radius',
                    'suffix'    => 'px',
                ],
            ],
            'transport'   => 'auto',
            'priority'    => $priority,
        ] );

        // Adjust the horizontal placement
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_wrap_horizonal_setting',
            /* translators: %s: Section title, i.e. Photo One. */            
            'label'       => sprintf( esc_html__( '%s Horizontal Adjustment', 'essence-t1' ), $section_title),
            /* translators: %s: Section description, i.e. With this conttrol we can.... */
            'description'=>  sprintf( esc_html__( 'Move the %s left to right.', 'essence-t1' ), $descriptive_use),
            'section'     => $section,
            'default'     => $generalThemeDefaults['footer-photo-cta'][$slug.'_cont_horizontal_adjustment'],
            'choices'     => [
                'min'  => -100,
                'max'  => 100,
                'step' => 1,
            ],
            'output'      => [
                [
                    'element' => $elm_wrap,
                    'property' => 'transform',
                    'prefix' => 'translateX(',
                    'suffix' => '%)',
                ],
            ],
            'transport'   => 'auto',
            'priority'    => $priority,
        ] );

        // Adjust the vertical position of the photo container
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_wrap_vertical_setting',
            /* translators: %s: Section title, i.e. Photo One. */
            'label'       => sprintf( esc_html__( '%s Container Vertical Adjustment', 'essence-t1' ), $section_title),
            /* translators: %s: Section description, i.e. With this conttrol we can.... */
            'description'=>  sprintf( esc_html__( 'Increase or decrease the position of the %1$s container. The purpose of this control is to allow for more versatile positioning of the %2$s.', 'essence-t1' ), $descriptive_use, $descriptive_use),
            'section'     => $section,
            'default'     => $generalThemeDefaults['footer-photo-cta'][$slug.'_cont_vertical_adjustment'],
            'choices'     => [
                'min'  => -100,
                'max'  => 100,
                'step' => 1,
            ],
            'output'      => [
                [
                    'element' => $elm_wrap,
                    'property' => 'top',
                    'suffix' => 'px',
                ],
            ],
            'transport'   => 'auto',
            'priority'    => $priority,
        ] );

        // Adjust the z-index of the photo container
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_wrap_zindex_setting',
            /* translators: %s: Section title, i.e. Photo One. */
            'label'       => sprintf( esc_html__( '%s Container Front-Back Adjustment', 'essence-t1' ), $section_title),
            /* translators: %s: Section description, i.e. With this conttrol we can.... */
            'description'=>  sprintf( esc_html__( 'When images are overlapping each other, move the %s  container in front of or behind the other images. NOTE: This only has an affect when we have the set the images to be overlapping each other.', 'essence-t1' ), $descriptive_use),
            'section'     => $section,
            'default'     => $generalThemeDefaults['footer-photo-cta'][$slug.'_cont_zindex_adjustment'],
            'choices'     => [
                'min'  => -1,
                'max'  => 3,
                'step' => 1,
            ],
            'output'      => [
                [
                    'element' => $elm_wrap,
                    'property' => 'z-index',
                ],
            ],
            'transport'   => 'auto',
            'priority'    => $priority,
        ] );

        // Adjust the inner image size within the container
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_size_setting',
            /* translators: %s: Section title, i.e. Photo One. */
            'label'       => sprintf( esc_html__( '%s Inner Image Size', 'essence-t1' ), $section_title),
            /* translators: %s: Section description, i.e. With this conttrol we can.... */
            'description'=>  sprintf( esc_html__( 'Adjust the %s size within the photo container. This can be used along with the "Inner Image Vertical Adjustment" setting to perfectly frame or zoom in on any specific part of the image.', 'essence-t1' ), $descriptive_use),
            'section'     => $section,
            'default'     => $generalThemeDefaults['footer-photo-cta'][$slug.'_size_adjustment'],
            'choices'     => [
                'min'  => 1,
                'max'  => 2,
                'step' => 0.1,
            ],
            'output'      => [
                [
                    'element' => $image_elm,
                    'property'  => 'transform',
                    'prefix' => 'scale(',
                    'suffix' => ')',
                ],
            ],
            'transport'   => 'auto',
            'priority'    => $priority,
        ] );

        // Adjust the inner image vertical placement within the container
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_vertical_setting',
            /* translators: %s: Section title, i.e. Photo One. */
            'label'       => sprintf( esc_html__( '%s Inner Image Vertical Adjustment', 'essence-t1' ), $section_title),
            /* translators: %s: Section description, i.e. With this conttrol we can.... */
            'description'=>  sprintf( esc_html__( 'Move the %s upward or downward within the photo container. This can be used along with the "Inner Image Size" adjustment to perfectly frame or zoom in on any specific part of the image.', 'essence-t1' ), $descriptive_use),
            'section'     => $section,
            'default'     => $generalThemeDefaults['footer-photo-cta'][$slug.'_vertical_adjustment'],
            'choices'     => [
                'min'  => -100,
                'max'  => 100,
                'step' => 1,
            ],
            'output'      => [
                [
                    'element' => $image_elm,
                    'property' => 'top',
                    'suffix' => 'px',
                ],
            ],
            'transport'   => 'auto',
            'priority'    => $priority,
        ] );

        // Adjust the inner image horizontal placement within the container
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_horizontal_setting',
            /* translators: %s: Section title, i.e. Photo One */
            'label'       => sprintf( esc_html__( '%s Inner Image Horizontal Adjustment', 'essence-t1' ), $section_title),
            /* translators: %s: Section description, i.e. With this conttrol we can.... */
            'description'=>  sprintf( esc_html__( 'Move the %s left or right within the photo container. This can be used along with the "Inner Image Size" adjustment to perfectly frame or zoom in on any specific part of the image.', 'essence-t1' ), $descriptive_use),
            'section'     => $section,
            'default'     => $generalThemeDefaults['footer-photo-cta'][$slug.'_vertical_adjustment'],
            'choices'     => [
                'min'  => -100,
                'max'  => 100,
                'step' => 1,
            ],
            'output'      => [
                [
                    'element' => $elm_wrap . ' .photo-cta-image-wrap-X-adjustment',
                    'property'  => 'transform',
                    'prefix' => 'translateX(',
                    'suffix' => '%)',
                ],
            ],
            'transport'   => 'auto',
            'priority'    => $priority,
        ] );
    }

 /*
----------------------------
    
      Copyright Text
    
----------------------------
*/ 
	/* Group Title
	----------------------------*/  
    Kirki::add_field( 'glassinteractive_theme_config', [
        'type'        => 'custom',
        'settings'    => 'footer_copyright_title_for_customizer',
        'section'     => 'footer_settings',
            'default'         => '<div class="customizer-divider">' . __( 'Copyright Text', 'essence-t1' ) . '</div>',
        'priority'    => 10,
    ] );

    /* Copywrite Text Control
	----------------------------*/  
    Kirki::add_field( 'glassinteractive_theme_config', [
        'type'     => 'text',
        'settings' => 'glassinteractive_footer_copyright_text',
        'label'    => esc_html__( 'Copyright Text', 'essence-t1' ),
        'section'  => 'footer_settings',
        'default'  => sprintf( esc_html( '%s'), $generalThemeDefaults['footer']['copyright_text']),
        'priority' => 10,
    ] );


    /*
    ----------------------------
        
        Terms of Service Page
        
    ----------------------------
    */
        /* Group Title
        ----------------------------*/  
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'custom',
            'settings'    => 'footer_tos_title_for_customizer',
            'section'     => 'footer_settings',
                'default'         => '<div class="customizer-divider">' . __( '"Terms of Service" Page', 'essence-t1' ) . '</div>',
            'priority'    => 10,
        ] );

        /* Group Toggle
        ----------------------------*/  
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'toggle',
            'settings'    => 'footer_tos_on_off_toggle_setting',
            'label'       => esc_html__( 'Terms of Service On/Off Switch', 'essence-t1' ),
            'description' => __('If turned on, this will look for and use an exiting page titled "Terms of Service". This will then place a link to that page in the footer. We can override the linked-to page using the dropdown menu to link to any existing page we would like.', 'essence-t1' ),
            'section'     => 'footer_settings',
            'default'     => $generalThemeDefaults['footer']['footer_tos_on_off_toggle_setting'],
            'priority'    => 10,
        ] );
  
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'dropdown-pages',
            'settings'    => 'glassinteractive_footer_tos_page',
            'label'       => esc_html__( 'Select a TOS Page', 'essence-t1' ),
            'section'     => 'footer_settings',
            'order'       => 'DESC',
            'priority'    => 10,
        ] );


    /*
    ----------------------------
        
        Privacy Page Link
        
    ----------------------------
    */
        /* Group Title
        ----------------------------*/  
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'custom',
            'settings'    => 'priacy_page_title_for_customizer',
            'section'     => 'footer_settings',
                'default'         => '<div class="customizer-divider">' . __( '"Privacy Page" Link', 'essence-t1' ) . '</div>',
            'priority'    => 10,
        ] );

        /* Group Toggle
        ----------------------------*/  
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'toggle',
            'settings'    => 'footer_privacy_page_on_off_toggle_setting',
            'label'       => esc_html__( 'Privacy Page On/Off Switch', 'essence-t1' ),
            'section'     => 'footer_settings',
            'default'     => $generalThemeDefaults['footer']['footer_privacy_page_on_off_toggle_setting'],
            'priority'    => 10,
        ] );

        /* Privacy Page Control
        ----------------------------*/  
        Kirki::add_field( 'glassinteractive_theme_config', [
            'type'        => 'dropdown-pages',
            'settings'    => 'glassinteractive_footer_privacy_page',
            'label'       => esc_html__( 'Select a Privacy Page', 'essence-t1' ),
            'section'     => 'footer_settings',
            'default'     => 3,
            'selected'    => 3, 
            'order'       => 'DESC',
            'priority'    => 10,
        ] );






