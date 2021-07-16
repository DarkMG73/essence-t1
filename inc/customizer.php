<?php
/**
 * essence-t1 Theme Customizer
 *
 * @package essence-t1
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function glassinteractive_essence_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'glassinteractive_essence_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'glassinteractive_essence_theme_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'glassinteractive_essence_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function glassinteractive_essence_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function glassinteractive_essence_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function glassinteractive_essence_theme_customize_preview_js() {
	wp_enqueue_script( 'gi-essence-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'glassinteractive_essence_theme_customize_preview_js' );

/**
 * Customizer admin styles and scripts
 */
function glassinteractive_enqueue_customizer_stylesheet() {
	wp_register_style( 'gi-essence-theme-customizer-css', get_template_directory_uri() . '/css/customizer.css', NULL, _S_VERSION, 'all' );
	wp_enqueue_style( 'gi-essence-theme-customizer-css' );
}
add_action( 'customize_controls_print_styles', 'glassinteractive_enqueue_customizer_stylesheet', 10, 2 ); 

function glassinteractive_enqueue_customizer_admin_scripts() {
	wp_register_script( 'gi-essence-theme-customizer-admin-js', get_template_directory_uri() . '/js/customizer-admin.js', NULL, _S_VERSION, 'all' );
	wp_enqueue_script( 'gi-essence-theme-customizer-admin-js' );
}
add_action( 'customize_controls_print_scripts', 'glassinteractive_enqueue_customizer_admin_scripts', 10, 2 ); 

function glassinteractive_essence_theme_customize_control_js() {
	wp_enqueue_script( 'gi-essence-theme-customize-controls', get_template_directory_uri() . '/js/customizer-controls.js', NULL, _S_VERSION, true );
}
add_action( ' customize_controls_enqueue_scripts', 'glassinteractive_essence_theme_customize_control_js' );
