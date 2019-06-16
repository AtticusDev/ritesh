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
	<div class="container">
		<div class="row justify-content-center">
			<div class="text-center">
			<p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/location-icon.svg" class="location-icon"></p>

				<h2 class="overline-center">Practice Locations</h2>
			</div>
		</div>
		<div class="row">

				<?php if( have_rows('location_panels') ): 
					 while( have_rows('location_panels') ): the_row(); 
					// vars
					$title = get_sub_field('title');
					$address = get_sub_field('address');
					$link = get_sub_field('google_link');
					$i = $i+1;

				?>

				<div class="col-md-3 text-center">
					<h3><?php echo $title ?></h3>
					<?php echo $address ?>
					<a href="<?php echo $link ?>" class="btn googleBtn">View in Google</a>
				</div>
				<?php endwhile;
				endif; ?>
		</div>
	</div>




</article><!-- #post-## -->



