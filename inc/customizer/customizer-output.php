<?php
/* 
 This theme uses the Kirky Customizer framework, so most CSS output to the fronend is handled by Kirky. Any custom entries are passed along here.
----------------------------*/

add_action( 'wp_head', 'glassinteractive_customizer_css');
function glassinteractive_customizer_css() {

	$site_title_manubar_font_family_override_box = '';
	if( !empty( get_theme_mod( 'site_title_manubar_font_family_override_box' ) ) ) {
		$site_title_manubar_font_family_override_box = '.site-branding .site-title a { font-family: '. esc_attr(get_theme_mod( "site_title_manubar_font_family_override_box") ) .'; }';
	}

	$large_title_font_family_override_box = '';
	if( !empty( get_theme_mod( 'large_title_font_family_override_box' ) ) ) {
		$large_title_font_family_override_box = '#central-container #site-welcome-container #welcome-title-wrap .page-title { font-family: '. esc_attr(get_theme_mod( "large_title_font_family_override_box") ) .'; }';
	}

	$site_description_font_family_override_box = '';
	if( !empty( get_theme_mod( 'site_description_font_family_override_box' ) ) ) {
		$site_description_font_family_override_box = '#central-container #site-welcome-container #welcome-title-wrap .site-description { font-family: '. esc_attr(get_theme_mod( "site_description_font_family_override_box") ) .'; }';
	}

	?>

	<style>

		<?php echo esc_html($site_title_manubar_font_family_override_box ); ?>
		<?php echo esc_html($large_title_font_family_override_box); ?>
		<?php echo esc_html($site_description_font_family_override_box); ?>

	</style>

	<?php

}
