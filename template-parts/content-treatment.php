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
						<div class="about-content">
							<h1 class="overline"><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-img">
							<img src="<?php the_post_thumbnail_url(); ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




</article><!-- #post-## -->



