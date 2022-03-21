<?php


/**
 * Add a sidebar.
 */
function neurone_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'neurone' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add footer one widgets here', 'neurone' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'neurone' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add footer two widgets here', 'neurone' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'neurone_widgets_init' );

