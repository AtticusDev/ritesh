<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ritesh
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147086127-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147086127-1');
</script>


	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="controls">
							<button class="hamburger hamburger--collapse slide-menu-control openbtn" type="button" data-target="test-menu-left" data-action="toggle">
							  <span class="hamburger-box">
							    <span class="hamburger-inner"></span>
							  </span>
							</button>
						    <nav class="slide-menu" id="test-menu-left">
								<?php
										        $args = array(
									              'theme_location' => 'primary',
									              'depth'      => 3,
									              'container'  => false,
									              'menu_class'     => 'navbar-nav',
									              );
									            if (has_nav_menu('primary')) {
									              wp_nav_menu($args);
									            }
								?>

							</nav>
					</div>
					<div class="site-logo">
						<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/shc_logo.svg" alt="Surrey Hand Clinic logo"></a>
					</div>
<!--				
					<div class="bookAppointmentBtn">
						<a href="/appointment/" class="btn readmoreBtn">Request an appointment</a>
					</div>
-->					
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
