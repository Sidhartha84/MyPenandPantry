<?php 
function MyPenandPantry_resources()
{
	wp_enqueue_style('style',get_stylesheet_uri());
} 

add_action('wp_enqueue_scripts', 'MyPenandPantry_resources');

//Add our widget location
function MyPenandPantry_WidgetInit()
{
	register_sidebar(array(
		'name' => 'Social-icon-bar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>'
	));
}

add_action('widgets_init','MyPenandPantry_WidgetInit');

//Theme Setup
function MyPenandPantry_setup(){
	// Navigation Menus
	register_nav_menus(array(
		// 'social-bar' => __('Social Menu'),
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu')
		));

	//Add feature Image support
	add_theme_support('post-thumbnails');
	add_image_size('banner_thumbnail',920,210,true);//true for hard crop false for soft crop
}

add_action('after_setup_theme','MyPenandPantry_setup');

// //Add Header background callout section to admin appearnce customize screen
function MyPenandPantry_Header_bckgrnd_callout($wp_customize){
	$wp_customize->add_section('MyPP_Header_Bckgrnd_callout_section',array(
		'title' => 'Header'
	));

	$wp_customize->add_setting('MyPP_Header_back_image');

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'
		MyPP_Header_bckgrnd_image_control',array(
			'label' => 'Image',
			'section' => 'MyPP_Header_Bckgrnd_callout_section',
			'settings' => 'MyPP_Header_back_image',
			'width'=> 920,
			'height'=> 210
	)));
}

add_action('customize_register','MyPenandPantry_Header_bckgrnd_callout');
?>

