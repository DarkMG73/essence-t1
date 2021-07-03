<?php
/**
 * Home template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package essence-t1
 */

get_header();
?>

<div id="central-container" class="home-template container">


	<!-- Welcome Section
	============================================= -->
	<?php
	$page_id = get_queried_object_id();
    //Set the thumb variable
    $post_thumbnail_id = get_post_thumbnail_id( $page_id );
    $featured_image = wp_get_attachment_image( $post_thumbnail_id, 'full' );
    $title_name = esc_html( get_the_title($page_id) );
	
	if(is_front_page()){
		get_template_part( 'template-parts/top-site-welcome-section',  'welcome-section' ); 
	} else {
		get_template_part( 'template-parts/top-page-welcome-section',  'welcome-section', ['image' => $featured_image, 'title' => true, 'title-name'=> $title_name] );
	}

    ?>
	
	<!-- Transition Section
	============================================= -->
	<section id="first-transition-section" class="container">
		<?php get_template_part( 'template-parts/featured-posts',  'featured-posts-section' ); ?>
	</section><!-- #first-transition-section -->


	<!-- Content Section
	============================================= -->
	<section id="page-content" class="container">

		<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :
  
			// Post flow enable on Home/Front Page section of the Customizer
			if ( true == get_theme_mod( 'home_page_masonry_posts_enable_setting', true ) ) : 
				get_template_part( 'template-parts/post-flow', 'masonry', [ 'exclude_featured' => $exclude_featured ]);
			else : 
				get_template_part( 'template-parts/post-flow', 'one-column', [ 'exclude_featured' => $exclude_featured ]);
			endif;

			the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #primary -->

		<?php get_sidebar(); ?>

	</section><!-- #page-content-->

</div><!-- #central-container -->

<?php
get_footer();
