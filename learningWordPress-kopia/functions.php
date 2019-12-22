<?php

function css(){
		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
		wp_enqueue_style('bootstrap');

		wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
		wp_enqueue_style('style');

}
function js(){
	 wp_enqueue_script('jquery');
		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
		wp_enqueue_script('bootstrap');
}


add_action('wp_enqueue_scripts', 'css');
add_action('wp_enqueue_scripts', 'js');

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));
add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
