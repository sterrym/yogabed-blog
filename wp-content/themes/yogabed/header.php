<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Yogabed
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'goran' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <div class="container">
      <div class="row">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="fa fa-bars"></span>
        </button>
        <div id="brand" class="col-md-3">
          <a href="<?php site_url(); ?>" class="site-logo-link" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Yogabed" /></a>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
          <div class="tag navbar-text hidden-md hidden-lg">
            <span>Inspired by yoga.<br>
            Designed for comfort.</span>
          </div>
        </div><!-- .site-branding -->

      <?php if ( has_nav_menu( 'primary' ) ) : ?>
        <div id="navigation" class="col-md-9 collapse navbar-collapse">
          <nav id="nav-main">
            <?php
              wp_nav_menu( array(
                'theme_location'  => 'primary',
                'container_class' => 'menu-primary',
                'menu_class'      => 'clear',
              ) );
            ?>
          </nav><!-- #site-navigation -->
          <nav id="nav-global">
            <div class="tag navbar-text hidden-sm hidden-xs">
              <span>Inspired by yoga.<br>
              Designed for comfort.</span>
            </div>
          </nav>
        </div>
      <?php endif; ?>
      </div>
    </div>
  </header><!-- #masthead -->

  <div id="content" class="site-content">
