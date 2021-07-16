
<div id="one-column-container" class="posts-container">

<?php
/* Start the Loop */
// WP_Query arguments

if( isset($args['exclude_featured']) ){
    $exclude_featured = $args['exclude_featured'];
} else {
    $exclude_featured = false;
}
$args = array(
    'paged' => $paged,
    'ignore_sticky_posts'  => true,
    'post__not_in' => $exclude_featured,
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
                        /*
    * Include the Post-Type-specific template for the content.
    * If you want to override this in a child theme, then include a file
    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
    */
    get_template_part( 'template-parts/content-condensed', get_post_type() );

    }
} else {
    ?>
        <p><?php esc_html_e( 'Sorry, but no posts can be found.', 'essence-t1' ); ?></p>
    <?php
}
/* Restore original Post Data */
wp_reset_postdata();

?>
</div><!-- #one-column-container -->

