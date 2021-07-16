<?php

	/**
     ******* One-Time Theme Settings **********
	 * Sets up theme defaults only when the theme if first activated
	 */
add_action('after_switch_theme', 'setup_theme_options');
function setup_theme_options () {

    delete_option('first_theme_activation');
  if(get_option('first_theme_activation') === false){
    // Set a flag if the theme activation happened
    //This is utilized elsewhere in the theme
    add_option('first_theme_activation', true, '', false);

    // Set footer CTA start state in th DB (see footer-settings.php)
    set_theme_mod('footer_photo_cta_on_off_toggle_setting',  1);

        // Set footer privacy page start state in th DB (see footer-settings.php)
        set_theme_mod('footer_privacy_page_on_off_toggle_setting',  1);
    }
  }


if ( ! function_exists( 'glassinteractive_essence_theme_setup' ) ) :
	/**
     ******* Theme Support Setup **********
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function glassinteractive_essence_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on essence-t1, use a find and replace
		 * to change 'essence-t1' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'essence-t1', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

        // Add a new image size
        add_image_size( 'gi-post-image',  860, 575, false);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'glassinteractive_essence_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

        // Support for selective refresh for widgets.
        add_theme_support( 'custom-logo', array(
            'height'      => 512,
            'width'       => 769,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );
 
        $default_args = array(
            // 'default-image'          => get_theme_file_uri().'/assets/images/demo-images/header_image-birds_on_wire.jpg',
            'random-default'         => false,
            'width'                  => 1280,
            'min-height'                 => 360,
            'flex-height'            => true,
            'flex-width'             => true,
            'default-text-color'     => '',
            'header-text'            => true,
            'uploads'                => true,
            'wp-head-callback'       => '',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
        );
        add_theme_support( 'custom-header', $default_args );
        
         // Support for menus.
        register_nav_menu( 'menu-1', __( 'Primary Menu', 'essence-t1' ) );
        // register_nav_menu( 'secondary', __( 'Secondary Menu', 'essence-t1' ) );
     

        /**
		 * Starter Content.
		 *
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support
		 */
        // add_theme_support( 'starter-content', [
        //     'widgets'                   =>  [
        //         // Place three core-defined widgets in the sidebar area.
        //         'glassinteractive_sidebar'            =>  [
        //             'text_business_info', 'search', 'text_about',
        //         ]
        //     ],
    
        //     // Create the custom image attachments used as post thumbnails for pages.
        //     'attachments'               =>  [
        //         'image-about'           =>  [
        //             'post_title'        =>  __( 'About', 'essence-t1' ),
        //             'file'              =>  'assets/images/about/1.jpg', // URL relative to the template directory.
        //         ],
        //     ],
    
        //     // Specify the core-defined pages to create and add custom thumbnails to some of them.
        //     'posts'                     =>  [
        //         'home'                  =>  array(
        //             'thumbnail'         => '{{image-about}}',
        //         ),
        //         'about'                 =>  array(
        //             'thumbnail'         => '{{image-about}}',
        //         ),
        //         'contact'               => array(
        //             'thumbnail'         => '{{image-about}}',
        //         ),
        //         'blog'                  => array(
        //             'thumbnail'         => '{{image-about}}',
        //         ),
        //         'homepage-section'      => array(
        //             'thumbnail'         => '{{image-about}}',
        //         ),
        //     ],
    
        //     // Default to a static front page and assign the front and posts pages.
        //     'options'                   =>  [
        //         'show_on_front'         => 'page',
        //         'page_on_front'         => '{{home}}',
        //         'page_for_posts'        => '{{blog}}',
        //     ],
    
        //     // Set the front page section theme mods to the IDs of the core-registered pages.
        //     'theme_mods'                =>  [
        //         'glassinteractive_facebook_handle'    =>  'essencetheme',
        //         'glassinteractive_twitter_handle'     =>  'essencetheme',
        //         'glassinteractive_instagram_handle'   =>  'essencetheme',
        //         'glassinteractive_email'              =>  'essencetheme',
        //         'glassinteractive_phone_number'       =>  'essencetheme',
        //         'glassinteractive_header_show_search' =>  'yes',
        //         'glassinteractive_header_show_cart'   =>  'yes',
        //     ],
    
        //     // Set up nav menus for each of the two areas registered in the theme.
        //     'nav_menus'                 =>  [
        //         // Assign a menu to the "top" location.
        //         'primary'               =>  array(
        //             'name'              =>  __( 'Primary Menu', 'essence-t1' ),
        //             'items'             =>  array(
        //                 'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
        //                 'page_about',
        //                 'page_blog',
        //                 'page_contact',
        //             ),
        //         ),
    
        //         // Assign a menu to the "social" location.
        //         'secondary'             =>  array(
        //             'name'              =>  __( 'Secondary Menu', 'essence-t1' ),
        //             'items'             =>  array(
        //                 'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
        //                 'page_about',
        //                 'page_blog',
        //                 'page_contact',
        //             ),
        //         ),
        //     ],
        // ]);
    


        /**
        * Add support for Woo Commerce.
        *
        * @link https://docs.woocommerce.com/document/woocommerce-theme-developer-handbook/
        */
        add_theme_support( 'woocommerce');


        /** 
        * Add support for Quads Ads.
        *
        * @link https://wordpress.org/plugins/quick-adsense-reloaded/
        */
        if (function_exists('quads_register_ad')){
            quads_register_ad( array(
                'location' => 'glassinteractive_header', 
                'description' => 'Theme Header position') );
            }


	}
endif;
add_action( 'after_setup_theme', 'glassinteractive_essence_theme_setup' );



/**
 ******* CONTENT WIDTH **********
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function glassinteractive_essence_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'glassinteractive_essence_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'glassinteractive_essence_theme_content_width', 0 );



/**
 *** Ensure Support for wp_body_open for older WP versions ***
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if ( ! function_exists( 'wp_body_open' ) ) {
    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support WordPress versions prior to 5.2.0.
     */
    function wp_body_open() {
        /**
         * Triggered after the opening <body> tag.
         */
        do_action( 'wp_body_open' );
    }
}

/**
 *** "Read More" Default Replacment ***
 *
 * @global $post
 * 
 */

/**Replaces the excerpt "Read More" text by a link */
function new_excerpt_more($more) {
    global $post;
 return ;
}
add_filter('excerpt_more', 'new_excerpt_more');

/** Force read more link on all excerpts */
 function get_read_more_link() {
    global $post;
     $excerpt = get_the_excerpt();
     return '<p>' . $excerpt . '&nbsp;<a class="moretag" href="'. get_permalink($post->ID) . '"> More <span class="icon-long-arrow-right" ></span></a></p>';
 }
 add_filter( 'the_excerpt', 'get_read_more_link' );