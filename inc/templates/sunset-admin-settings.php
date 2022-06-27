<?php

function sunset_sidebar_options() {
  // echo 'function sunset_sidebar_options';
}
$profile_picture = esc_attr(get_option('profile_picture'));
$firstName = esc_attr(get_option('first_name'));
$lastName = esc_attr(get_option('last_name'));
$fullName = $firstName . ' ' . $lastName;
$description = esc_attr(get_option('description'));;

?>

<div class="sunset_settings_page">
  <h1><?php echo get_admin_page_title() ?></h1>
  <hr>
  <?php settings_errors(); ?>
  <div class="sunset_info">
    <img class="url_picture" src="<?php echo $profile_picture;?>" alt="">
    <h2 class="title"><?php echo $fullName?></h2>
    <p class="description"><?php echo $description?></p>
  </div>



  <form method="post" action="options.php">
    <?php
    settings_fields( 'sunset_settings_group' );
    do_settings_sections( 'alecaddd-sunset-settings' );
    submit_button();
    ?>

  </form>
</div>
