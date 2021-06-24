<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gi_essence_theme_widgets_init() {

	// Sidebar
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar''essencetheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.''essencetheme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	
	// Footer Widgets
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column One''essencetheme' ),
			'id'            => 'footer-col-1',
			'description'   => esc_html__( 'Add footer widgets here.''essencetheme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Two''essencetheme' ),
			'id'            => 'footer-col-2',
			'description'   => esc_html__( 'Add footer widgets here.''essencetheme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Three''essencetheme' ),
			'id'            => 'footer-col-3',
			'description'   => esc_html__( 'Add footer widgets here.''essencetheme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gi_essence_theme_widgets_init' );