NAVIGATION = > CODE
--------------------------

(Put this code function.php)
register_nav_menus( array('main_nav'=>'myNav'));

{put this code,navigation div;(header( }

<nav><?php wp_nav_menu(array('menu'=>'myNav'));  ?></nav>

===============================================================


<?php $args = array(
   'theme_location'  => '',
   'menu'            => 'Top Nav', 
   'container'       => '', 
   'container_class' => '', 
   'container_id'    => '',
   'menu_class'      => 'menu', 
   'menu_id'         => '',
   'echo'            => true,
   'fallback_cb'     => 'wp_page_menu',
   'before'          => '',
   'after'           => '',
   'link_before'     => '',
   'link_after'      => '',
   'items_wrap'      => '<ul id="top-nav">%3$s</ul>',
   'depth'           => 0,
   'walker'          => '');
 ?>
 <?php wp_nav_menu($args);?>