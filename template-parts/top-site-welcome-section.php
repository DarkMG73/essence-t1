<div id="site-welcome-container" class="container">

    <section id="top-welcome-section" class="section" style="background-image: url(<?php echo esc_url( get_header_image() ); ?>); height: <?php echo absint( get_custom_header()->height ); ?>px; ">

        <div class="color-overlay"></div>

        <div id="welcome-title-wrap" class="container">

            <div class="positioning-wrap-x">
                
                <div class="positioning-wrap-y">
                    
                    <?php
                    if ( !is_front_page() && !is_home() ) :
                        ?>

                        <?php if ( true == get_theme_mod( 'site_title_pagehead_toggle_setting', true ) ) : ?>

                                <h1 class="page-title site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

                        <?php endif; ?>

                        <?php if ( true == get_theme_mod( 'site_description_pagehead_toggle_setting', true ) ) :
                            $glassinteractive_essence_theme_description = get_bloginfo( 'description', 'display' );
                            if ( $glassinteractive_essence_theme_description || is_customize_preview() ) :
                                ?>

                                    <p class="site-description"><?php echo $glassinteractive_essence_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

                            <?php endif;
                        endif; 
                    else :
                        ?>

                        <?php if ( true == get_theme_mod( 'site_title_pagehead_toggle_setting', true ) ) : ?>
                            <div id="title-font-size-wrap">
                                <h1 class="page-title site-title"><?php bloginfo( 'name' ); ?></h1>
                            </div> <!-- .font-size-wrap -->
                        <?php endif; ?>

                        <?php if ( true == get_theme_mod( 'site_description_pagehead_toggle_setting', true ) ) : ?>
                            <?php
                            $glassinteractive_essence_theme_description = get_bloginfo( 'description', 'display' );
                            if ( $glassinteractive_essence_theme_description || is_customize_preview() ) :
                                ?>
                                <div id="site-description-wrap" class="positioning-wrap-x">
                                    <div id="description-font-size-wrap">
                                        <p class="site-description"><?php echo $glassinteractive_essence_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                                    </div> <!-- .font-size-wrap -->
                                </div><!-- .positioning-wrap-x -->
                            <?php 
                            endif;
                        endif;
                    endif;
                    ?>
                </div><!-- .positioning-wrap-y -->
            </div><!-- .positioning-wrap-x -->
        </div><!-- #welcom-title-wrap -->
    </section><!-- #top-welcome-section -->
</div><!-- #site-welcome-container -->