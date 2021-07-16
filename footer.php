<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package essence-t1
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

									<?php 
										echo wp_kses_post(get_theme_mod('footer_photo_cta_photo_text_editor_setting') ) 
								
									?>
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
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'essence-t1' ) ); ?>">

						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'essence-t1' ), 'WordPress' );
						?>

					</a>
				</div><!-- .site-info-child -->

				<span class="sep">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>

				<div class="site-info-child">
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s', 'essence-t1' ), 'Essence T1', '<a href="http://www.glassinteractive.com">Mike Glass</a>' );
					?>
				</div><!-- .site-info-child -->

				<span class="sep">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
				
				<div class="site-info-child">
					<div class="copyrights">
						<?php
							global $generalThemeDefaults;
							$copyright_text = get_theme_mod( 'glassinteractive_footer_copyright_text', $generalThemeDefaults['footer']['copyright_text'] ); 
							
							
							echo esc_html( $copyright_text );
						?>
					</div><!-- .copyrights -->
				</div><!-- .site-info-child -->

				<?php
					if( get_theme_mod( 'glassinteractive_report_file' ) ){
						?>
						<span class="sep">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
						<div class="site-info-child">
							<div class="download-link">
							<a href="<?php echo esc_url(get_theme_mod( 'glassinteractive_report_file' )); ?>">Download Report</a><br>
						
							</div>
						</div><!-- .site-info-child -->
			    <?php
				}
				?>

				<?php
				if( get_theme_mod('footer_tos_on_off_toggle_setting') >= 1 ){
				?>
					<span class="sep">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>

					<div class="site-info-child">
						<div class="footer-tos">
							<?php
									if( get_theme_mod('glassinteractive_footer_tos_page') ) {
										$tos_page_link = get_the_permalink(get_theme_mod( 'glassinteractive_footer_tos_page'));
									} else if(get_page_by_title( 'Terms of Service')) {
										$tos_page_link = get_page_link(get_page_by_title( 'Terms of Service')->ID); 
									} else {
										// If toggle in on and no other previous
										// condition is met, just use the first page.
										$pages_args = [
											'sort_column' => 'ID',
										];
										$pages_array = get_pages($pages_args);
										$first_page = $pages_array[0]->ID;
										$tos_page_link = get_the_permalink( $first_page );
									}

									?><a href="<?php 
									echo esc_url($tos_page_link);
									?>
									">Terms of Service</a>
						</div>
					</div><!-- .site-info-child -->
				<?php
				}
				?>

				<?php
				if( get_theme_mod( 'footer_privacy_page_on_off_toggle_setting' ) >= 1  ){
				?>
					<span class="sep">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>

					<div class="site-info-child">
						<?php
						if( get_theme_mod( 'glassinteractive_footer_privacy_page' ) ){

							$privacy_page_link = get_the_permalink( get_theme_mod( 'glassinteractive_footer_privacy_page' ));

						} else if(get_page_by_title( 'Privacy Policy')) {
															
							$privacy_page_link = get_page_link( get_page_by_title( 'Privacy Policy')->ID );
						} else {

							// If toggle in on and no other previous
							// condition is met, just use the first page.
							$pages_args = [
								'sort_column' => 'ID',
							];
							$pages_array = get_pages($pages_args);
							$first_page = $pages_array[0]->ID;
							$privacy_page_link = get_the_permalink( $first_page );
						}
						?>
						<a href="<?php echo esc_url($privacy_page_link) ?>">Privacy Policy</a>
				    </div><!-- .site-info-child -->
        		<?php
        		}
        		?>

			<span class="sep">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>

			<div class="site-info-child">
				<a href="/sitemap.xml">Sitemap</a>
			</div><!-- .site-info-child -->

			<?php
			if( get_theme_mod( 'glassinteractive_facebook_handle' ) 	||
							get_theme_mod( 'glassinteractive_twitter_handle' ) 	|| 
							get_theme_mod( 'glassinteractive_email' ) 			||
							get_theme_mod( 'glassinteractive_phone_number' )
							) {
			?>
			<span class="sep">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>

				<div class="site-info-child">
				
						<div class="footer-social">
							<?php
							if( get_theme_mod( 'glassinteractive_facebook_handle' ) ){
								?>
								<a href="https://facebook.com/<?php echo esc_url(get_theme_mod( 'glassinteractive_facebook_handle' )); ?>" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<?php
							}
							if( get_theme_mod( 'glassinteractive_twitter_handle' ) ){
								?>
								<a href="https://twitter.com/<?php echo esc_url(get_theme_mod( 'glassinteractive_twitter_handle' )); ?>" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<?php
							}
							?>
						</div>
				</div><!-- .site-info-child -->
			<?php
			}
			?>

			<?php
			if( get_theme_mod( 'glassinteractive_email' ) ){
					?>
				<div class="site-info-child">
					<div class="footer-email">
						<i class="icon-envelope2"></i> <?php echo esc_url(get_theme_mod( 'glassinteractive_email' )); ?>
					</div>
				</div><!-- .site-info-child -->
			<?php
			}
			?>

			<?php
				if( get_theme_mod( 'glassinteractive_phone_number' ) ){
					?>
				<div class="site-info-child">
					<div class="footer-phone-number">
								<span class="middot">&middot;</span>
								<i class="icon-headphones"></i> +<?php echo esc_html(get_theme_mod( 'glassinteractive_phone_number' )); ?>
					</div>
				</div><!-- .site-info-child -->
			<?php
			}
			?>
			
			</div><!-- .site-info-container  -->
		</footer><!-- #colophon -->
	</div><!-- #page-container -->

	<?php wp_footer(); ?>

</body>
</html>
