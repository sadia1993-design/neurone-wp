<?php

add_action( 'init', 'neurone_slider_custom_post_init' );

function neurone_slider_custom_post_init()
{
	$labels = [
		'name'                  => _x( 'Slider', 'Post type general name', 'slider' ),
		'singular_name'         => _x( 'Slider', 'Post type singular name', 'slider' ),
		'menu_name'             => _x( 'Slider', 'Admin Menu text', 'slider' ),
		'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'slider' ),
		'add_new'               => __( 'Add New', 'Slider' ),
		'add_new_item'          => __( 'Add New Slider', 'Slider' ),
		'new_item'              => __( 'New Slider', 'Slider' ),
		'edit_item'             => __( 'Edit Slider', 'Slider' ),
		'view_item'             => __( 'View Slider', 'Slider' ),
		'all_items'             => __( 'All Slider', 'Slider' ),
		'search_items'          => __( 'Search Slider', 'Slider' ),
		'not_found'             => __( 'No Slider found.', 'Slider' ),
		'not_found_in_trash'    => __( 'No Slider found in Trash.', 'Slider' ),
		'featured_image'        => _x( 'Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe' ),

	];
	$args = array(
		'labels'             => $labels,
		'description'        => 'Neurone custom post type',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'custom-fields', 'thumbnail' ),
		'show_in_rest'       => true
	);
	register_post_type('neurone_slider', $args);
}


// ********************* feature area start *************************//


add_action( 'init', 'neurone_feature_custom_post_init' );

function neurone_feature_custom_post_init() {

	$s_labels = [
		'name'               => _x( 'Feature ', 'Post type general name', 'neurone' ),
		'singular_name'      => _x( 'Feature ', 'Post type singular name', 'neurone' ),
		'menu_name'          => _x( 'Feature ', 'Admin Menu text', 'neurone' ),
		'name_admin_bar'     => _x( 'Feature ', 'Add New on Toolbar', 'neurone' ),
		'add_new'            => __( 'Add New', 'neurone' ),
		'add_new_item'       => __( 'Add New Feature', 'neurone' ),
		'new_item'           => __( 'New Feature ', 'neurone' ),
		'edit_item'          => __( 'Edit Feature ', 'neurone' ),
		'view_item'          => __( 'View Feature ', 'neurone' ),
		'all_items'          => __( 'All Feature ', 'neurone' ),
		'search_items'       => __( 'Search Feature ', 'neurone' ),
		'not_found'          => __( 'No Feature  found.', 'neurone' ),
		'not_found_in_trash' => __( 'No Feature  found in Trash.', 'neurone' ),
		'featured_image'     => _x( 'Feature  Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe' ),

	];
	$args   = array(
		'labels'             => $s_labels,
		'description'        => 'Neurone Service custom post type',
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'neurone' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'page-attributes', 'thumbnail' ),
		'show_in_rest'       => true
	);
	register_post_type( 'neurone_feature', $args );
}
// ********************* feature area end*************************//


// ********************* feature area start *************************//


add_action( 'init', 'neurone_service_custom_post_init' );

function neurone_service_custom_post_init() {

	$s_labels = [
		'name'               => _x( 'Service ', 'Post type general name', 'neurone' ),
		'singular_name'      => _x( 'Service ', 'Post type singular name', 'neurone' ),
		'menu_name'          => _x( 'Service ', 'Admin Menu text', 'neurone' ),
		'name_admin_bar'     => _x( 'Service ', 'Add New on Toolbar', 'neurone' ),
		'add_new'            => __( 'Add New', 'Service' ),
		'add_new_item'       => __( 'Add New Service', 'neurone' ),
		'new_item'           => __( 'New Service ', 'neurone' ),
		'edit_item'          => __( 'Edit Service ', 'neurone' ),
		'view_item'          => __( 'View Service ', 'neurone' ),
		'all_items'          => __( 'All Service ', 'neurone' ),
		'search_items'       => __( 'Search Service ', 'neurone' ),
		'not_found'          => __( 'No Service  found.', 'neurone' ),
		'not_found_in_trash' => __( 'No Service  found in Trash.', 'neurone' ),
		'featured_image'     => _x( 'Service  Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe' ),

	];
	$args   = array(
		'labels'             => $s_labels,
		'description'        => 'Neurone Service custom post type',
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'neurone' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'custom-fields',   'thumbnail' ),
		'show_in_rest'       => true
	);
	register_post_type( 'neurone_service', $args );
}
// ********************* service area end*************************//