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
<?php if(is_page(array('portfolio-2','event','about'))) : ?>
	<style>.nav-container{display:none; }
			.entry-title{display:none; }
	</style>
<?php endif; ?>
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
	</div>
	<!--<Heaad area end>-->

	