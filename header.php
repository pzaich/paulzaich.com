<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www.paulzaich.com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<?php if (is_search()) { ?>
	<meta name="robots" content="index, follow" />
	<meta content='width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0' name='viewport'>
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (is_front_page()){
		     	bloginfo('description'); echo ' - ';}
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      else if (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (is_front_page()){
		      	bloginfo('description'); echo ' - ';}
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      else if (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php if (is_page() || is_single()) : ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php the_excerpt(); ?><?php endwhile; endif; ?><?php endif; ?>">
	<meta name="google-site-verification" content="eDHIEsLlUK1d1lsqIQPoCa2eBWhVdKsWnpSqSXWdLoY" />
	<meta name="author" content="Paul Zaich">
	<meta name="Copyright" content="Copyright Paul Zaich 2011. All Rights Reserved.">




	<!--  Mobile Viewport meta tag
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width -->
	<!-- Uncomment to use; use thoughtfully!
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->

	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->

	<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/nivo-theme/default.css" type="text/css" />


	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>


	<?php wp_head(); ?>
	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
    <script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.nivo.slider.pack.js"></script>

	<!--Add Facebook Meta Tags to Post Pages -->
	<?php if(is_single() && yapb_is_photoblog_post()):?>
	<?php $photo_tag = yapb_get_thumbnail('', '', '', array('w=210', 'q=90'), ' '); ?>
		<meta property="og:image" content="<?php $photo_src = explode('"', $photo_tag); echo "$photo_src[5]"; ?>" />
	<?php endif;?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<div class="content-wrapper">
			<div id="header">
				<div class="content-inner-wrapper">
					<a class="logo" href="<?php bloginfo('url') ?>"><span>Z</span></a>
					<nav>
				    	<ul class="navbar">
				    		<li<?php
				    		        if (is_category('blog') || in_category('blog') )
				    		        {
				    		        echo " class=\"current\"";
				    		        }?>>
				    		        <a  href="/blog">Blog</a>
				    		</li>
				    		<li<?php
				    		        if (is_page('my-work'))
				    		        {
				    		        echo " class=\"current\"";
				    		        }?>>
				    		        <a href="<?php bloginfo('url') ?>/my-work/">Work</a>
				    		</li>

				        	<li <?php
		                if (is_category('photography') || in_category('photography') )
		                {
		                echo " class=\"current\"";
		                }?>
					        >
					                <a  href="/photography/">Photography</a>
					        </li>
				        </ul>
				   </nav>
				</div>
			</div>

<div class="content-inner-wrapper <?php if(is_front_page()) : echo 'home'; endif; ?>" id="<?php if(is_front_page()) : echo 'home'; endif; ?>">
