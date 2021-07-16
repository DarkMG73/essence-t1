<?php
/**
 * Define the colors.
 */

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'glassinteractive_essence_theme_scripts' );

function glassinteractive_essence_theme_scripts() {

	$uri = get_theme_file_uri();
	$ver = glassinteractive_DEV_MODE ? time() : false; 
	
	/****************************
	 *           Fonts
	 ****************************/
	wp_register_style( 'glassinteractive_google_font', 'https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap', [],  $ver);
	wp_enqueue_style('glassinteractive_google_font');

	
	/****************************
	 *   Set the Color Palette
	 ****************************/
	post_color_pallet();


	/****************************
	 *     Libraries / Plugins
	 ****************************/
	wp_register_script( 'theme-scripts',  $uri.'/js/scripts.js', ['jquery'] ,  $ver);
	wp_enqueue_script('theme-scripts');
	
	wp_register_style( 'normalize',  $uri.'/css/normalize.css', [] ,  $ver);
	wp_enqueue_style('normalize');
	
	wp_register_style( 'main-menu-2',  $uri.'/css/navigation/main-menu-2.css', [] ,  $ver);
	wp_enqueue_style('main-menu-2');

	wp_register_script( 'main-menu-2-js',  $uri.'/js/navigation/main-menu-2.js', ['jquery'] ,  $ver);
	wp_enqueue_script('main-menu-2-js');

	wp_register_script( 'mini-masonry',  $uri.'/js/MiniMasonry.js-master/build/minimasonry.min.js', [] ,  $ver);
	wp_enqueue_script('mini-masonry');
	
	wp_register_style( 'glassinteractive_animate',  $uri.'/css/animate.css', [] ,  $ver);
	wp_enqueue_style('glassinteractive_animate');

	wp_register_style( 'glassinteractive_magnific-popup',  $uri.'/css/magnific-popup.css', [],  $ver );
	wp_enqueue_style('glassinteractive_magnific-popup');

	wp_register_style( 'glassinteractive_font-icons',  $uri.'/css/font-icons.css', [],  $ver );
	wp_enqueue_style('glassinteractive_font-icons');

	wp_enqueue_style( 'essence-t1-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'essence-t1-style', 'rtl', 'replace' );

	wp_enqueue_script( 'essence-t1-navigation', get_template_directory_uri() . '/js/navigation/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Buddypress CSS (If needed)
	if ( function_exists('bp_is_active') ) {
		wp_register_style( 'gi-buddypress-style',  $uri.'/css/buddypress.css', [] ,  $ver);
		wp_enqueue_style('gi-buddypress-style');
	  }


	/****************************
	 *           Layout
	 ****************************/
	wp_register_style( 'glassinteractive_responsive',  $uri.'/css/responsive.css', [] ,  $ver);
	wp_enqueue_style('glassinteractive_responsive');

	/*** Right-to_left ***/
    wp_register_style( 'glassinteractive_font_icons_rtl', $uri . '/css/font-icons-rtl.css' );
	wp_register_style( 'glassinteractive_responsive_rtl', $uri . '/css/responsive-rtl.css' );

	if( is_rtl() ){
        wp_enqueue_style( 'glassinteractive_font_icons_rtl' );
        wp_enqueue_style( 'glassinteractive_responsive_rtl' );
    }
}

