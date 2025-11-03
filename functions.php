<?php
function tylerphan_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus(array('main-menu' => __('Main Menu', 'tylerphan')));
}
add_action('after_setup_theme', 'tylerphan_setup');

function tylerphan_enqueue_scripts() {
  // Theme root stylesheet (WordPress default)
  wp_enqueue_style('tylerphan-style', get_stylesheet_uri());
  // Bootstrap CSS (load first)
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.3', 'all');
  // Custom CSS (override Bootstrap when needed)
  wp_enqueue_style('tylerphan-custom', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap'), '1.0', 'all');
  // Bootstrap JS bundle (includes Popper)
  wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
  // Main JS (after Bootstrap)
  wp_enqueue_script('tylerphan-js', get_template_directory_uri() . '/assets/js/main.js', array('bootstrap-bundle'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'tylerphan_enqueue_scripts');
?>