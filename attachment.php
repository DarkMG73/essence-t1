<?php
/**
 * The template for displaying media attachments
 * @link https://developer.wordpress.org/themes/template-files-section/attachment-template-files/
 * @package essence-t1
 */

get_header();
?>

<div id="central-container" class="attachment-template container">


	<!-- Welcome Section
	============================================= -->
	<?php 
	$attachment_image = wp_get_attachment_image( get_the_ID(), $image_size );
	get_template_part( 'template-parts/top-page-welcome-section',  'welcome-section',     array(
        'image'   => $attachment_image
    )); ?>


	<!-- Content Section
	============================================= -->
	<section id="page-content" class="container">

	<main id="primary" class="site-main">

	<figure class="entry-attachment">
  
           <?php if ( has_excerpt() ) : ?>
    
           <div class="entry-caption">
                 <?php the_excerpt(); ?>
           </div><!-- .entry-caption -->
       <?php endif; ?>
</figure><!-- .entry-attachment -->

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'essence-t1' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'essence-t1' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #primary -->

		<?php get_sidebar(); ?>

	</section><!-- #page-content-->

</div><!-- #central-container -->

<?php
get_footer();
