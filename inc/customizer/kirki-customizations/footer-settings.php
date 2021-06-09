<?php

/*
----------------------------
    
    Create the Section
    
----------------------------
*/  
Kirki::add_section( 'footer_settings', array(
    'title'       => esc_html__( 'Footer Settings', 'gi-essence-theme' ),
    'description' => esc_html__( 'Add, remove and edit content in the footer, plus set the color.', 'gi-essence-theme' ),
    'priority'       => 20,
) );

	/* Intro Text
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'footer_title_for_customizer',
		'section'     => 'footer_settings',
		'default'         => '<div class="intro-text customizer-divider">' . __( 'About This Section', 'gi-essence-theme' ) . '</div>',
		'priority'    => 0,
	] );

	Kirki::add_field( 'gi_theme_config', [
		'type'        => 'custom',
		'settings'    => 'footer_intro_for_customizer',
		'section'     => 'footer_intro-settings',
			'default'         => '<div class="intro-text"><p>Here we can set up the content and color of the footer. <br><br><b>For footer content:</b> For the content in the three main footer columns, see the "Widgets" section.<br><br><b>For font settings:</b> For the font style, color and more, see the "Typography" section.</div>',
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
    Kirki::add_field( 'gi_theme_config', [
        'type'        => 'custom',
        'settings'    => 'footer_background_title_for_customizer',
        'section'     => 'footer_settings',
            'default'         => '<div class="customizer-divider">' . __( 'Footer Background Color', 'gi-essence-theme' ) . '</div>',
        'priority'    => 10,
    ] );

	/* Footer Background 
       Color Control
	----------------------------*/  
	Kirki::add_field( 'gi_theme_config', array(
		'type'        => 'color',
		'settings'    => 'footer_backgroundcolor-setting',
		'label'       => __( 'Footer Background Color', 'gi-essence-theme' ),
		'description' => esc_attr__( 'Set the background color for the page head. Note: This will only show when there is no background image for the footer.', 'gi-essence-theme' ),
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
    Kirki::add_field( 'gi_theme_config', [
        'type'        => 'custom',
        'settings'    => 'footer_photo_cta_title_for_customizer',
        'section'     => 'footer_settings',
            'default'         => '<div class="customizer-divider">' . __( 'Photo Call-To-Action', 'gi-essence-theme' ) . '</div>',
        'priority'    => 30,
    ] );

    	/* Group Toggle
	----------------------------*/  
    Kirki::add_field( 'gi_theme_config', [
        'type'        => 'toggle',
        'settings'    => 'footer_photo_cta_on_off_toggle_setting',
        'label'       => esc_html__( 'Photo CTA On/Off Switch', 'gi-essence-theme' ),
        'section'     => 'footer_settings',
        'default'     => $generalThemeDefaults['footer-photo-cta']['footer_photo_cta_on_off_toggle_setting'],
        'priority'    => 30,
    ] );

    /* CTA Main Text Editor Control
	----------------------------*/  
    Kirki::add_field( 'gi_theme_config', [
        'type'        => 'editor',
        'settings'    => 'footer_photo_cta_photo_text_editor_setting',
        'label'       => esc_html__( 'Photo CTA Text', 'gi-essence-theme' ),
        'description' => esc_html__( 'Here we add the call-to-action text. this can be as simple as "Hire Us!" with contact info, or more elaborate with links, icons, and more', 'gi-essence-theme' ),
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
        $title =  $photo['title'];
        $descriptive_use =  $photo['descriptive_use'];
        $elm_wrap = $photo['elm_wrap'];
        $image_elm = $photo['image_elm'];
        $section = $photo['section'];
        $priority = $photo['priority'];

        // Image Group Title
        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'custom',
            'settings'    => $slug . 'subgroup_title_for_customizer',
            'section'     => 'footer_settings',
                'default'         => '<div class="photo-cta-image-subgroup-title">' . __( $title . ' Settings Group', 'gi-essence-theme' ) . '</div>',
                'priority'    => $priority,
        ] );
   
        // Select the image
        Kirki::add_field( 'theme_config_id', [
            'type'        => 'image',
            'settings'    => $slug.'_setting_id',
            'label'       => sprintf( esc_html__(' %s ', 'gi-essence-theme'), $title ),
            'description' => sprintf( esc_html__(' Select the %s to appear.', 'gi-essence-theme'), $descriptive_use ),
            'section'     => $section,
            'default'     => '',
            'choices'     => [
                'save_as' => 'id',
            ],
            'transport'      => 'refresh',
            'priority'    => $priority,
        ] );


        // Adjust the width of the photo wrap
        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_wrap_size_setting',
            'label'       =>sprintf( esc_html__( '%s  Width', 'gi-essence-theme' ), $title),
            'section'     => $section,
            'default'     => $generalThemeDefaults['footer-photo-cta'][$slug.'_width'],
            'choices'     => [
                'min'  => 0,
                'max'  => 300,
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
        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_wrap_shape_setting',
            'label'       => sprintf( esc_html__( '%s Container Shape Adjustment', 'gi-essence-theme' ), $title),
            'description'=>  sprintf( esc_html__( 'Change the shape of the %s container: round, square or in between.', 'gi-essence-theme' ), $descriptive_use),
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
        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_wrap_horizonal_setting',
            'label'       => sprintf( esc_html__( '%s Horizontal Adjustment', 'gi-essence-theme' ), $title),
            'description'=>  sprintf( esc_html__( 'Move the %s left to right.', 'gi-essence-theme' ), $descriptive_use),
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
        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_wrap_vertical_setting',
            'label'       => sprintf( esc_html__( '%s ontainer Vertical Adjustment', 'gi-essence-theme' ), $title),
            'description'=>  sprintf( esc_html__( 'Increase or decrease the position of the %s container. The purpose of this control is to allow for more versatile positioning of the %s.', 'gi-essence-theme' ), $descriptive_use, $descriptive_use),
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
        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_wrap_zindex_setting',
            'label'       => sprintf( esc_html__( '%s Container Front-Back Adjustment', 'gi-essence-theme' ), $title),
            'description'=>  sprintf( esc_html__( 'When images are overlapping each other, move the %s  container in front of or behind the other images. NOTE: This only has an affect when we have the set the images to be overlapping each other.', 'gi-essence-theme' ), $descriptive_use),
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
        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_size_setting',
            'label'       => sprintf( esc_html__( '%s Inner Image Size', 'gi-essence-theme' ), $title),
            'description'=>  sprintf( esc_html__( 'Adjust the %s size within the photo container. This can be used along with the "Inner Image Vertical Adjustment" setting to perfectly frame or zoom in on any specific part of the image.', 'gi-essence-theme' ), $descriptive_use),
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
        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_vertical_setting',
            'label'       => sprintf( esc_html__( '%s Inner Image Vertical Adjustment', 'gi-essence-theme' ), $title),
            'description'=>  sprintf( esc_html__( 'Move the %s upward or downward within the photo container. This can be used along with the "Inner Image Size" adjustment to perfectly frame or zoom in on any specific part of the image.', 'gi-essence-theme' ), $descriptive_use),
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
        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'slider',
            'settings'    => $slug.'_horizontal_setting',
            'label'       => sprintf( esc_html__( '%s Inner Image Horizontal Adjustment', 'gi-essence-theme' ), $title),
            'description'=>  sprintf( esc_html__( 'Move the %s left or right within the photo container. This can be used along with the "Inner Image Size" adjustment to perfectly frame or zoom in on any specific part of the image.', 'gi-essence-theme' ), $descriptive_use),
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
    Kirki::add_field( 'gi_theme_config', [
        'type'        => 'custom',
        'settings'    => 'footer_copyright_title_for_customizer',
        'section'     => 'footer_settings',
            'default'         => '<div class="customizer-divider">' . __( 'Copyright Text', 'gi-essence-theme' ) . '</div>',
        'priority'    => 10,
    ] );

    /* Copywrite Text Control
	----------------------------*/  
    Kirki::add_field( 'gi_theme_config', [
        'type'     => 'text',
        'settings' => 'copyright_text_setting',
        'label'    => esc_html__( 'Copyright Text', 'gi-essence-theme' ),
        'section'  => 'footer_settings',
        'default'  => sprintf( esc_html__( '%s', 'gi-essence-theme' ), $generalThemeDefaults['footer']['copyright_text']),

        'priority' => 10,
    ] );


    /*
    ----------------------------
        
        Terms of Service Page
        
    ----------------------------
    */
        /* Group Title
        ----------------------------*/  
        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'custom',
            'settings'    => 'footer_TOS_title_for_customizer',
            'section'     => 'footer_settings',
                'default'         => '<div class="customizer-divider">' . __( '"Terms of Service" Page', 'gi-essence-theme' ) . '</div>',
            'priority'    => 10,
        ] );

        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'dropdown-pages',
            'settings'    => 'gi_footer_tos_page',
            'label'       => esc_html__( 'Select a TOS Page', 'gi-essence-theme' ),
            'default'         => '',
            'section'     => 'footer_settings',
            'priority'    => 10,
        ] );


    /*
    ----------------------------
        
        Privacy Page Link
        
    ----------------------------
    */
        /* Group Title
        ----------------------------*/  
        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'custom',
            'settings'    => 'priacy_page_title_for_customizer',
            'section'     => 'footer_settings',
                'default'         => '<div class="customizer-divider">' . __( '"Privacy Page" Link', 'gi-essence-theme' ) . '</div>',
            'priority'    => 10,
        ] );

        /* Privacy Page Control
        ----------------------------*/  
        Kirki::add_field( 'gi_theme_config', [
            'type'        => 'dropdown-pages',
            'settings'    => 'gi_footer_privacy_page',
            'label'       => esc_html__( 'Select a Privacy Page', 'gi-essence-theme' ),
            'section'     => 'footer_settings',
            'default'     => 3,
            'selected'    => 3, 
            'order'       => 'DESC',
            'priority'    => 10,
        ] );






