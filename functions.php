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
  // Inter font (Google Fonts)
  wp_enqueue_style('inter-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null);
  // Bootstrap CSS (load first)
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array('inter-font'), '5.3.3', 'all');
  // Custom CSS (override Bootstrap when needed)
  wp_enqueue_style('tylerphan-custom', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap'), '1.0', 'all');
  // Bootstrap JS bundle (includes Popper)
  wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
  // Main JS (after Bootstrap)
  wp_enqueue_script('tylerphan-js', get_template_directory_uri() . '/assets/js/main.js', array('bootstrap-bundle'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'tylerphan_enqueue_scripts');

// Add Bootstrap classes to WP menu for the main navbar
function tylerphan_bootstrap_nav_classes($atts, $item, $args) {
  if (isset($args->theme_location) && $args->theme_location === 'main-menu') {
    $atts['class'] = isset($atts['class']) ? $atts['class'] . ' nav-link' : 'nav-link';
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'tylerphan_bootstrap_nav_classes', 10, 3);

function tylerphan_bootstrap_li_classes($classes, $item, $args) {
  if (isset($args->theme_location) && $args->theme_location === 'main-menu') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'tylerphan_bootstrap_li_classes', 10, 3);
?>