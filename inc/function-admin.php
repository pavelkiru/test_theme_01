<?php

/*
 * ========================
 * admin page
 * ========================
 */

function sunset_add_admin_page() {

  // create admin menu page
  add_menu_page(
    'Sunset Theme Options',
    'Sunset',
    'manage_options',
    'alecaddd-sunset',
    'sunset_theme_create_page',
    'dashicons-admin-site-alt',
    110
  );

  // create admin first submenu page
  add_submenu_page(
    'alecaddd-sunset',
    'First submenu',
    'First submenu',
    'manage_options',
    'alecaddd-sunset-first-submenu',
    'sunset_theme_create_first_submenu',
    1
  );

  // create admin second submenu page
  add_submenu_page(
    'alecaddd-sunset',
    'Second submenu',
    'Second submenu',
    'manage_options',
    'alecaddd-sunset-second-submenu',
    'sunset_theme_create_second_submenu',
    2
  );
}

add_action('admin_menu', 'sunset_add_admin_page');

function sunset_theme_create_page() {
  require_once get_template_directory() . '/inc/templates/sunset-admin.php';
}

function sunset_theme_create_first_submenu() {
  require_once get_template_directory() . '/inc/templates/sunset-admin-first-submenu.php';
}

function sunset_theme_create_second_submenu() {
  require_once get_template_directory() . '/inc/templates/sunset-admin-second-submenu.php';
}
