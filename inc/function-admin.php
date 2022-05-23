<?php

/*
 * ========================
 * admin page
 * ========================
 */

function sunset_add_admin_page() {

  add_menu_page(
    'Sunset Theme Options',
    'Sunset',
    'manage_options',
    'alecaddd-sunset',
    'sunset_theme_create_page',
    'dashicons-admin-site-alt',
    110
  );
}

add_action('admin_menu', 'sunset_add_admin_page');

function sunset_theme_create_page () {
  // generate of our admin page
  echo '<h1>Sunset Theme Options<h1/> ';
}
