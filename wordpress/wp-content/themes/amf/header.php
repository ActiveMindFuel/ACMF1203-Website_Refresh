<!doctype html>
	

	<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
	<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
	<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
	<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">
			<div id="navigation">
     			<nav class="navbar navbar-default navbar-static-top">
     				<div class="container-fluid">
     					<div class="navbar-header">
     						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
     							<span class="sr-only">Toggle navigation</span>
     							<span class="icon-bar"></span>
     							<span class="icon-bar"></span>
     							<span class="icon-bar"></span>
     						</button>
     						<a class="navbar-brand" href="<?php echo home_url(); ?>">
     						   <div class="nav-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/nav-logo.svg"></div>
     						</a>
     					</div>
     					<?php
     						wp_nav_menu( array(
     						 	'menu'              => 'primary',
     						 	'theme_location'    => 'primary',
     						 	'depth'             => 2,
     						 	'container'         => 'div',
     						 	'container_class'   => 'collapse navbar-collapse',
     						 	'container_id'      => 'bs-example-navbar-collapse-1',
     						 	'menu_class'        => 'nav navbar-nav navbar-right',
     						 	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
     						 	'walker'            => new wp_bootstrap_navwalker())
     						);
     					?>
     				</div>
     			</nav>
     		</div>
			

			<!--
			<div class="slickslider">
				<div>your content</div>
				<div>your content</div>
				<div>your content</div>
			</div>

			<div class="parent-container">
				<a href="<?php// echo get_stylesheet_directory_uri(); ?>/library/images/apple-touch-icon.png">Open popup 1</a>
				<a href="<?php// echo get_stylesheet_directory_uri(); ?>/library/images/nothumb.gif">Open popup 2</a>
				<a href="<?php// echo get_stylesheet_directory_uri(); ?>/library/images/win8-tile-icon.png">Open popup 3</a>
			</div>
			-->