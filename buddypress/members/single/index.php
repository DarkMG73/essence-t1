<?php 
/**
 * The template for displaying Single Member BuddyPress content
 * @link https://codex.buddypress.org/themes/theme-compatibility-1-7/
 * @package essence-t1
 */

get_header();
?>

<div id="central-container" class="buddypress-members-single-template container">


	<!-- Content Section
	============================================= -->
	<section id="page-content" class="section container">

		<div id="buddypress-template">
			<main id="primary" class="site-main">

				<?php
				while( have_posts() ){
					
					the_post();

					the_content();
				}

				pagenav_special_post();
				?>

			</main><!-- #primary -->

			<?php get_sidebar(); ?>

		</div><!-- #buddypress-template -->

	</section><!-- #page-content -->

</div><!-- #central-container -->

<?php
get_footer();
