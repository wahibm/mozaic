<?php

function mozaic_files() {
  wp_enqueue_script('global-js', get_theme_file_uri('/js/jquery-3.6.0.min.js'), NULL, '1.0', true);
  wp_enqueue_script('global-js', get_theme_file_uri('/js/imagesloaded.pkgd.min.js'), NULL, '1.0', true);
  wp_enqueue_script('global-js', get_theme_file_uri('/js/isotope.pkgd.min.js'), NULL, '1.0', true);
  wp_enqueue_script('global-js', get_theme_file_uri('/js/packery-mode.pkgd.min.js'), NULL, '1.0', true);
  wp_enqueue_script('global-js', get_theme_file_uri('/js/bootstrap.bundle.min.js'), NULL, '1.0', true);
  wp_enqueue_script('global-js', get_theme_file_uri('/js/project-2.js'), NULL, '1.0', true);
  wp_enqueue_script('project-js', get_theme_file_uri('/js/global.js'), NULL, '1.0', true);
  wp_enqueue_style('main_styles', get_stylesheet_uri());
  wp_enqueue_style('google_fonts', "https://fonts.googleapis.com");
  wp_enqueue_style('gstatic_fonts', "https://fonts.gstatic.com");
}

add_action('wp_enqueue_scripts', 'mozaic_files');

?>

