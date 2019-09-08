<?php
/**
 * Template part for displaying page content in about.php
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
						<div class="about-img">
							<img src="<?php the_field('left_image'); ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-img-tr">
							<img src="<?php the_field('profile_image'); ?>">
						</div>
						<div class="about-content">
							<h1 class="overline"><?php the_title(); ?></h1>
							<?php the_content(); ?>
							<h1>Accreditations</h1>

							<?php if( have_rows('accreditations') ): 
								 while( have_rows('accreditations') ): the_row(); 
								// vars
								$logo = get_sub_field('logo');
								$link = get_sub_field('link');
							?>
								<a href="<?php echo $link; ?>">
								<img src="<?php echo $logo; ?>" class="accreditationLogo">
								</a>

							<?php endwhile;
							endif; ?>
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



