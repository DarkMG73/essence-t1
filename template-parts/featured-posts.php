<?php
/**
 * Template part for Featured Posts section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package essence-t1
 */

?>
    
<?php
// WP_Query arguments
$args = array(
    'tag'              => 'featured',
    'posts_per_page'   => 3,
);

// The Query
$the_query = new WP_Query( $args );

// Stores post ID's to exclude in templates with post loops
global $exclude_featured;
?>


<?php
if($the_query->have_posts()){
?>

    <div id="featured-posts" class="container featured">

    <?php
    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $exclude_featured[] = $post->ID; 
            
            get_template_part( 'template-parts/content-minimal-image' );
        }
    }

    /* Restore original Post Data */
    wp_reset_postdata();

    ?>
    </div><!--#featured-posts-->

    <?php
} 
?>