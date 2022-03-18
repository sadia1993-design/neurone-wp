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


// enqueue scripts
if (file_exists(get_template_directory() . '/inc/enqueue.php'))
{
	require_once get_template_directory() . '/inc/enqueue.php';
}

// theme supports
if (file_exists(get_template_directory() . '/inc/theme_supports.php'))
{
	require_once get_template_directory() . '/inc/theme_supports.php';
}

// REGISTERING CUSTOM NAVIGATION WALKER
if (file_exists(get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php'))
{
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
// REGISTERING CUSTOM post type
if (file_exists(get_template_directory() . '/inc/custom-post-types.php'))
{
	require_once get_template_directory() . '/inc/custom-post-types.php';
}