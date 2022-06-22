<?php





//$first_menu_link = menu_page_url('alecaddd-sunset-first-submenu', false);
//$second_menu_link = menu_page_url('alecaddd-sunset-second-submenu', false);


?>
<div class="sunset_add_admin_page">
  <?php settings_errors();?>
  <?php echo '<h1>' . get_admin_page_title() . '</h1>';?>
  <form method="post" action="options.php" >
    <?php settings_fields('sunset-settings-group');?>
    <?php do_settings_sections('alecaddd-sunset');?>
    <?php submit_button();?>
  </form>

<!-- <ul>-->
<!--   <li><a href='--><?php //echo $first_menu_link ?><!--'>First submenu</a></li>-->
<!--   <li><a href='--><?php //echo $second_menu_link ?><!--'>Second submenu</a</li>-->
<!-- </ul>-->
</div>
