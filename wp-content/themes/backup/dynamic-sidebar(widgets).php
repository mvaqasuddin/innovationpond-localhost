
Dynamic side bar (widgets) add script to  function.php
-------------------------------------------------------


register_sidebar( array(
		'name' => __( 'Demo', 'twentyeleven' ),
		'id' => 'sidebar-10',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


==================================================================

add script to widget into your requirment area.( div)
-----------------------------------------------------


<?php dynamic_sidebar( 'demo' );?>