<?php
/**
 * The template for displaying all pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package essence-t1
 */

get_header();
?>

<div id="central-container" class="page-template container">



	<!-- Welcome Section
	============================================= -->
	<?php get_template_part( 'template-parts/top-page-welcome-section',  
							 'welcome-section', 
							 [
								 'image'=> get_the_post_thumbnail( get_the_ID(), 'large' ),
								 'title'=> false
							 ]  
						   ); 
	?>


	<!-- Content Section
	============================================= -->
	<section id="page-content" class="section container">

		<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.

		pagenav_special_post();
		?>

	</main><!-- #primary -->

	<?php get_sidebar(); ?>

</section><!-- #page-content -->

</div><!-- #central-container -->

<?php
get_footer();
