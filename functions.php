<?php
/**
 * gi-essence-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gi-essence-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

define( 'gi_DEV_MODE', true);

// function  removeHeadCSS(){
// 	unset($set_color_pallet);
// }
// add_action('wp_sitemaps_init', 'removeHeadCSS', 1);

/****************
 * Includes
 ***************/
/* Pre-Init setup */
include( get_theme_file_path( '/inc/setup.php') );

/* Set theme defaults and make availble where needed*/
include( get_theme_file_path( '/inc/theme-defaults.php') );

/* Add frontend styles and scripts */
include( get_theme_file_path( '/inc/frontend-specific/enqueue.php') );
include( get_theme_file_path( '/inc/customizer/customizer-output.php') );


/* Widgets */
include( get_theme_file_path( '/inc/widget-areas.php') );

/* Custom Header feature */
require get_template_directory() . '/inc/custom-header.php';

/*Custom template tags for this theme */
require get_template_directory() . '/inc/template-tags.php';

/* Theme enhancement functions */
require get_template_directory() . '/inc/template-functions.php';

/* Customizer additions */
require get_template_directory() . '/inc/customizer.php';

/* Kirki Customizer Plugin */
include( get_theme_file_path( '/inc/plugins/kirki/kirki.php') );
include( get_theme_file_path( '/inc/customizer/kirki-customizations/kirki-config.php') );

/* Add avatars */
include( get_theme_file_path( '/inc/admin/avatar.php') );

/* TGM Reccomend Plugins */
require_once( get_theme_file_path( '/inc/plugins/tgm-reccomend-plugins/class-tgm-plugin-activation.php' ) );
include( get_theme_file_path( '/inc/register-plugins.php' ) );

/* Load Jetpack compatibility file */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Nav files */
include( get_theme_file_path( '/inc/custom-nav-walker.php') );
include( get_theme_file_path( '/inc/frontend-specific/pagination.php') );


/****************
 * Hooks
 ***************/

/****************
 * Shortcodes
 ***************/
