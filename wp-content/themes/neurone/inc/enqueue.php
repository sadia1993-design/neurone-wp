<?php

/**
 * Enqueue scripts and styles.
 */

function neurone_scripts()
{
	//enqueue style
	wp_enqueue_style( 'animate-style', get_template_directory_uri(). '/assets/css/animate.min.css', array(), _S_VERSION , 'all');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), _S_VERSION , 'all');
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri(). '/assets/css/owl.carousel.min.css', array(), _S_VERSION , 'all');
	wp_enqueue_style( 'bootsnav', get_template_directory_uri(). '/assets/css/bootsnav.css', array(), _S_VERSION , 'all');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/bootstrap/css/bootstrap.min.css', array(), _S_VERSION , 'all');
	wp_enqueue_style( 'neurone-style', get_stylesheet_uri(), array(), _S_VERSION );


	//enqueue js
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), 'v.3.3.7', true );
	wp_enqueue_script( 'bootsnav-js', get_template_directory_uri() . '/assets/js/bootsnav.js', array('jquery'), 'v.1.2', true );
	wp_enqueue_script( 'owlCarousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'ajaxchimp-js', get_template_directory_uri() . '/assets/js/ajaxchimp.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'ajaxchimp-config', get_template_directory_uri() . '/assets/js/ajaxchimp-config.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), _S_VERSION, true );

}
add_action('wp_enqueue_scripts','neurone_scripts');
