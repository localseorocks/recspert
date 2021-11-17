<?php
/*echo get_stylesheet_directory_uri();die; */ 
function themebs_enqueue_styles() {

  wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'core', get_stylesheet_directory_uri() . '/style.css' );
  

}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');

function themebs_enqueue_scripts() {
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');