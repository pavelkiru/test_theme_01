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

  add_submenu_page(
    'alecaddd-sunset',
    'Settings',
    'Settings',
    'manage_options',
    'alecaddd-sunset-settings',
    'sunset_theme_require_settings_page'
  );

  add_action('admin_init', 'sunset_create_settings_page');


}
add_action('admin_menu', 'sunset_add_admin_page');



function sunset_create_settings_page() {
  register_setting('sunset_settings_group','first_name');

  add_settings_section(
    'sunset-sidebar-options','Sidebar options','sunset_sidebar_options',
    'alecaddd-sunset-settings'
  );

  add_settings_field('sidebar-name','First Name','sunset_sidebar_name',
    'alecaddd-sunset-settings','sunset-sidebar-options'
  );
}

function sunset_sidebar_name() {

  $firstName = esc_attr(get_option('first_name'));
  echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name"/>';
}


function sunset_theme_create_page () {
  // generate of our admin page
  require_once get_template_directory() . '/inc/templates/sunset-admin-main-page.php';
}



function sunset_theme_require_settings_page() {
  require_once get_template_directory() . '/inc/templates/sunset-admin-settings.php';
}
