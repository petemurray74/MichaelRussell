<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

	<div class="off-canvas-wrap">
		<div class="inner-wrap">
			<div id="container">

				<header class="header" role="banner">

					<div id="inner-header">
						<div class="branding row">
							<div class="large-6 columns logo">
								<img src="/wp-content/themes/michaelrussell/images/logo.png" width="355" height="67">
							</div>
							<div class="large-6 columns strapline large-text-right">
							<h4>Direct Payment &amp; Payroll Specialists</h4>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns pic-row">
								<img src="/wp-content/themes/michaelrussell/images/picture-row.jpg" width="980" height="170">
							</div>
						</div>

						 <?php get_template_part( 'partials/nav', 'offcanvas' ); ?>

						 <?php // get_template_part( 'partials/nav', 'topbar' ); ?>

						 <?php  // get_template_part( 'partials/nav', 'offcanvas-sidebar' ); ?>

						<!-- You only need to use one of the above navigations.
							 Offcanvas-sidebar adds a sidebar to a "right" offcanavas menus. -->

					</div> <!-- end #inner-header -->

				</header> <!-- end header -->