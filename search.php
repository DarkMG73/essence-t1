<?php
/**
 * The template for displaying search results pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * @package essence-t1
 */

get_header();
?>

<div id="central-container" class="search-template container">


	<!-- Welcome Section
	============================================= -->
	<?php get_template_part( 'template-parts/top-page-welcome-section',  'welcome-section' ); ?>


	<!-- Content Section
	============================================= -->
	<section id="page-content" class="section container">

		<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'essence-t1' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<div id="masonry-container" class="ms-container">

				

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;
					?>

				</div><!-- #masonry-container -->
				
				<?php
				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

				the_widget( 'WP_Widget_Recent_Posts' );
				?>

				<div class="widget widget_categories">
					<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'essence-t1' ); ?></h2>
					<ul>
						<?php
						wp_list_categories(
							array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							)
						);
						?>
					</ul>
				</div><!-- .widget -->

				<?php
				/* translators: %1$s: smiley */
				$glassinteractive_essence_theme_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'essence-t1' ), convert_smilies( ':)' ) ) . '</p>';
				the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$glassinteractive_essence_theme_archive_content" );

											the_widget( 'WP_Widget_Tag_Cloud' );

						endif;
						?>

			

		</main><!-- #primary -->

		<?php get_sidebar(); ?>

	</section><!-- #page-content -->

</div><!-- #central-container -->

<?php
get_footer();
