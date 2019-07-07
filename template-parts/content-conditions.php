<?php
/**
 * Template part for displaying page content in conditions.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ritesh
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid">
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
	</div>
	<div class="container-fluid pb-4 bg-white pt-5">
		<div class="row">
			<div class="container">
				<div class="row justify-content-md-center condition-panel-block">
				

					<?php
					$args = array(
					 'post_type' => 'treatment',
					 'posts_per_page' => '-1',
//					 'meta_key' => 'order_number',
//					 'orderby' => 'meta_value_num',
					 'order' => 'ASC' 
					);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>

						<div class="col-sm-12 col-md-3 condition-wrapper">
							<a href="<?php the_permalink(); ?>">
								<div class="d-flex align-items-center condition-box <?php the_field('colour'); ?>">
									<div class="condition-title"><?php the_title(); ?></div>
								</div>
							</a>
						</div>

					<?php
					endwhile;

					wp_reset_query();

					?>
				</div>
			</div>
		</div>
	</div>



</article><!-- #post-## -->



