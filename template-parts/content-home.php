<?php
/**
 * Template part for displaying page content in home.php
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
						<div class="home-img">
							<img src="<?php the_field('top_left_image'); ?>">
						</div>
						<div class="home-img-bl">
							<img src="<?php the_field('bottom_left_image'); ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="home-img-tr">
							<img src="<?php the_field('top_right_image'); ?>">
						</div>
						<div class="home-intro">
							<h1 class="overline"><?php the_field('title'); ?></h1>
							<?php the_field('introduction'); ?>
							<a href="/about-ritesh/" class="btn readmoreBtn">Read more</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="container" id="serviceWrapper">
				<div class="row">
					<div class="col-md-4">
						<div class="serviceBlock <?php the_field('service_colour_one'); ?>">
							<a href="#">
							<div class="box1">
									<div class="serviceImage" style="background-image: url('<?php the_field('service_image_one'); ?>'); ">
									</div>
									<div class="serviceContentWrapper">
										<div class="titleBG"><h2 class="overline"><?php the_field('service_title_one'); ?></h2>
										</div>
									</div>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="serviceBlock <?php the_field('service_colour_two'); ?>">
							<a href="#">
							<div class="box1">
									<div class="serviceImage" style="background-image: url('<?php the_field('service_image_two'); ?>'); ">
									</div>
									<div class="serviceContentWrapper">
										<div class="titleBG"><h2 class="overline"><?php the_field('service_title_two'); ?></h2>
										</div>
									</div>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="serviceBlock <?php the_field('service_colour_three'); ?>">
							<a href="#">
							<div class="box1">
									<div class="serviceImage" style="background-image: url('<?php the_field('service_image_three'); ?>'); ">
									</div>
									<div class="serviceContentWrapper">
										<div class="titleBG"><h2 class="overline"><?php the_field('service_title_three'); ?></h2>
										</div>
									</div>
							</div>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

			<?php
			get_template_part( 'template-parts/locations' );
			?>



</article><!-- #post-## -->



