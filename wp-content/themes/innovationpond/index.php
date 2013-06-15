<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="banner_area">

	<div class="wrapper">

    <img src="<?php echo bloginfo('template_directory');?>/images/banner_img.png" /> </div>

</div>
<!--Banner area end-->



<div class="wrapper">
<section id="we_do">
	<div class="we_do">
    	<div class="heading">
        	<div class="title_border_l"></div>
            <h1>What We Do</h1>
            <div class="title_border_r"></div>
        </div>

        <ul>
        	<li>
	 			<?php $recent = new WP_Query("page_id=36"); while($recent->have_posts()) : 						 $recent->the_post();?>
				<?php $image = get_post_meta($post->ID,'consulting',true); ?>
            	<a href="<?php echo get_permalink($post->ID);?>"><div class="d_border"><div class="cons_icon"><img src="<?php echo $image; ?>" /></div></div></a>
            	<h1 class="d_blue"><a href="<?php echo get_permalink($post->ID);?>"><?php the_title(); ?></a></h1>
            	<p><?php excerpt('15'); ?></p>
				<?php endwhile; ?>
            </li>

            <li>
	<?php $recent = new WP_Query("page_id=34"); while($recent->have_posts()) : 						 $recent->the_post();?>
		<?php $image = get_post_meta($post->ID,'menotring_icon',true); ?>
            <div class="g_border">
              <a href="<?php echo get_permalink($post->ID);?>"><div class="menot_icon"><img src="<?php echo $image;?>" /></div></div></a>
            <h1><a href="<?php echo get_permalink($post->ID);?>"><?php the_title(); ?></a></h1>
            <p><?php excerpt('15'); ?></p>
			<?php endwhile; ?>
            </li>

            <li class="last">
	<?php $recent = new WP_Query("page_id=47"); while($recent->have_posts()) : 						 $recent->the_post();?>
		<?php $image = get_post_meta($post->ID,'funding_icon',true); ?>
            <a href="<?php echo get_permalink($post->ID);?>"><div class="l_border"><div class="fund_icon"><img src="<?php echo $image; ?>" /></div></div></a>
            <h1><a href="<?php echo get_permalink($post->ID);?>"><?php the_title(); ?></a></h1>
             <p><?php excerpt('15'); ?></p>
			<?php endwhile; ?>
			<li><?php $name = do_shortcode("[testimonials-pro]"); ?></li>
            </li>
        </ul>

    </div></section>
</div>

<!--What We area end-->


<div class="methodlogy_area">
	<section id="method"><div class="wrapper">

    	<div class="heading_two">
        	<div class="title_border_l"></div>
		<?php $recent = new WP_Query("page_id=57"); while($recent->have_posts()) : 						 $recent->the_post();?>
            <h1><?php the_title();?></h1>
            <div class="title_border_r"></div>
        </div>

        <div class="text">
			<?php the_content(); ?>
			<?php $image = get_post_meta($post->ID,'method_img',true);?>

        </div>
    	<div class="image_are"><img src="<?php echo $image; ?>" /></div>

        <a href="#" class="learn_butt"></a>

    </div></section>
</div>
<?php endwhile;?>

<!--Methodlogy area end-->


<div class="wrapper"><section id="testimonials">
	<div class="testimonials_area">
    	<div class="heading">
        	<div class="title_border_l"></div>
            <h1>Testimonials</h1>
            <div class="title_border_r"></div>
        </div>

        <div class="txt">
        <p>“Temperinte interdum sempus odio urna eget curabitur semper convallis nunc laoreet. Nullain convallis ris elis vest liberos nis diculis feugiat in rutrum. Suspendreristibulumfaucibulum lobortor quis tortortor ris”</p>

        <p class="sm_t">Tom Moody SR Manager</p>
        <p><img src="<?php echo bloginfo('template_directory');?>/images/testimonials_b.png" /></p>
        </div>



    </div></section>
</div>


<!--Testimonials area end-->

<section id="contact">
<div class="contact_area">
	<div class="wrapper">

    	<div class="heading">
        	<div class="title_border_l"></div>
            <h1>Contact Us</h1>
            <div class="title_border_r"></div>
        </div>

        <div class="lcd">
        <div class="display">
        	<div class="txt">
            <p>We encourage our Customers to talk to us directly. Do not Hesitate, Contact us at following emails as per your need</p>

            <a href="#" class="email_bg">info@innovationpond.com</a>

            </div>
        </div>
		</div>

    </div>
</div>
</section>
<!--Contact area end-->




<?php get_footer(); ?>