<!DOCTYPE html>

<html>
	<head>
		<title><?php wp_title('-', 1, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta name="robots" content="index, follow" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" media="all" />
		<meta name="viewport" content="width=device-width">
		<link rel="pingback" href="<?php bloginfo('wpurl'); ?>/xmlrpc.php" />
		<link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="<?php bloginfo('wpurl') ?>/feed/" />

		<?php wp_head(); ?>

		<script>
			// fix resizing issues with Image Rotator Widget
			jQuery(window).resize(function($){
				jQuery(".irw-widget").each(function(){
					irw_init(jQuery(this));
				});
			});
		</script>
	</head>

	<body>
		<div class="instrument left">
			<img src="<?php echo esc_url(get_theme_mod('instrument_left')); ?>" />
			<div class="border"></div>
		</div>
		<div class="instrument right">
			<img src="<?php echo esc_url(get_theme_mod('instrument_right')); ?>" />
			<div class="border"></div>
		</div>

		<div id="wrapper">
			<div id="banner">
				<div id="slideshow">
					<?php if(!function_exists('dynamic_sidebar') || dynamic_sidebar('Banner')) {} ?>
					<div class="border"></div>
				</div>

				<div id="logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img id="logo" src="<?php echo esc_url(get_theme_mod('logo')); ?>"></img>
					</a>
				</div>

				<div id="banner-right">
					<a class="social" href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png"></img></a>
					<a class="social" href="<?php echo esc_url(get_theme_mod('youtube_url')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.png"></img></a>
					<?php qtranxf_generateLanguageSelectCode('image') ?>
				</div>
			</div>
			<div id="glass">
				<div id="menu">
					<?php if(!function_exists('dynamic_sidebar') || dynamic_sidebar('Menu')) {} ?>
				</div>
				<div id="content">
