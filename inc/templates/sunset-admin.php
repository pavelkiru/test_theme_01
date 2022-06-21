<?php



echo '<h1>' . get_admin_page_title() . '</h1>';

$second_menu_link = menu_page_url('alecaddd-sunset-second-submenu', false);
$first_menu_link = menu_page_url('alecaddd-sunset-first-submenu', false);


?>
<div class="sunset_add_admin_page">
 <ul>
   <li><a href='<?php echo $first_menu_link ?>'>First submenu</a></li>
   <li><a href='<?php echo $second_menu_link ?>'>Second submenu</a</li>
 </ul>
</div>
