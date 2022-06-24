<?php

/*
 * ========================
 * ADMIN ENQUEUE FUNCTIONS
 * ========================
 */



function sunset_load_admin_scripts() {
  wp_register_style( 'sunset_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0', 'all' );
  //OR
  wp_enqueue_style( 'sunset_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0','all' );


}
add_action('admin_enqueue_scripts', 'sunset_load_admin_scripts');











