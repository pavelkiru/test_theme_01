<?php

settings_errors();
?>


<div class="sunset-admin-theme-support">
<!--  <h1>--><?php //echo get_admin_page_title() ?><!--</h1>-->
</div>

<form method="post" action="options.php">
  <?php
  settings_fields( 'sunset_theme_support' );
  do_settings_sections( 'alecaddd-sunset-theme' );
  submit_button();
  ?>

</form>
