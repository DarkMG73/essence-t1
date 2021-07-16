<?php
/**
 * The template for displaying Comment Errors
 * @package essence-t1
 */

get_header();
?>
<script>
	// WP's body classes still have .admin-bar, but will not load the admin bar on an error page. This provides a masthead adjustment to compensate.
	jQuery('body.admin-bar .site-header').css('top', 0)
</script>
<div id="central-container" class="comment-error-template container">

	<!-- Content Section
	============================================= -->
	<section id="page-content" class="section container">

		<main id="primary" class="site-main">

			<section class="error-404 not-found">
	
				<header class="page-header">
					<br><br>
					<h1 class="page-title"><?php esc_html_e( 'Oops! It looks like there were problems when submitting the form.', 'essence-t1' ); ?></h1>
				</header><!-- .page-header -->

				<div class="entry-content">
					<h2 class="comment-error-message"><?php echo $message; ?></h2>
					
						<?php
						get_search_form();

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
						?>

				</div><!-- .entry-content -->

			</section><!-- .error-404 -->

		</main><!-- #primary -->

		<?php get_sidebar(); ?>
		
	</section><!-- #page-content -->

</div><!-- #central-container -->

<?php
get_footer();
