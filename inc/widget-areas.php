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
			'name'          => esc_html__( 'Sidebar', 'gi-essence-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gi-essence-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	
	// Footer Widgets
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column One', 'gi-essence-theme' ),
			'id'            => 'footer-col-1',
			'description'   => esc_html__( 'Add footer widgets here.', 'gi-essence-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Two', 'gi-essence-theme' ),
			'id'            => 'footer-col-2',
			'description'   => esc_html__( 'Add footer widgets here.', 'gi-essence-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Three', 'gi-essence-theme' ),
			'id'            => 'footer-col-3',
			'description'   => esc_html__( 'Add footer widgets here.', 'gi-essence-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gi_essence_theme_widgets_init' );