<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package essence-t1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Stylesheets & Scripts
	============================================= -->

	<?php wp_head(); ?>

	<!-- ======================================== -->
</head>

<body <?php body_class(); ?> 
			itemscope itemtype="https://schema.org/WebPage">

	<?php wp_body_open(); ?>
	
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'essence-t1' ); ?></a>

	<div class="color-overlay"></div>

	<!-- Document Container
    ============================================= -->
	<div id="page-container" class="container site">

		<div class="color-overlay"></div>

		<header id="masthead" class="container site-header">
			<div class="color-overlay"></div>
			<div class="site-branding">
				<?php if ( true == get_theme_mod( 'logo_menubar_toggle_setting', true ) ) : ?>
				<div id="custom-logo-wrap">
					<div class="image-overlay"></div>
					<div class="color-overlay"></div>
					<div class="custom-logo-positioning-wrap-x">
						<div class="custom-logo-positioning-wrap-y">
							<?php
							the_custom_logo();
							?>
						</div><!-- .positioning-wrap-y -->
					</div><!-- .positioning-wrap-x -->
				</div><!-- #custom-logo-wrap -->
			<?php endif; ?>

			<?php if ( true == get_theme_mod( 'site_title_menubar_toggle_setting', true ) ) : ?>
				<div class="menubar-title-positioning-wrap-x">
					<div class="menubar-title-positioning-wrap-y">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div><!-- .positioning-wrap-y -->
				</div><!-- .positioning-wrap-x -->
			<?php endif; ?>


			</div><!-- .site-branding -->
			
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'essence-t1' ); ?></button>
			
			<!-- Primary Navigation
			============================================= -->
			<nav id="site-navigation" class="container main-navigation">
				<div class="menu-main-menu-container">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container' => '',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
