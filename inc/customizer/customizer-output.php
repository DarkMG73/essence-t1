<?php
/* 
 This theme uses the Kirky Customizer framework, so most CSS output to the fronend is handled by Kirky. Any custom entries are passed along here.
----------------------------*/

add_action( 'wp_head', 'gi_customizer_css');
function gi_customizer_css() {

	?>

	<style type="text/css">

.site-branding .site-title a { font-family: <?php echo esc_html__(get_theme_mod( 'site_title_manubar_font_family_override_box' )); ?> ; }

		#central-container #site-welcome-container #welcome-title-wrap .page-title { font-family: <?php echo esc_html__(get_theme_mod( 'large_title_font_family_override_box' )); ?> ; }
		
		#central-container #site-welcome-container #welcome-title-wrap .site-description { font-family: <?php echo esc_html__(get_theme_mod( 'site_description_font_family_override_box' )); ?> ; }

	</style>

	<?php


}
