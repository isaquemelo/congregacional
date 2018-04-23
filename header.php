<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> style="margin:0px!IMPORTANT;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
	<?php include_once("analyticstracking.php"); ?>
</head>
<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>
	<header id="header" role="banner" class="mainHeader desactive-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
						<div class="logo">
							<?php odin_the_custom_logo(); ?>
						</div>
						<div class="leftSection col-md-3 pull-right">
							<div class="toggleNav col-md-1 pull-right ">
								<span class="menuTitle">menu</span>
							    <div class="toggleNavButton"></div>
							</div>
							<section class="socialIcons pull-right displayed">
									<?php get_template_part( 'parts/social-icons' );?>

							</section>
						</div>
						<div id="subnav" class="desactive ">
						    <?php
										wp_nav_menu(
											array(
												'theme_location' => 'main-menu',
												'depth'          => 2,
												'container'      => false,
												'menu_class'     => 'nav navbar-nav',
												'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
												'walker'         => new Odin_Bootstrap_Nav_Walker(),
												'menu_class'     => 'col-md-12 col-xs-12'
											)
										);
									?>
						</div>
					</div><!-- .page-header-->
				</div>
			</div>
		</div><!-- .container-->
	</header><!-- #header -->

