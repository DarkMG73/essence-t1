<?php
/**
 * The template for displaying archive pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package essence-t1
 */

get_header();
?>

<div id="central-container" class="archive-template container">


	<!-- Welcome Section
	============================================= -->
	<?php get_template_part( 'template-parts/top-page-welcome-section',  'welcome-section' ); ?>


	<!-- Content Section
	============================================= -->
	<section id="page-content" class="section container">

		<main id="primary" class="site-main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<div id="masonry-container" class="ms-container">

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content-masonry', get_post_type() );
					
				endwhile;
				?>

				</div><!-- #masonry-container -->

				<?php
				the_posts_pagination();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- #primary -->

		<?php get_sidebar(); ?>

	</section><!-- #page-content -->

</div><!-- #central-container -->

<?php
get_footer();
