<?php
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue child scripts
 */
if ( ! function_exists( 'brook_child_enqueue_scripts' ) ) {
	function brook_child_enqueue_scripts() {
		wp_enqueue_style( 'brook-child-style', get_stylesheet_directory_uri() . '/style.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'brook_child_enqueue_scripts' );
