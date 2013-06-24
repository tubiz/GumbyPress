<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- favicon -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

		<!-- WordPress Pingback Url-->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div class="container">

			<header class="header" role="banner">

			<div class="row">
				<div class="three columns">
					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<!--<p id="logo" class="h1">-->
					<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png"/></a>
					<!--</p>-->

					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>
				</div>
				<div class="nine columns">
				</div>
			</div>


			<div class="row navbar">				
					<a class="toggle" gumby-trigger=".navbar > ul" href="#">
						<i class="icon-menu"></i>
					</a> 
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'twelve columns','walker' => new Walker_Page_Custom, 'container' => '', 'container_class' => '' ) ); ?>
			<!--	</div> -->
			</div>

			</header> <!-- end header -->