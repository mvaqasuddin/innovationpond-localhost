<img src="<?php bloginfo('template_url')?>/images/info_icon.jpg" alt="" title="" /> 


----------------------------------------------------------------------------------------------------------------------------

<p><?php echo get_post_meta($my_query->post->ID, 'Short Text', true) ?> </p>



-----------------------------------------------------------------------------------------------------------------------------

<h2><img src="<?php bloginfo('template_url')?>/images/latest_icon.jpg" 
				alt="" title="" /> Latest News</h2>
-----------------------------------------------------------------------------------------------------------------------------


<?php
        				$post_id = 528;
        				$post_data = get_post($post_id, ARRAY_A);
					echo $post_data['post_content'];
 ?>

