<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title> <?php if (!is_front_page() && !is_home() ) { the_title(); ?> &raquo; <?php } bloginfo('name'); ?></title>
	
	<meta name="description" content="<?php if (have_posts()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; endif; ?>" />
	
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed (<?php bloginfo('language'); ?>)" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!--Stylesheets-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/base.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/wp.css" type="text/css" media="screen" charset="utf-8" />
	
	<!--Mobile-->
	<?php if (ereg('iPhone', $_SERVER['HTTP_USER_AGENT']) || ereg('iPod', $_SERVER['HTTP_USER_AGENT']) || ereg('iPad',$_SERVER['HTTP_USER_AGENT'])): ?>
		
		<meta name="viewport" content="initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="apple-touch-fullscreen" content="yes" />
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png" />
		
		<?php if (ereg('iPad', $_SERVER['HTTP_USER_AGENT'])): ?>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ipad.css" />
		<?php else: ?>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/iphone.css" />	
		<?php endif; ?>
		
	<?php else: ?>
		<meta name="viewport" content="width=960" />
	<?php endif ?>

	<?php wp_head(); ?>
	
	<!--Scripts--> 
	<?php // NOTE: We are enqueing jQuery from Google CDN in the functions.php. If it doesn't load we grab the local version ?>
	<script>!window.jQuery && document.write('<script src="scripts/jquery-1.6.2.min.js"><\/script>')</script>
	<script type="text/javascript">
		jQuery(document).ready(function init() { 
			// jQuery init function
		});
	</script>
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.browser.addEnvClass.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/init.js"></script>
	 
	
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<div id="header">
			
		</div><!--#end header-->