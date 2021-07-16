<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function glassinteractive_essence_theme_widgets_init() {

	// Sidebar
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'essence-t1' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'essence-t1' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	
	// Footer Widgets
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column One', 'essence-t1' ),
			'id'            => 'footer-col-1',
			'description'   => esc_html__( 'Add footer widgets here.', 'essence-t1' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Two', 'essence-t1' ),
			'id'            => 'footer-col-2',
			'description'   => esc_html__( 'Add footer widgets here.', 'essence-t1' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Three', 'essence-t1' ),
			'id'            => 'footer-col-3',
			'description'   => esc_html__( 'Add footer widgets here.', 'essence-t1' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'glassinteractive_essence_theme_widgets_init' );