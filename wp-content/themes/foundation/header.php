<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header style="display:none" id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
	</header>

  <div class="topnavigation">
    <div class="in">
      <div class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo_golden_car.png" alt=""></div>
      <nav>
        <ul>
          <li><a href="">Notre Sélection</a></li>
          <li><a href="">Nos véhicules</a></li>
          <li><a href="">Service d'exception</a></li>
          <li><a href="">Nos autres prestations</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <header class="topheader" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/header/1.jpg)">

  </header>
  <div class="focus">
    <div class="row">
      <div class="medium-4 columns">
        <div class="case">
          <div class="image" style="background-image:url(http://www.goldencar.fr/wp-content/uploads/2016/05/Land-Rover-Range-Rover-Evoque.jpg)"></div>
          <div class="niveaufinition"></div>
        </div>
      </div>
      <div class="medium-4 columns">
        <div class="case">
          <div class="image" style="background-image:url(http://www.goldencar.fr/wp-content/uploads/2016/05/Renault-Captur.jpg)"></div>
        </div>
      </div>
      <div class="medium-4 columns">
        <div class="case">
          <div class="image" style="background-image:url(http://www.goldencar.fr/wp-content/uploads/2016/05/Hyundai-Tucson.jpg)"></div>
        </div>
      </div>
    </div>
  </div>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
