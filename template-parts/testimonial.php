	<div class="container testTrigger">
		<div class="row">
			<div class="col-md-12 text-center orange testimonialWrapper">

				<?php 
				$args = array( 'post_type' => 'testimonial', 'posts_per_page' => '1', 'orderby' => 'rand' );
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post();
				 $quotename = get_field( "quote_by" );
				?>

				<h2 class="overline-center">What our patients say</h6>
				<div class="largeTestimonial"><?php the_content(); ?></div>
				<p class="testimonialName"><?php the_title(); ?></p>

				<?php 
				endwhile;
				wp_reset_query();
				?>


			</div> <!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
