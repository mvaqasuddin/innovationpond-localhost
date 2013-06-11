<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script>  
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-tooltip.js"></script>  
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-popover.js"></script> 
<script> $(function () { $(".tips").popover(); }); </script>

<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body>
	<div class="nav-container">

				<nav>

					<ul>

						<li><a href="#we_do" class="selected">What We Do</a></li>
						<li><a href="#method">Our Methodology</a></li>
						<li><a href="#testimonials">Testimonials</a></li>
						<li><a href="#contact">Contact</a></li>
						<?php //wp_nav_menu(array('menu'=>'flow_menu'));  ?></nav>

					</ul>

					<div class="nav-left"></div>
					<div class="nav-right"></div>
					<div class="nav-above"></div>

				</nav>

			</div>



	<div class="header_area">
		<div class="wrapper">
	    	<div class="logo"><img src="<?php echo bloginfo('template_directory');?>/images/logo.png"  /></div>

	        <div class="menu_btn"><a href="#">Menu</a></div>
		<div class="main_nav">

	    	<ul>
				<!--Wordpress Header Navigation-->
				<?php wp_nav_menu(array('menu'=>'navigation'));  ?></nav>
	        </ul>	

	    </div>

		<script language="javascript">
	    $(document).ready(function() {
	        $('head').append('<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=2.0"/>');
	    });

	    $('.menu_btn').click(function() {
	      $('.main_nav').slideToggle('slow', function() {
	      });
	    });

	    $(window).resize(function(){
	        var w = $(window).width();
	        if(w > 760 && $('.main_nav').css('display', 'none') ) {
	            $('.main_nav').css('display', 'block')
	        }
	        if(w < 760 && $('.main_nav').css('display', 'block') ) {
	            $('.main_nav').css('display', 'none')
	        }				
	    });
	    </script>
	<!-- main nav ends -->

	  </div>
	</div><!--<Heaad area end>-->

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

