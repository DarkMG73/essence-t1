<?php
/**
 * The template for displaying all pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package essence-t1
 */

get_header();
?>
<div id="central-container" class="woocommerce-template container">


	<!-- Welcome Section
	============================================= -->
	<?php get_template_part( 'template-parts/top-page-welcome-section',  'welcome-section' ); ?>


	<!-- Content Section
	============================================= -->
	<section id="page-content" class="section container">

		<main id="primary" class="site-main">

			<?php woocommerce_content(); ?>

		</main><!-- #primary -->

		<?php get_sidebar(); ?>

	</section><!-- #page-content -->

</div><!-- #central-container -->

<?php
get_footer();
