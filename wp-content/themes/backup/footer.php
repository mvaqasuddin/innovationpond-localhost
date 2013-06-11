<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<div class="wrapper">
	<div class="footer_top">
    	<div class="container_one">
        	<h1>What We Do</h1>
            <ul>
            	<li><a href="#">Management Consulting</a></li>
                <li><a href="#">Policy and Regulatory</a></li>
                <li><a href="#">Market Assessment</a></li>
                <li><a href="#">Program Management</a></li>
            </ul>
        </div>
        <div class="container_one">
        	<h1>What We Do</h1>
            <ul>
            	<li><a href="#">Management Consulting</a></li>
                <li><a href="#">Policy and Regulatory</a></li>
                <li><a href="#">Market Assessment</a></li>
                <li><a href="#">Program Management</a></li>
            </ul>
        </div>
        <div class="container_two">
        	<h1>InnovationPond</h1>
            <span class="ph">0900-123-908</span>
            <a href="#">info@innovationpond.com</a>
        </div>

        <div class="container_three">
   	    <img src="<?php echo bloginfo('template_directory');?>/images/footer_logo.png" />
        <div class="social">
        	<a href="#" class="talk"></a>
            <a href="#" class="msg"></a>
            <a href="#" class="tt"></a>
        	<a href="#" class="fb"></a>



        </div>
        </div>

  </div>
    <div class="footer_bott">
    	<span class="left">Copyright <?php echo date('Y');?> · <a href="#">InnovationPond</a> All righ ts reserved </span>
        <span class="right">Designed By : Imfahad</span>
    </div>
</div>
<!--Footer area end-->



<script src="<?php echo get_template_directory_uri(); ?>/js_n/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js_n/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js_n/waypoints.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js_n/navbar2.js" type="text/javascript"></script>
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/contacts_list.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo get_template_directory_uri(); ?>/css/mobile.css" rel="stylesheet" type="text/css">
</body>
</html>

<?php wp_footer(); ?>
</body>
</html>