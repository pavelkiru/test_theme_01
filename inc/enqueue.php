<?php

/*
 * ========================
 * ADMIN ENQUEUE FUNCTIONS
 * ========================
 */



function sunset_load_admin_scripts($hook) {

  if ('toplevel_page_alecaddd-sunset' == $hook || 'sunset_page_alecaddd-sunset-settings' == $hook) {
    wp_register_style( 'sunset_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0', 'all' );
    wp_enqueue_style( 'sunset_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0','all' );

    wp_enqueue_media();

    wp_register_script('sunset-admin-script', get_template_directory_uri() . "/js/sunset-admin.js", ['jquery'], null, true);
    wp_enqueue_script('sunset-admin-script');
  }
}
add_action('admin_enqueue_scripts', 'sunset_load_admin_scripts');










