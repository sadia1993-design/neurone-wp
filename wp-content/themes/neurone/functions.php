<?php

/**
 * neurone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package neurone
 */

if( ! defined('_$_VERSION'))
{
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function neurone_theme_supports()
{

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	/*
	 * Register menus
	 */

	register_nav_menus([
		'Header-Menu' => esc_html__('Header Menu','neurone'),
		'Footer-Menu' => esc_html__('Footer Menu','neurone'),
	]);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support('custom-logo',
	   array(
		   'height'      => 250,
		   'width'       => 250,
		   'flex-width'  => true,
		   'flex-height' => true,
	   )
	);
}

add_action('after_setup_theme', 'neurone_theme_supports');


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