<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<style>
  .to-the-top {
    color: white;
    background: #149ddd;
    width: 40px;
    height: 40px;
    padding-left: 1.2rem;
    padding-top: 0.6rem;
    border-radius: 50px;
    transition: all 0.4s;
}
</style>
			<footer id="site-footer" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
							the_privacy_policy_link( '<p class="privacy-policy">', '</p>' );
						}
						?>

						<!--<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
							</a>
						</p>-->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( ' %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>
        <!-- Vendor JS Files -->
	  <script src="<?php bloginfo('template_directory');?>/assets/vendor/purecounter/purecounter.js"></script>
	  <script src="<?php bloginfo('template_directory');?>/assets/vendor/aos/aos.js"></script>
	  <script src="<?php bloginfo('template_directory');?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	  <script src="<?php bloginfo('template_directory');?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
	  <script src="<?php bloginfo('template_directory');?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	  <script src="<?php bloginfo('template_directory');?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
	  <script src="<?php bloginfo('template_directory');?>/assets/vendor/typed.js/typed.min.js"></script>
	  <script src="<?php bloginfo('template_directory');?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
	  <script src="<?php bloginfo('template_directory');?>/assets/vendor/php-email-form/validate.js"></script>

	  <!-- Template Main JS File -->
	  <script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>
	</body>
</html>