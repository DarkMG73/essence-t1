<?php
/**
 * The template for displaying category pages
 * @link https://codex.wordpress.org/Category_Templates
 * @package essence-t1
 */

get_header();
?>

<div id="central-container" class="category-template container">

	<!-- Welcome Section
	============================================= -->
	<?php get_template_part( 'template-parts/top-page-welcome-section',  'welcome-section' ); ?>


	<!-- Content Section
	============================================= -->
	<section id="page-content" class="section container">

		<!-- Page Title
		============================================= -->
		<section id="page-title">
			<div class="container clearfix">
				<h1><?php the_archive_title(); ?></h1>
				<span><?php the_archive_description() ?></span>
			</div>
		</section><!-- #page-title end -->

		<main id="primary" class="site-main">

			<div id="masonry-container" class="ms-container">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content-masonry', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open()	 || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div><!-- #masonry-container -->

			<?php the_posts_pagination(); ?>

		</main><!-- #primary -->	

		<?php get_sidebar(); ?>

	</section><!-- #page-content-->

</div><!-- #central-container -->

<?php
get_footer();
