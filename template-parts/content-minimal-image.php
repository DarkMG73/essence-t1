<?php
/**
 * Template part for displaying posts with only an Image and title
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package essence-t1
 */

	$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	?>

<article 
	id="post-<?php the_ID(); ?>" <?php post_class(); ?>
	style="background-image: url('<?php echo $backgroundImg[0]; ?>');"
>
	<header class="entry-header">
		<div class="image-overlay"></div>
		<div class="color-overlay"></div>
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;
        ?>
	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
