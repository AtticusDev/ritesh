<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ritesh
 */

?>

	</div><!-- #content -->

	<div class="container-fluid desktopCTA" style="background-color: rgba(0,0,0,0.8);">
		<div class="row">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4 mt-2">
						<h3 style="color: #fff; text-align: right;">Request an appointment</h3>
					</div>
					<div class="col-md-8">
						<div class="CTAform">
						<?php
							echo do_shortcode('[gravityform id=3 name=CTA form title=false description=false]');
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row justify-content-center">
				<div class="footer-contact-details">
					<div class="site-logo-footer">
						<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/shc_logo.svg" alt="Surrey Hand Clinic logo"></a>
					</div>


					<div class="site-info">
						<p>0208 409 1750</p>
						<p><a href="mailto:enquiries@surreyhandclinic.com" target="_blank">enquiries@surreyhandclinic.com</a></p>

						&copy; <?php bloginfo( 'name' );
								echo ' - ';
								echo date("Y"); ?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
