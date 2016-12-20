<?php
/*
Plugin Name: Panayiotis Georgiou
Plugin URI: https://www.panayiotisgeorgiou.com
Description: Adds a Jetpack subscription widget after each blog post.
Version: 1.0
Author: Panayiotis
Author URI: https://www.panayiotisgeorgiou.com
License: MIT
*/

function jetpack_after_post( $content ) {
	global $post;
	$post_type = get_post_type( $post );

	// If we're not on a blog post, bail.
	if ( $post_type != 'post' ) {
		return $content;
	}

	ob_start();

	// Display the Jetpack widget.
	$instance = array();
	$args     = array(
		'before_widget' => '',
		'after_widget'  => '',
	);

	the_widget( 'Jetpack_Subscriptions_Widget', $instance, $args );

	return $content . ob_get_clean();
}

add_filter( 'the_content', 'jetpack_after_post', 500 );
