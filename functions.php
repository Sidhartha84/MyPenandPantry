<?php 
function MyPenandPantry_resources()
{
	wp_enqueue_style('style',get_stylesheet_uri());
} 

add_action('wp_enqueue_scripts', 'MyPenandPantry_resources');


// Navigation Menus
register_nav_menus(array(
	'social-bar' => __('Social Menu'),
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu')
	));

?>