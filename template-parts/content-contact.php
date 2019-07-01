<?php
/**
 * Template part for displaying page content in contact.php
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
					<div class="col-md-12">
						<div class="about-content text-center">
							<h1 class="overline-center"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="row justify-content-md-center">
									<?php
					echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
				?>

				</div>
			</div>
		</div>
	</div>

			<?php
			get_template_part( 'template-parts/locations' );
			?>


</article><!-- #post-## -->



