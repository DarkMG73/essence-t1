<?php
    if ( has_post_thumbnail() ) {
        $featured_image_class = 'has-featured-image';
    } else {
        $featured_image_class = 'no-featured-image';
    }
?>

<div id="page-welcome-container" class="container <?php echo $featured_image_class; ?>">

    <section id="top-welcome-section" class="section">
        <?php if(!empty($args['image']) ) echo $args['image'];  ?>

        <?php
        
        if( isset($args['title']) && $args['title'] != false  ){
        ?>

        <div id="welcome-title-wrap" class="container">
            <div class="positioning-wrap-x">
                <div class="positioning-wrap-y">
                    
                    <?php
                    if ( is_front_page() && is_home() ) :
                        ?>

                        <h1 class="page-title"><?php wp_title(); ?></h1>

                        <?php
                        $gi_essence_theme_description = get_bloginfo( 'description', 'display' );
                        if ( $gi_essence_theme_description || is_customize_preview() ) :
                            ?>

                            <p class="site-description"><?php echo $gi_essence_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

                        <?php endif;
                    else :
                        ?>
                        <h1 class="page-title"><?php wp_title(''); ?></h1>
                        <?php
                    endif;
                    ?>

                </div><!-- .positioning-wrap-y -->
            </div><!-- .positioning-wrap-x -->
        </div><!-- #welcome-title-wrap --> 

        <?php
        } 
        ?>
    </section><!-- #top-welcome-section -->
</div><!-- #page-welcome-container -->