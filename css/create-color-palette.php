<?php
/**
 *  Set the color palette based on Customizer 
 *  settings or the hard-coded default
 */

function set_color_pallet($output_content = false){
    
//  Default color palette
global $themePaletteDefault;
$themePaletteDefault = array(
    
            $color1 = '#528212', 
        	$color2 = '#cbcecd',
        	$color3 = '#798e91',
        	$color4 = '#0c1c2c',
        	$color5 = '#d4849a',
        	$color6 = '#373737',
        	$color7 = '#ffffff',
            
			);
            
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

		// If this in called by the Cutomizer, do not populate the following
		// Also, if this is not being called for 
		if(!is_admin()){
				$header_text_color = get_header_textcolor();

				?>
				<style>/* - Color Palett */
				:root {
						/* Color Pallet "Color Serve" from https://www.design-seeds.com/tag/black/ */
						--color-accent: <?php echo $colorOne ?>;
						--color-primary: <?php echo $colorTwo ?>;
						--color-primary-dark: rgb(var(--color-primary), 0.5);
						--color-secondary: <?php echo $colorThree ?>;
						--color-secondary-dark: rgb(211, 211, 199);
						--color-alt-compliment: <?php echo $colorFour ?>;
						--color-alt-contrast: <?php echo $colorFive ?>;
						--color-black: <?php echo $colorSix ?>;
						--color-white: <?php echo $colorSeven ?>;
					} 
					/* User Overrides */
					/* .site-title a,
						.site-description,
						.page-title {
							color: #' . esc_attr( $header_text_color ) . ';
						} */

				</style>
				<?php
		};

}