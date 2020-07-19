<?php

add_action('wp_enqueue_script', 'load_jquery');
function load_jquery() {
    wp_enqueue_script('jquery');
}

if (function_exists('register_sidebar')) {

	register_sidebar(array('name' => 'Menu',
							'description' => '',
							'before_widget' => '',
							'after_widget' => ''));
							
	register_sidebar(array('name' => 'Banner',
							'description' => '',
							'before_widget' => '',
							'after_widget' => ''));
							
	register_sidebar(array('name' => 'Social',
							'description' => '',
							'before_widget' => '',
							'after_widget' => ''));
							
	register_sidebar(array('name' => 'Footer',
							'description' => '',
							'before_widget' => '',
							'after_widget' => ''));
}

function stout_customizer($wp_customize) {

	$wp_customize->add_section('images', array(
		'title' => __('Bilder', 'stout')
	));
	
	$wp_customize->add_setting('logo');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
		'label' => 'Logo',
		'section' => 'images',
		'settings' => 'logo',
	)));
	
	$wp_customize->add_setting('instrument_left');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'instrument_left', array(
		'label' => 'Instrument Links',
		'section' => 'images',
		'settings' => 'instrument_left'
	)));
	
	$wp_customize->add_setting('instrument_right');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'instrument_right', array(
		'label' => 'Instrument Rechts',
		'section' => 'images',
		'settings' => 'instrument_right'
	)));
	
	$wp_customize->add_section('urls', array(
		'title' => __('URLs', 'stout')
	));
	
	$wp_customize->add_setting('facebook_url');
	$wp_customize->add_control('facebook_url', array(
		'label' => 'Facebook URL',
		'section' => 'urls',
		'setting' => 'facebook_url'));
		
	$wp_customize->add_setting('youtube_url');
	$wp_customize->add_control('youtube_url', array(
		'label' => 'YouTube URL',
		'section' => 'urls',
		'setting' => 'youtube_url'));
}

add_action('customize_register', 'stout_customizer');

add_theme_support('post-thumbnails');
set_post_thumbnail_size(556);

// Fix for qTranslate plugin and "Home" menu link reverting back to default language
function qtranxf_convertHomeURL($url, $what) {
    if(defined("qtranxf_convertURL") && $what=='/') return qtranxf_convertURL($url);
    return $url;
}
add_filter('home_url', 'qtranxf_convertHomeURL', 10, 2);
?>