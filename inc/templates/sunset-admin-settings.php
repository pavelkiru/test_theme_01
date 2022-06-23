<?php

function sunset_sidebar_options() {
  echo 'function sunset_sidebar_options';
}
?>

<div>
  <!--  <h1>--><?php //echo get_admin_page_title() ?><!--</h1>-->
  <?php ?>
  <form method="post" action="options.php">
    <?php
        settings_fields( 'sunset_settings_group' );
        do_settings_sections( 'alecaddd-sunset-settings' );
        submit_button();
    ?>

  </form>
</div>
