<div class="vulture_funds">
						<?php
							$my_id = 26;
							$post_id_26 = get_post($my_id, ARRAY_A);
							$title = $post_id_26['post_title'];
						?>

 						<h3><?php echo $title; ?></h3>

						<img src="<?php echo get_post_meta(26, 'Image', true) ?> " 
						width="210" height="75" alt="test"  />
						<p><?php $post_id=26; echo get_post_meta($post_id, 'Short  Text', true) ?></p>

   						<a href="<?php echo get_post_meta($post_id, 'Read More Link', true) ?> ">
						<?php echo get_post_meta($post_id, 'Read More Text', true) ?> </a>
					</div>