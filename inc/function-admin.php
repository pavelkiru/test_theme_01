<?php

/*
 * ========================
 * admin page
 * ========================
 */

function sunset_add_admin_page() {
  add_menu_page('Sunset Theme Options','Sunset','manage_options','alecaddd-sunset','sunset_theme_create_page','dashicons-admin-site-alt',110);

  add_submenu_page('alecaddd-sunset','Settings','Settings','manage_options','alecaddd-sunset-settings','sunset_theme_create_settings_page');

  add_action('admin_init', 'sunset_create_settings_page');
}

add_action('admin_menu', 'sunset_add_admin_page');



function sunset_create_settings_page() {
  register_setting('sunset_settings_group','profile_picture');
  register_setting('sunset_settings_group','first_name');
  register_setting('sunset_settings_group', 'last_name');
  register_setting('sunset_settings_group', 'description');
  register_setting('sunset_settings_group', 'twitter','sunset_sanitize_input_text');
  register_setting('sunset_settings_group', 'google','sunset_sanitize_input_text');
  register_setting('sunset_settings_group', 'yandex','sunset_sanitize_input_text');

  add_settings_section(
    'sunset-sidebar-options','Sidebar options','sunset_sidebar_options',
    'alecaddd-sunset-settings'
  );

  add_settings_field('profile_picture','Picture','sunset_sidebar_picture','alecaddd-sunset-settings','sunset-sidebar-options');
  add_settings_field('sidebar-name','Full Name','sunset_sidebar_name','alecaddd-sunset-settings','sunset-sidebar-options');
  add_settings_field('sidebar-description','Description','sunset_sidebar_description','alecaddd-sunset-settings','sunset-sidebar-options');
  add_settings_field('sidebar-twitter','Twitter','sunset_sidebar_twitter','alecaddd-sunset-settings','sunset-sidebar-options');
  add_settings_field('sidebar-google','Google','sunset_sidebar_google','alecaddd-sunset-settings','sunset-sidebar-options');
  add_settings_field('sidebar-yandex','Yandex','sunset_sidebar_yandex','alecaddd-sunset-settings','sunset-sidebar-options');
}

function sunset_sidebar_picture() {
  $profilePicture = esc_attr(get_option('profile_picture'));
  if (!empty($profilePicture)) {
  //  echo 'have data';
    echo '<input type="button" class="button" name="profile_picture" value="Delete Image" id="delete_image"/>';
  } else {
  //  echo 'empty';

  //  echo $profilePicture;
    echo '<input type="button" class="button" value="Upload Profile Image" id="upload_profile_picture"/>
          <input type="hidden" name="profile_picture" value="'.$profilePicture.'" id="get_url_picture"/>';
  }



  }

function sunset_sidebar_name() {
  $firstName = esc_attr(get_option('first_name'));
  $lastName = esc_attr(get_option('last_name'));
  echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name"/>
        <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name"/>';
}

function sunset_sidebar_description() {
  $description = esc_attr(get_option('description'));;
  echo '<input type="text" name="description" value="'.$description.'" placeholder="Description"/>
        <p class="description">Add your description</p>';
}

function sunset_sidebar_twitter() {
  $twitter = esc_attr(get_option('twitter'));
  echo '<input type="text" name="twitter" value="'.$twitter.'" placeholder="Twitter"/>
        <p class="description">Add your link/name without @</p>';
}

function sunset_sidebar_google() {
  $google = esc_attr(get_option('google'));
  echo '<input type="text" name="google" value="'.$google.'" placeholder="Google"/>
  <p class="description">Add your link/name without @</p>';
}

function sunset_sidebar_yandex() {
  $yandex = esc_attr(get_option('yandex'));
  echo '<input type="text" name="yandex" value="'.$yandex.'" placeholder="Yandex"/>
  <p class="description">Add your link/name without @</p>';
}



// * * *
// Sinitize input data
// * * *
function sunset_sanitize_input_text($input) {
  $output = sanitize_text_field($input);
  $output = str_replace('@','',$output);
  return $output;
}

// * * *



// * * *
// Require templates
// * * *

function sunset_theme_create_page () {
  // generate of our admin page
  require_once get_template_directory() . '/inc/templates/sunset-admin-main-page.php';
}

function sunset_theme_create_settings_page() {
  require_once get_template_directory() . '/inc/templates/sunset-admin-settings.php';
}
