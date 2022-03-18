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