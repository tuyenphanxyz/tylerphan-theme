<?php
function tylerphan_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus(array('main-menu' => __('Main Menu', 'tylerphan')));
}
add_action('after_setup_theme', 'tylerphan_setup');

function tylerphan_enqueue_scripts() {
  wp_enqueue_style('tylerphan-style', get_stylesheet_uri());
  wp_enqueue_style('tylerphan-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
  wp_enqueue_script('tylerphan-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'tylerphan_enqueue_scripts');
?>