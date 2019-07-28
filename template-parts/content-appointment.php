<?php
/**
 * Template part for displaying page content in appointment.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ritesh
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid grey-panel mb-5">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="about-content text-center">
							<h1 class="overline-center"><?php the_title(); ?></h1>
							<p><a href="#locations" class="btn readmoreBtn">Click here for for hospital booking numbers</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-sm-12 col-md-8">
					<?php
					echo do_shortcode('[gravityform id=2 name=Appointment title=false description=false]');
					?>
					</div>
					<div class="col-sm-12 col-md-4 mt-4">
						<div class="about-img">
							<img src="<?php the_post_thumbnail_url(); ?>">
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<a id="locations"></a>

			<?php
			get_template_part( 'template-parts/locations' );
			?>


</article><!-- #post-## -->



