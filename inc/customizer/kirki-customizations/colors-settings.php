<?php

/*
----------------------------
    
    Color Palette Setup
    
----------------------------
*/   

//  Default color palette
$themePaletteDefault = set_color_pallet(); // Defined in theme-defaults.php


//  Grab the custom palette colors if 
//  they exists. Otherwise use the default palette.
$colorOne = get_theme_mod( 'color_palette_c1', $themePaletteDefault[0] );
$colorTwo = get_theme_mod( 'color_palette_c2', $themePaletteDefault[1] );
$colorThree = get_theme_mod( 'color_palette_c3', $themePaletteDefault[2] );
$colorFour = get_theme_mod( 'color_palette_c4', $themePaletteDefault[3] );
$colorFive = get_theme_mod( 'color_palette_c5', $themePaletteDefault[4] );
$colorSix = get_theme_mod( 'color_palette_c6', $themePaletteDefault[5] );
$colorSeven = get_theme_mod( 'color_palette_c7', $themePaletteDefault[6] );

// Build the palette array
$themePalette;
$themePalette = array(
    
				$colorOne,
				$colorTwo,
				$colorThree,
				$colorFour,
				$colorFive,
				$colorSix,
				$colorSeven,
				
			);

            

/*
----------------------------
	
	Color Paletts Intro 
	
----------------------------
*/  
function glassinteractive_customizer_default_color_mods( $wp_customize ) {
	/* Some modifiable settings */
	// [capability] => 
	// [priority] => 10
	// [section] => colors
	// [label] => Background Color
	// [description] => 
	// [choices] => Array
	
	$wp_customize->get_section( 'colors' )->priority = 3;
	$wp_customize->get_section( 'colors' )->title = 'Color Palette';
	$wp_customize->remove_control( 'header_textcolor'  );
	$wp_customize->remove_control( 'background_color'  );
}
add_action( 'customize_register', 'glassinteractive_customizer_default_color_mods' );

/*
----------------------------
    
    Color Paletts Intro 
    
----------------------------
*/   
function display_mat_des_colors(){
	$material_design_colors = ['#FFEBEE','#FFCDD2','#EF9A9A','#E57373','#EF5350','#F44336','#E53935','#D32F2F','#C62828','#B71C1C','#FF8A80','#FF5252','#FF1744','#D50000','#FCE4EC','#F8BBD0','#F48FB1','#F06292','#EC407A','#E91E63','#D81B60','#C2185B','#AD1457','#880E4F','#FF80AB','#FF4081','#F50057','#C51162','#F3E5F5','#E1BEE7','#CE93D8','#BA68C8','#AB47BC','#9C27B0','#8E24AA','#7B1FA2','#6A1B9A','#4A148C','#EA80FC','#E040FB','#D500F9','#AA00FF','#EDE7F6','#D1C4E9','#B39DDB','#9575CD','#7E57C2','#673AB7','#5E35B1','#512DA8','#4527A0','#311B92','#B388FF','#7C4DFF','#651FFF','#6200EA','#E8EAF6','#C5CAE9','#9FA8DA','#7986CB','#5C6BC0','#3F51B5','#3949AB','#303F9F','#283593','#1A237E','#8C9EFF','#536DFE','#3D5AFE','#304FFE','#E3F2FD','#BBDEFB','#90CAF9','#64B5F6','#42A5F5','#2196F3','#1E88E5','#1976D2','#1565C0','#0D47A1','#82B1FF','#448AFF','#2979FF','#2962FF','#E1F5FE','#B3E5FC','#81D4fA','#4fC3F7','#29B6FC','#03A9F4','#039BE5','#0288D1','#0277BD','#01579B','#80D8FF','#40C4FF','#00B0FF','#0091EA','#E0F7FA','#B2EBF2','#80DEEA','#4DD0E1','#26C6DA','#00BCD4','#00ACC1','#0097A7','#00838F','#006064','#84FFFF','#18FFFF','#00E5FF','#00B8D4','#E0F2F1','#B2DFDB','#80CBC4','#4DB6AC','#26A69A','#009688','#00897B','#00796B','#00695C','#004D40','#A7FFEB','#64FFDA','#1DE9B6','#00BFA5','#E8F5E9','#C8E6C9','#A5D6A7','#81C784','#66BB6A','#4CAF50','#43A047','#388E3C','#2E7D32','#1B5E20','#B9F6CA','#69F0AE','#00E676','#00C853','#F1F8E9','#DCEDC8','#C5E1A5','#AED581','#9CCC65','#8BC34A','#7CB342','#689F38','#558B2F','#33691E','#CCFF90','#B2FF59','#76FF03','#64DD17','#F9FBE7','#F0F4C3','#E6EE9C','#DCE775','#D4E157','#CDDC39','#C0CA33','#A4B42B','#9E9D24','#827717','#F4FF81','#EEFF41','#C6FF00','#AEEA00','#FFFDE7','#FFF9C4','#FFF590','#FFF176','#FFEE58','#FFEB3B','#FDD835','#FBC02D','#F9A825','#F57F17','#FFFF82','#FFFF00','#FFEA00','#FFD600','#FFF8E1','#FFECB3','#FFE082','#FFD54F','#FFCA28','#FFC107','#FFB300','#FFA000','#FF8F00','#FF6F00','#FFE57F','#FFD740','#FFC400','#FFAB00','#FFF3E0','#FFE0B2','#FFCC80','#FFB74D','#FFA726','#FF9800','#FB8C00','#F57C00','#EF6C00','#E65100','#FFD180','#FFAB40','#FF9100','#FF6D00','#FBE9A7','#FFCCBC','#FFAB91','#FF8A65','#FF7043','#FF5722','#F4511E','#E64A19','#D84315','#BF360C','#FF9E80','#FF6E40','#FF3D00','#DD2600','#EFEBE9','#D7CCC8','#BCAAA4','#A1887F','#8D6E63','#795548','#6D4C41','#5D4037','#4E342E','#3E2723','#FAFAFA','#F5F5F5','#EEEEEE','#E0E0E0','#BDBDBD','#9E9E9E','#757575','#616161','#424242','#212121','#000000','#ffffff','#ECEFF1','#CFD8DC','#B0BBC5','#90A4AE','#78909C','#607D8B','#546E7A','#455A64','#37474F','#263238',
	];

	foreach($material_design_colors as $the_color){
	"'".$the_color . "',";
	}
}

Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'color_palette_title_to_customizer',
	'section'     => 'colors',
	'default'         => '<div class="intro-text customizer-divider"><h3>' . __( 'About This Section', 'essence-t1' ) . '</h3></div>',
	'priority'    => 0,
] );

Kirki::add_field( 'glassinteractive_theme_config', [
	'type'        => 'custom',
	'settings'    => 'color_palette_intro_to_customizer',
	'section'     => 'colors',
		'default'         => '<div class="intro-text"><p>Here we define the color palette used for the entire website. Sticking to one simple color palette creates an enjoyable and professional look. The colors we choose here can be assigned in the "Typography", Background" and similar sections in this Customizer".</p></div>',
		'default'         => '<div class="intro-text"><p>Here we define the color palette used for the entire website. Sticking to one simple color palette creates an enjoyable and professional look. The colors we choose here can be assigned in the "Typography", "Background" and similar sections in this Customizer tool.</p></div>',
	'priority'    => 0,
] );

        //  Color Palette 1
        Kirki::add_field( 'glassinteractive_theme_config', array(
        	'type'        => 'color',
        	'settings'    => 'color_palette_c1',
        	'label'       => __( 'Accent', 'essence-t1' ),
        	'description' => esc_attr__( 'Select the color that should become prominent color on the website. This will be a defining color, but will usually not appear as a background or large area. Instead, this will be placed strategically throughout the website and often used against the Primary color.', 'essence-t1' ),
        	'section'     => 'colors',
        	'default'     => $themePaletteDefault[0],
        	'transport'   => 'refresh',
        	'choices'     => array(
        		'alpha' => true,
				// 'palettes' => array(
				// 	$colorOne,
				// 	$colorTwo,
				// 	$colorThree,
				// 	$colorFour,
				// 	$colorFive,
				// 	$colorSix,
				// 	$colorSeven,
				// )
        	),
        	'output' => array(
        		array(
        			'element'  => '.iris-picker .iris-palette',
        			'property' => 'background-color',
        		    ),

        	    ),
                'priority'       => 2,
            )
        );
        
        //  Color Palette 2
        Kirki::add_field( 'glassinteractive_theme_config', array(
        	'type'        => 'color',
        	'settings'    => 'color_palette_c2',
        	'label'       => __( 'Primary', 'essence-t1' ),
        	'description' => esc_attr__( 'Select the color that will become the common background color and compliments the Accent color. Text will often sit on top of the primary color, so it is usually best to make it either very light or very dark. This will allow for either black or white text show well. For text color settings, see the "Typography" section of this Customizer tool.', 'essence-t1' ),
        	'section'     => 'colors',
        	'default'     => $themePaletteDefault[1],
        	'transport'   => 'refresh',
        	'choices'     => array(
        		'alpha' => true,
        	),
        	'output' => array(
        		array(
        			'element'  => '.iris-picker .iris-palette',
        			'property' => 'background-color',
        		    ),
        	    ),
                'priority'       => 2,
            ) 
        );
        
        //  Color Palette 3
        Kirki::add_field( 'glassinteractive_theme_config', array(
        	'type'        => 'color',
        	'settings'    => 'color_palette_c3',
        	'label'       => __( 'Secondary Color', 'essence-t1' ),
        	'description' => esc_attr__( 'This color will not be used with default settings, but is meant to be an additional option as you set up the various text and background colors.', 'essence-t1' ),
        	'section'     => 'colors',
        	'default'     => $themePaletteDefault[2],
        	'transport'   => 'refresh',
        	'choices'     => array(
        		'alpha' => true,
        	),
        	'output' => array(
        		array(
        			'element'  => '.iris-picker .iris-palette',
        			'property' => 'background-color',
        		    ),
        	    ),
                'priority'       => 2,
            ) 
        );

        //  Color Palette 4
        Kirki::add_field( 'glassinteractive_theme_config', array(
        	'type'        => 'color',
        	'settings'    => 'color_palette_c4',
        	'label'       => __( 'Alternative Light', 'essence-t1' ),
        	'description' => esc_attr__( 'This color will not be used with default settings, but is meant to be an additional option as you set up the various text and background colors.', 'essence-t1' ),
        	'section'     => 'colors',
        	'default'     => $themePaletteDefault[3],
        	'transport'   => 'refresh',
        	'choices'     => array(
        		'alpha' => true,
        	),
        	'output' => array(
        		array(
        			'element'  => '.iris-picker .iris-palette',
        			'property' => 'background-color',
        		    ),
        	    ),
                'priority'       => 2,
            ) 
        );

        //  Color Palette 5
        Kirki::add_field( 'glassinteractive_theme_config', array(
        	'type'        => 'color',
        	'settings'    => 'color_palette_c5',
        	'label'       => __( 'Alternative Dark', 'essence-t1' ),
        	'description' => esc_attr__( 'This color will not be used with default settings, but is meant to be an additional option as you set up the various text and background colors.', 'essence-t1' ),
        	'section'     => 'colors',
        	'default'     => $themePaletteDefault[4],
        	'transport'   => 'refresh',
        	'choices'     => array(
        		'alpha' => true,
        	),
        	'output' => array(
        		array(
        			'element'  => '.iris-picker .iris-palette',
        			'property' => 'background-color',
        		    ),
        	    ),
                'priority'       => 2,
            ) 
        );
        
        //  Color Palette 6
        Kirki::add_field( 'glassinteractive_theme_config', array(
        	'type'        => 'color',
        	'settings'    => 'color_palette_c6',
        	'label'       => __( 'High Contrast: Black (Text)', 'essence-t1' ),
        	'description' => esc_attr__( 'This swatch is reserved for black or a very dark gray that compliments the current palette. This will be the default text color in posts and can be used anytime a high-contrast dark color is needed.', 'essence-t1' ),
        	'section'     => 'colors',
        	'default'     => $themePaletteDefault[5],
        	'transport'   => 'refresh',
        	'choices'     => array(
        		'alpha' => true,
        	),
        	'output' => array(
        		array(
        			'element'  => '.iris-picker .iris-palette',
        			'property' => 'background-color',
        		    ),
        	    ),
                'priority'       => 2,
            ) 
        );

        //  Color Palette 7
        Kirki::add_field( 'glassinteractive_theme_config', array(
        	'type'        => 'color',
        	'settings'    => 'color_palette_c7',
        	'label'       => __( 'High Contrast: White (Post Background)', 'essence-t1' ),
        	'description' => esc_attr__( 'This should be pure white or a near-white (light gray, cream, light blue, etc) that compliments the current palette. This will be the default post background color and can be used anytime a high-contrast light color is needed.', 'essence-t1' ),
        	'section'     => 'colors',
        	'default'     => $themePaletteDefault[6],
        	'transport'   => 'refresh',
        	'choices'     => array(
        		'alpha' => true,
        	),
        	'output' => array(
        		array(
        			'element'  => '.iris-picker .iris-palette',
        			'property' => 'background-color',
        		    ),
        	    ),
                'priority'       => 2,
            ) 
        );

        //  Reset switch
        Kirki::add_field( 'glassinteractive_theme_config', array(
        	'type'        => 'toggle',
        	'settings'    => 'color_palette_reset',
        	'label'       => __( 'Reset the Color Paette', 'essence-t1' ),
        	'description' => esc_attr__( 'This will refresh the Customizer and restore the original theme default colors. NOTE: THIS WILL NOT SAVE ANY UNSAVED CHANGES. If you have other Customizer changes that have not yet been saved, please click the Publish button first, then return here to restore the original theme default colors.', 'essence-t1' ),
        	'section'     => 'colors',
        	'default'     => 'off',
        	'priority'    => 10,
        	'transport'   => 'postMessage',
        ) );
        


