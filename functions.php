<?php
add_action( 'wp_enqueue_scripts', 'booriva__style' );
add_action( 'wp_enqueue_scripts', 'booriva__scripts' );
function booriva__style() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'jquery.fancybox-style', get_template_directory_uri() . '/assets/css/jquery.fancybox.css' );

	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

function booriva__scripts() {

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery.fancybox-script', get_template_directory_uri() .'/assets/js/jquery.fancybox.min.js', 
    array(jquery), null, true );
    wp_enqueue_script( 'main-script', get_template_directory_uri() .'/assets/js/main.js', 
    array(jquery), null, true );
    wp_enqueue_script( 'slick-script', get_template_directory_uri() .'/assets/js/slick.min.js', 
    array(jquery), null, true );
}