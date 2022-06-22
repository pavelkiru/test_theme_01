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
    'Sunset Settings',
    'Settings',
    'manage_options',
    'alecaddd-sunset-settings',
    'sunset_theme_create_settings',
    1
  );

  // create admin second submenu page
//  add_submenu_page(
//    'alecaddd-sunset',
//    'Second submenu',
//    'Second submenu',
//    'manage_options',
//    'alecaddd-sunset-second-submenu',
//    'sunset_theme_create_second_submenu',
//    2
//  );

  add_action('admin_init', 'sunset_custom_settings');

}

add_action('admin_menu', 'sunset_add_admin_page');

function sunset_theme_create_page() {
  require_once get_template_directory() . '/inc/templates/sunset-admin.php';
}

function sunset_theme_create_settings() {
  require_once get_template_directory() . '/inc/templates/sunset-admin-settings.php';
}

//function sunset_theme_create_second_submenu() {
//  require_once get_template_directory() . '/inc/templates/sunset-admin-second-submenu.php';
//}


function sunset_custom_settings() {
  register_setting('sunset-settings-group','first_name');
  add_settings_section('sunset-sidebar-options','Sidebar Options','sunset_sidebar_options',
    'alecaddd-sunset'
  );
  add_settings_field('sidebar-name', 'First Name', 'sunset_sidebar_name','alecaddd-sunset',
  'sunset-sidebar-options');
}

function sunset_sidebar_options() {
  echo 'Cusomize your Sidebar Information';
}

function sunset_sidebar_name() {
  $firstName = esc_attr( get_option('first_name') );
  echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First name">';
}
