	<div class="container">
		<div class="row justify-content-center">
			<div class="text-center">
			<p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/location-icon.svg" class="location-icon"></p>

				<h2 class="overline-center mb-5">Practice Locations</h2>
			</div>
		</div>
		<div class="row">

				<?php if( have_rows('location_panels', 'option') ): 
					 while( have_rows('location_panels', 'option') ): the_row(); 
					// vars
					$logo = get_sub_field('logo');
					$title = get_sub_field('title');
					$address = get_sub_field('address');
					$link = get_sub_field('google_link');
					$i = $i+1;

				?>

				<div class="col-md-3 text-center d-flex flex-column location-block">
					<div>
						<h3><?php echo $title ?></h3>
						<?php echo $address ?>
					</div>
					<div class="mt-auto">
						<a href="<?php echo $link ?>" class="btn googleBtn" target="_blank">View in Google</a>
					</div>
				</div>
				<?php endwhile;
				endif; ?>
		</div>
	</div>