<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gi-essence-theme
 */

?>

		<footer id="colophon" class="site-footer container">
<?php
dynamic_sidebar( 'top-widget' );
dynamic_sidebar( 'bottom-widget' );
?>
			<div id="topic-info" class="container widget-area">
				<div class="footer-topic-column">
					<?php dynamic_sidebar( 'footer-col-1' ); ?>
				</div>
				<div class="footer-topic-column">
					
					<?php 
					if( get_theme_mod('footer_photo_cta_on_off_toggle_setting')  ==  1){
						?>
						<div class="photo-cta-container">
							<div id="photo-cta-photo-contianer">
								<!-- Photo Call-To-Action Image 1-->
								<?php $image_one = get_theme_mod('photo_cta_photo_one_setting_id', false);
								if(!empty($image_one)){
									?>
									<div class="photo-cta-1 photo-cta-image-wrap">
										<div class="photo-cta-image-wrap-X-adjustment">
											<?php echo wp_get_attachment_image( 
												$image_one, 'medium', 
												false, 
												[
													'class' => 'photo-cta-image', 
													'alt'	=> 'Call-to-Action First Photo'
												]) 
											?>
										</div>
									</div>
									<?php
								}
								?>

								<!-- Photo Call-To-Action Image 2-->
								<?php $image_two = get_theme_mod('photo_cta_photo_two_setting_id', false);
								if(!empty($image_two)){
									?>
									<div class="photo-cta-2 photo-cta-image-wrap">
										<div class="photo-cta-image-wrap-X-adjustment">
											<?php echo wp_get_attachment_image( 
												$image_two, 'medium', 
												false, 
												[
													'class' => 'photo-cta-image', 
													'alt'	=> 'Call-to-Action Second Photo'
												]) 
											?>
										</div>
									</div>
									<?php
								}
								?>

								<!-- Photo Call-To-Action Image 1-->
								<?php $image_three = get_theme_mod('photo_cta_photo_three_setting_id', false);
								if(!empty($image_three)){
									?>
									<div class="photo-cta-3 photo-cta-image-wrap">
										<div class="photo-cta-image-wrap-X-adjustment">
											<?php echo wp_get_attachment_image( 
												$image_three, 'medium', 
												false, 
												[
													'class' => 'photo-cta-image', 
													'alt'	=> 'Call-to-Action First Photo'
												]) 
											?>
										</div>
									</div>
									<?php
								}
								?>
							</div>
							<div class="photo-cta-text">
								<p>
									<?php echo _e( get_theme_mod('footer_photo_cta_photo_text_editor_setting', '<strong>Hire Us!</strong><br>123-456-7891<br>email@email-address.com'), 'gi-essence-theme' ) ?>
								</p>
							</div>
						</div>
					<?php
					}
					
					dynamic_sidebar( 'footer-col-2' ); ?>
				</div>
				<div class="footer-topic-column">
					<?php dynamic_sidebar( 'footer-col-3' ); ?>
				</div>
			</div>

			<div class="site-info container" >
				<div class="site-info-child">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'gi-essence-theme' ) ); ?>">

						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( _e( 'Proudly powered by %s', 'gi-essence-theme' ), 'WordPress' );
						?>

					</a>
				</div><!-- .site-info-child -->

				<span class="sep">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>

				<div class="site-info-child">
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( _e( 'Theme: %1$s by %2$s.', 'gi-essence-theme' ), 'EssenceTheme', '<a href="http://www.glassinteractive.com">Mike Glass</a>' );
					?>
				</div><!-- .site-info-child -->

				<span class="sep">   |   </span>
				
				<div class="site-info-child">
					<div id="copyrights">

						<div class="container clearfix">

							<div class="col_half">
								<?php echo _e( get_theme_mod( 'gi_footer_copyright_text' ), 'gi-essence-theme' ); ?>
								<?php

								if( get_theme_mod( 'gi_report_file' ) ){
									?><a href="<?php echo _e( get_theme_mod( 'gi_report_file' ), 'gi-essence-theme' ); ?>">Download Report</a><br><?php
								}

								?>
								<div class="copyright-links">
									<?php

									if( get_theme_mod( 'gi_footer_tos_page' ) ){
										?><a href="<?php the_permalink( get_theme_mod( 'gi_footer_tos_page' ) ); ?>">Terms of Use</a><?php
									
									?> /
									<?php
									}

									if( get_theme_mod( 'gi_footer_privacy_page' ) ){
										?>
										<span class="sep">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</span>
										<a href="<?php the_permalink( get_theme_mod( 'gi_footer_privacy_page' ) ); ?>">Privacy Policy</a><?php
									
									?> /
									<?php
									} else if(get_page_by_title( 'Privacy Policy')) {
										?>

										<span class="sep">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</span>										
										<a href="<?php echo _e(get_page_link( get_page_by_title( 'Privacy Policy')->ID 
										), 'gi-essence-theme' ); ?>">Privacy Policy</a><?php
									}
									?>

									<span class="sep">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</span>
									<a href="/sitemap.xml">Sitemap</a>
								</div>
							</div>

							</div><!-- .site-info-child -->

							<?php
							if( get_theme_mod( 'gi_facebook_handle' ) 	||
								get_theme_mod( 'gi_twitter_handle' ) 	|| 
								get_theme_mod( 'gi_email' ) 			||
								get_theme_mod( 'gi_email' )
							 ) {
								?><span class="sep">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</span><?php
							}
							?>

							<div class="site-info-child">
								<div class="col_half col_last tright">
									<div class="fright clearfix">
										<?php

										if( get_theme_mod( 'gi_facebook_handle' ) ){
											?>
											<a href="https://facebook.com/<?php echo _e( get_theme_mod( 'gi_facebook_handle' ), 'gi-essence-theme' ); ?>" class="social-icon si-small si-borderless si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<?php
										}

										if( get_theme_mod( 'gi_twitter_handle' ) ){
											?>
											<a href="https://twitter.com/<?php echo _e( get_theme_mod( 'gi_twitter_handle' ), 'gi-essence-theme' ); ?>" class="social-icon si-small si-borderless si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<?php
										}

										?>
									</div>

									<div class="clear"></div>

									<?php

									if( get_theme_mod( 'gi_email' ) ){
										?><i class="icon-envelope2"></i> <?php echo _e( get_theme_mod( 'gi_email' ), 'gi-essence-theme' );
									}

									if( get_theme_mod( 'gi_email' ) ){
										?>

										<span class="middot">&middot;</span>

										<?php
										?><i class="icon-headphones"></i> +<?php echo _e( get_theme_mod( 'gi_phone_number' ), 'gi-essence-theme' );
									}

									?>
								</div>

							</div><!-- .site-info-child -->
						</div>
					</div><!-- #copyrights end -->
				</div><!-- .site-info-child -->
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</div><!-- #page-container -->
</body>
</html>
