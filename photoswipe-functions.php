<?php 

// paste this into theme's functions.php file, or into a plugin

function photoswipe_scripts() {
	wp_enqueue_script(
		'photoswipe-ui',
		get_template_directory_uri() . '/js/photoswipe-ui-default.min.js',
		array( 'jquery' ),
		'1.0.0',
		true
	);
	wp_enqueue_script(
		'photoswipe',
		get_template_directory_uri() . '/js/photoswipe.js',
		array( 'jquery' ),
		'1.0.0',
		true
	);
	wp_enqueue_style( 'photoswipe-style', get_template_directory_uri() . '/css/photoswipe.css' );
	wp_enqueue_style( 'photoswipe-skin', get_template_directory_uri() . '/css/default-skin.css' );
}

add_action( 'wp_enqueue_scripts', 'photoswipe_scripts' );
