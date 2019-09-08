<?php
/**
 * Template part for displaying page content in treatment.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ritesh
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid grey-panel">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="treatment-content">
							<h1 class="overline"><?php the_title(); ?></h1>
							<?php the_content(); ?>
							<a href="/hand-conditions-we-treat/" class="btn readmoreBtn">Back to conditions</a>

						</div>
					</div>
					<div class="col-md-6">
						<div class="condition-img">
							<img src="<?php the_post_thumbnail_url(); ?>">
							<a href="/appointment/" class="btn readmoreBtn">Book an appointment</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


			<?php
			get_template_part( 'template-parts/testimonial' );
			?>



</article><!-- #post-## -->



