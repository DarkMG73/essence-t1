<?php
/**
 * Home template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package gi-essence-theme
 */

get_header();
?>

<div id="central-container" class="home-template container">


	<!-- Welcome Section
	============================================= -->
	<?php get_template_part( 'template-parts/top-page-welcome-section',  'welcome-section' ); ?>

	
	<!-- Transition Section
	============================================= -->
	<section id="first-transition-section" class="container">
		<?php get_template_part( 'template-parts/featured-posts',  'featured-posts-section' ); ?>
	</section><!-- #first-transition-section -->


	<!-- Content Section
	============================================= -->
	<section id="page-content" class="container">

		<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :
  
			// Post flow enable on Home/Front Page section of the Customizer
			if ( true == get_theme_mod( 'home_page_masonry_posts_enable_setting', true ) ) : 
				get_template_part( 'template-parts/post-flow', 'masonry', [ 'exclude_featured' => $exclude_featured ]);
			else : 
				get_template_part( 'template-parts/post-flow', 'one-column', [ 'exclude_featured' => $exclude_featured ]);
			endif;

			the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #primary -->

		<?php get_sidebar(); ?>

	</section><!-- #page-content-->

</div><!-- #central-container -->

<?php
get_footer();
