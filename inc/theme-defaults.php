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
		$color2 = '#cbcecd',
		$color3 = '#798e91',
		$color4 = '#0c1c2c',
		$color5 = '#d4849a',
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

			'menu_bar_type_PALETTE' 					=> array(
																		$themePaletteDefaults[2]
																		),
			'menu_bar_type_DEFAULTS'					=> [
															'font-family'    => $default_font,
																	'font-style'		 => 'normal',
															'variant'        => 'regular',
															'font-size'      => '14px',
															'line-height'    => '1.5',
															'letter-spacing' => '0.01',
															'text-transform' => 'none',
															'text-align'     => 'left',
															],
			'menu_typography_override_box' 				=> '',
			// 'menubar_general_text_color'   				=> $themePaletteDefaults[1],
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
															'text-align'     => 'left',
															],
			'color_title_menubar' 						=> '',
			
			'site_title_pagehead_toggle'				=> 1,

			'body_text_color'							=> $themePaletteDefaults[5],

			'link_font'									=> [
															'font-family'    => 'inherit',
															'font-style'		 => '',
															'variant'        => 'regular',
															'font-size'      => 'inherit',
															'line-height'    => 'inherit',
															'letter-spacing' => 'inherit',
															'text-transform' => 'inherit',
															'text-align'     => 'inherit',
															],
			'link_color'								=> $themePaletteDefaults[0],
			
			'footer_typography'							=>	[
				'font-family'    => $default_font,
				'font-style'		 => 'normal',
				'variant'        => 'regular',
				'font-size'      => '14px',
				'line-height'    => '1.5',
				'letter-spacing' => '0.01',
				'text-transform' => 'none',
				'text-align'     => 'left',
				],
				'footer_text_color'							=> $themePaletteDefaults[5],
				
				'footer_link_typography'							=>	[
					'font-family'    => 'inherit',
					'font-style'		 => '',
					'variant'        => 'regular',
					'font-size'      => 'inherit',
					'line-height'    => 'inherit',
					'letter-spacing' => 'inherit',
					'text-transform' => 'inherit',
					'text-align'     => 'inherit',
					],
					'footer_link_color'							=> $themePaletteDefaults[0],

		), 

		'branding' 										=> array(
			'show_logo'									=>	1,
			'menubar_width'								=>	75,
			'menubar_logo_cont_shape_adjustment'		=>	49,
			'menubar_logo_cont_vertical_adjustment'		=>	8,
			'menubar_logo_padding'						=> 3,
			'menubar_logo_horizontal_adjustment'		=> 0,
			'menubar_logo_vertical_adjustment'			=> 0,
			'large_page_title_horizonal_adjustment'		=> 0,
			'large_page_title_vertical_adjustment'		=> 0,
			'page_title_font' 							=> [
															'font-family'    => $default_font,
															'variant'        => 'bold',
															'font-size'      => '72px',
															'line-height'    => '1.5',
															'letter-spacing' => '0.01em',
															'text-transform' => 'none',
															'text-align'     => 'center',
															],
			'Site_title_color_pagehead'					=> '',
			// Page Description Horizonral must be half letter-spacing to center
			'page_description_horizontal_adjustment'		=> '0.45',	
			'page_description_vertical_adjustment'		=> '-18px',	
			'description_font'							=> [
															'font-family'    => $default_font,
															'font-style'     => 'normal',
															'font-weight'	 => '300',
															'variant'        => 'regular',
															'font-size'      => '18px',
															'line-height'    => '1.5',
															'letter-spacing' => '0.9em',
															'text-transform' => 'none',
															'text-align'     => 'center',
															],		
			'site_description_color_pagehead'			=> '',
		), 

		'footer' 										=> array(
			'footer_backgroundcolor'					=>	'',
			'copyright_text'							=>	'Copyrights &copy; ' . date('Y') . ' All Rights Reserved.',
		), 
		'footer-photo-cta'									=> array(
			'footer_photo_cta_on_off_toggle_setting'			=> '1', // Must be set in initial theme activation, as well. see setup.php
			'footer_photo_cta_text_editor_setting'				=> '<strong>Hire Us!</strong><br>573-425-3245<br>sales@dream-productions.com',

			'photo_cta_photo_one_width'							=> '150',
			'photo_cta_photo_one_cont_shape_adjustment' 		=> 0,
			'photo_cta_photo_one_cont_vertical_adjustment' 		=> 0,
			'photo_cta_photo_one_cont_margin'					=> 0,
			'photo_cta_photo_one_cont_horizontal_adjustment' 	=> 0,
			'photo_cta_photo_one_cont_zindex_adjustment'		=> 0,
			'photo_cta_photo_one_size_adjustment'  				=> 1,
			'photo_cta_photo_one_vertical_adjustment'  			=> 0,
			'photo_cta_photo_one_horizontal_adjustment'  	 	=> 0,			

			'photo_cta_photo_two_width'							=> '150',
			'photo_cta_photo_two_cont_shape_adjustment' 		=> 0,
			'photo_cta_photo_two_cont_vertical_adjustment' 		=> 0,
			'photo_cta_photo_two_cont_margin'					=> 0,
			'photo_cta_photo_two_cont_horizontal_adjustment' 	=> 0,
			'photo_cta_photo_two_cont_zindex_adjustment'		=> 0,
			'photo_cta_photo_two_size_adjustment'  				=> 1,
			'photo_cta_photo_two_vertical_adjustment'  			=> 0,
			'photo_cta_photo_two_horizontal_adjustment'  		=> 0,

			'photo_cta_photo_three_width'						=> '150',
			'photo_cta_photo_three_cont_shape_adjustment' 		=> 0,
			'photo_cta_photo_three_cont_vertical_adjustment' 	=> 0,
			'photo_cta_photo_three_cont_margin'					=> 0,
			'photo_cta_photo_three_cont_horizontal_adjustment' 	=> 0,
			'photo_cta_photo_three_cont_zindex_adjustment'		=> 0,
			'photo_cta_photo_three_size_adjustment'  			=> 1,
			'photo_cta_photo_three_vertical_adjustment'  		=> 0,
			'photo_cta_photo_three_horizontal_adjustment'  		=> 0,
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
	$colorOne = get_theme_mod( 'color_palette_c1', $themePaletteDefaults[0] );
	$colorTwo = get_theme_mod( 'color_palette_c2', $themePaletteDefaults[1] );
	$colorThree = get_theme_mod( 'color_palette_c3', $themePaletteDefaults[2] );
	$colorFour = get_theme_mod( 'color_palette_c4', $themePaletteDefaults[3] );
	$colorFive = get_theme_mod( 'color_palette_c5', $themePaletteDefaults[4] );
	$colorSix = get_theme_mod( 'color_palette_c6', $themePaletteDefaults[5] );
	$colorSeven = get_theme_mod( 'color_palette_c7', $themePaletteDefaults[6] );

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
	// If this in called by the Cutomizer, do not populate the following
	// Also, if this is not being called for 
	// if(!is_admin()){
			$header_text_color = get_header_textcolor();
			// global $color_palette_css ;
			$color_palette_css = '/* - Color Palett */
			:root {
					/* Color Pallet "Color Serve" from https://www.design-seeds.com/tag/black/ */
					--color-accent: '. $themePalette[0] . ';
					--color-primary: '. $themePalette[1] . ';
					--color-primary-dark: rgb(var(--color-primary), 0.5);
					--color-secondary: '. $themePalette[2] . ';
					--color-secondary-dark: rgb(211, 211, 199);
					--color-alt-compliment: '. $themePalette[3] . ';
					--color-alt-contrast: '. $themePalette[4] . ';
					--color-black: '. $themePalette[5] . ';
					--color-white: '. $themePalette[6] . ';
				} 
				/* User Overrides */
				.site-title a,
					.site-description,
					.page-title {
						color: #' . esc_attr( $header_text_color ) . ';
					}';

			wp_register_style( 'set_palette', false );
			wp_enqueue_style( 'set_palette' );
			wp_add_inline_style( 'set_palette', $color_palette_css);
	// };
};
