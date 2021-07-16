<?php
// Grab the panels
include('branding-settings.php');
include('colors-settings.php');
include('typography-settings.php');
include('header-settings.php');
include('background-settings.php');
include('home-page-settings.php');
include('footer-settings.php');


// Theme config
Kirki::add_config( 'glassinteractive_theme_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


// Customizer AJAX requests
 add_action( 'wp_ajax_color_palette_reset', 'color_palette_reset_callback' );
 add_action( 'wp_ajax_nopriv_color_palette_reset', 'color_palette_reset_callback' );
 function color_palette_reset_callback() {

	$request = isset( $_POST['request'] ) ?  $_POST['request'] : isset( $_POST['request'] );

	if($request == false) {

		$response['status'] = 'error';

	} else if($request == 'reset'){

		// Reset each color in the palette
		remove_theme_mod( 'color_palette_c1' );
		remove_theme_mod( 'color_palette_c2' );
		remove_theme_mod( 'color_palette_c3' );
		remove_theme_mod( 'color_palette_c4' );
		remove_theme_mod( 'color_palette_c5' );
		remove_theme_mod( 'color_palette_c6' );
		remove_theme_mod( 'color_palette_c7' );

		$response['status'] = 'success';
	} else{

		$response['status'] = 'nochange';
	}

	header('Content-type: application/json');
	echo json_encode($response);
   wp_die(); 
 }