<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style');
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_javascript' );
function enqueue_bootstrap_javascript() {
  wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri().'/javascripts/bootstrap.js' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_conversant_javascript' );
function enqueue_conversant_javascript() {
  wp_enqueue_script( 'conversant', get_stylesheet_directory_uri().'/javascripts/conversant.js' );

  // Set conversant promo_id
  $conversant_promo_id = 3;
  if (is_home()) {
    $conversant_promo_id = 2;
  }

  wp_localize_script( 'conversant', 'conversant_promo_id', $promo_id );
}
