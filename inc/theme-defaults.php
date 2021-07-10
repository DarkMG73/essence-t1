<?php
/**
 *  This contains all of the default 
 *  settings for this specific theme
 */
// 

	$default_font = '"Kodchasan"';

 	//  Default color palette
	 global $themePaletteDefaults;
	 $themePaletteDefaults = array(
		
		$color1 = '#528212', 
		$color2 = '#ffffff',
		$color3 = '#798e91',
		$color4 = '#d4849a',
		$color5 = '#0c1c2c',
		$color6 = '#373737',
		$color7 = '#ffffff',
		
		);

	//  Default color palette
	global $generalThemeDefaults;
	$generalThemeDefaults = array(
		
		'header' => array(
			'header_background_color'					=>	'',
		), 

		'background' => array(
			'body_color'								=>	'',
			'content_color'								=>	'',
		), 

		'typography' => array(
			'body_typography'							=>	[
															'font-family'    => $default_font,
															'font-style'		 => 'normal',
															'variant'        => 'regular',
															'font-size'      => '14px',
															'line-height'    => '1.5',
															'letter-spacing' => '0.01',
															'text-transform' => 'none',
															'text-align'     => 'left',
															],
	
			'menu_bar_type_defaults'					=> [
															'font-family'    => $default_font,
																	'font-style'		 => 'normal',
															'variant'        => 'regular',
															'font-size'      => '14px',
															'line-height'    => '1.5',
															'letter-spacing' => '0.01',
															'text-transform' => 'none',
															],
			// 'menubar_general_text_color'   				=> '',
			'menubar-logo_horizonal_adjustment'			=> 0,
			'menubar-logo_vertical_adjustment'			=> 0,

			'site_title_font_setting' 					=> [
															'font-family'    => $default_font,
															'font-style'		 => 'normal',
															'variant'        => 'regular',
															'font-size'      => '14px',
															'line-height'    => '1.5',
															'letter-spacing' => '0.01',
															'text-transform' => 'none',
															],
		  	'site_title_menubar_typography_override_box' 	=> '',
			'color_title_menubar' 						=> '',
			
			'site_title_pagehead_toggle'				=> 1,

			'body_text_color'							=> '',

			'link_font'									=> [
															'font-family'    => 'inherit',
															'font-style'		 => '',
															'variant'        => 'regular',
															'font-size'      => 'inherit',
															'line-height'    => 'inherit',
															'letter-spacing' => 'inherit',
															'text-transform' => 'inherit',
															],
			'link_color'								=> '',
			
			'footer_typography'							=>	[
				'font-family'    => $default_font,
				'font-style'		 => 'normal',
				'variant'        => 'regular',
				'font-size'      => '14px',
				'line-height'    => '1.5',
				'letter-spacing' => '0.01',
				'text-transform' => 'none',
				'text-align'     => 'center',
				],
				'footer_text_color'							=> '',
				
				'footer_link_typography'							=>	[
					'font-family'    => 'inherit',
					'font-style'		 => '',
					'variant'        => 'regular',
					'font-size'      => 'inherit',
					'line-height'    => 'inherit',
					'letter-spacing' => 'inherit',
					'text-transform' => 'inherit',
					],
					'footer_link_color'							=> '',

		), 

		'branding' 										=> array(
			'show_logo'									=>	1,
			'menubar_width'								=>	75,
			'menubar_logo_cont_shape_adjustment'		=>	49,
			'menubar_logo_cont_vertical_adjustment'		=>	3,
			'menubar_logo_padding'						=> 3,
			'menubar_logo_horizontal_adjustment'		=> 0,
			'menubar_logo_vertical_adjustment'			=> 0,
			'large_page_title_horizonal_adjustment'		=> 0,
			'large_page_title_vertical_adjustment'		=> 0,
			'page_title_font' 							=> [
															'font-family'    => $default_font,
															'variant'        => 'bold',
															'line-height'    => '1.5',
															'letter-spacing' => '0.01em',
															'text-transform' => 'none',
															'text-align'     	=> 'center',
															],
			'page_title_font_size_percent' 							 => [100],
			'page_title_font_variant' 							 		=> '',
			'site_title_color_pagehead'					 			  => '',
			'large_title_typography_override_box'    		   => '',
			'page_description_horizontal_adjustment'		=> '0',	
			'page_description_vertical_adjustment'		=> '3',	
			'description_font'												=> [
															'font-family'      => $default_font,
															'font-style'        => 'normal',
															'font-weight'	 => '300',
															'variant'           => 'regular',
															'line-height'    => '1.5',
															'letter-spacing' => '0.9em',
															'text-transform' => 'none',
															'text-align'       => 'center',
															],		
			'page_description_font_size_percent' 							=> [100],
			'site_description_font_variant' 						=> '',
			'site_description_color_pagehead'			=> '',
			'site_description_typography_override_box'    => '',
		), 

		'footer' 										=> array(
			'footer_backgroundcolor'					=>	'',
			'copyright_text'							=>	'&copy; ' . date('Y') . ' All Rights Reserved.',
			'footer_tos_on_off_toggle_setting'	   					 =>  0,
			'footer_privacy_page_on_off_toggle_setting'		  =>  1,   // Must be set in initial theme activation, as well. See setup.php
		), 
		'footer-photo-cta'													   		 => array(
			'footer_photo_cta_on_off_toggle_setting'				  => '1',   // Must be set in initial theme activation, as well. See setup.php
			'footer_photo_cta_text_editor_setting'				   		 => '',   // This is also listed as the default on footer.php. It must be for new installations of the theme to render the default on the frontend
			'photo_cta_photo_one_width'								 	   => '100',
			'photo_cta_photo_one_cont_shape_adjustment' 		=> 0,
			'photo_cta_photo_one_cont_vertical_adjustment' 		=> 0,
			'photo_cta_photo_one_cont_margin'						  => 0,
			'photo_cta_photo_one_cont_horizontal_adjustment'  => 0,
			'photo_cta_photo_one_cont_zindex_adjustment'	   => 0,
			'photo_cta_photo_one_size_adjustment'  					 => 1,
			'photo_cta_photo_one_vertical_adjustment'  			   => 0,
			'photo_cta_photo_one_horizontal_adjustment'  	 	 => 0,			

			'photo_cta_photo_two_width'									  => '100',
			'photo_cta_photo_two_cont_shape_adjustment' 	   => 0,
			'photo_cta_photo_two_cont_vertical_adjustment' 	   => 0,
			'photo_cta_photo_two_cont_margin'						  => 0,
			'photo_cta_photo_two_cont_horizontal_adjustment' => 0,
			'photo_cta_photo_two_cont_zindex_adjustment'	   => 0,
			'photo_cta_photo_two_size_adjustment'  					 => 1,
			'photo_cta_photo_two_vertical_adjustment'  			   => 0,
			'photo_cta_photo_two_horizontal_adjustment'  		 => 0,

			'photo_cta_photo_three_width'								   => '100',
			'photo_cta_photo_three_cont_shape_adjustment' 		=> 0,
			'photo_cta_photo_three_cont_vertical_adjustment' 	=> 0,
			'photo_cta_photo_three_cont_margin'						   => 0,
			'photo_cta_photo_three_cont_horizontal_adjustment' 	=> 0,
			'photo_cta_photo_three_cont_zindex_adjustment'		=> 0,
			'photo_cta_photo_three_size_adjustment'  				  => 1,
			'photo_cta_photo_three_vertical_adjustment'  			=> 0,
			'photo_cta_photo_three_horizontal_adjustment'  		  => 0,
		),
	);


 /**
 *  Set the color palette based on Customizer 
 *  settings or the hard-coded default
 */
function set_color_pallet(){

	global $themePaletteDefaults;
				
	//  Grab the custom palette colors if 
	//  they exists. Otherwise use the default palette.
	$colorOne = esc_html(get_theme_mod( 'color_palette_c1', $themePaletteDefaults[0] ) );
	$colorTwo = esc_html(get_theme_mod( 'color_palette_c2', $themePaletteDefaults[1] ) );
	$colorThree = esc_html(get_theme_mod( 'color_palette_c3', $themePaletteDefaults[2] ) );
	$colorFour = esc_html(get_theme_mod( 'color_palette_c4', $themePaletteDefaults[3] ) );
	$colorFive = esc_html(get_theme_mod( 'color_palette_c5', $themePaletteDefaults[4] ) );
	$colorSix = esc_html(get_theme_mod( 'color_palette_c6', $themePaletteDefaults[5] ) );
	$colorSeven = esc_html(get_theme_mod( 'color_palette_c7', $themePaletteDefaults[6] ) );

	// Build the palette array
	global $themePalette;
	$themePalette = array(
		
					$colorOne,
					$colorTwo,
					$colorThree,
					$colorFour,
					$colorFive,
					$colorSix,
					$colorSeven,
					
				);
				return $themePalette;
};


function post_color_pallet(){

	$themePalette = set_color_pallet();
			$color_palette_css = '/* - Color Palett */
			:root {
					/* Color Pallet "Color Serve" from https://www.design-seeds.com/tag/black/ */
					--color-accent: '. $themePalette[0] . ';
					--color-primary: '. $themePalette[1] . ';
					--color-secondary: '. $themePalette[2] . ';
					--color-alt-compliment: '. $themePalette[3] . ';
					--color-alt-contrast: '. $themePalette[4] . ';
					--color-black: '. $themePalette[5] . ';
					--color-white: '. $themePalette[6] . ';
			}';

			wp_register_style( 'set_palette', false );
			wp_enqueue_style( 'set_palette' );
			wp_add_inline_style( 'set_palette', $color_palette_css);
};
