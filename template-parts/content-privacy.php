<?php
/**
 * Template part for displaying page content in privacy.php
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
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="about-content">
							<h1 class="overline"><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




</article><!-- #post-## -->



