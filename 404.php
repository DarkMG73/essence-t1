<?php
/**
 * The template for displaying 404 pages (not found)
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @package gi-essence-theme
 */

get_header();
?>

<div id="central-container" class="404-template container">

	<!-- Welcome Section
	============================================= -->
	<?php get_template_part( 'template-parts/top-page-welcome-section',  'welcome-section' ); ?>

	
	<!-- Transition Section
	============================================= -->
	<section id="first-transition-section" class="section container">
		<?php get_template_part( 'template-parts/featured-posts',  'featured-posts-section' ); ?>
	</section><!-- #first-transition-section -->


	<!-- Content Section
	============================================= -->
	<section id="page-content" class="section container">

		<main id="primary" class="site-main">

			<section class="error-404 not-found">

				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.''essencetheme' ); ?></h1>
				</header><!-- .page-header -->

				<div class="entry-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?''essencetheme' ); ?></p>

						<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
						?>

						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories''essencetheme' ); ?></h2>
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
						$gi_essence_theme_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s''essencetheme' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$gi_essence_theme_archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
						?>

				</div><!-- .entry-content -->

			</section><!-- .error-404 -->

		</main><!-- #primary -->

		<?php get_sidebar(); ?>
		
	</section><!-- #page-content -->

</div><!-- #central-container -->

<?php
get_footer();
