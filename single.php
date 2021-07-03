<?php
/**
 * The template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package essence-t1
 */

get_header();
?>

<div id="central-container" class="single-template container">


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

				get_template_part( 'template-parts/content', get_post_type(), ['featured_image' => false] );

				the_post_navigation(
					array(
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'essence-t1' ) . '</span> <span class="nav-title">%title</span>',
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'essence-t1' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.

			pagenav_special_post();
			?>

		</main><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- #page-content -->

</div><!-- #central-container -->

<?php
get_footer();
