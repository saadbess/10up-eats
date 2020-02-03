<?php

function tenUp_eats_files() {
  wp_enqueue_style('tenUp_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'tenUp_eats_files');

function tenUp_features() {
  register_nav_menu('headerLocation', 'Menu Location');
}

add_action('after_setup_theme', 'tenUp_features');