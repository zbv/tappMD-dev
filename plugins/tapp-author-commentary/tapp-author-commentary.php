<?php
/*
Plugin Name: tapp Expert Commentary
Plugin URI: http://www.tappmd.com
Description: Create Meta Boxes for Expert Commentary.
Version: 1.0
Author: Kyle Barkins
License: GPL v2 or higher
License URI: License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

//Initialize the metabox class

function wpb_initialize_cmb_meta_boxes() {
	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once(plugin_dir_path( __FILE__ ) . 'init.php');
}

add_action( 'init', 'wpb_initialize_cmb_meta_boxes', 9999 );

//Add Meta Boxes

function wpb_sample_metaboxes( $meta_boxes ) {
	$prefix = '_wpb_'; // Prefix for all fields

	$meta_boxes[] = array(
		'id' => 'expert_heading',
		'title' => 'Expert Commentary',
		'pages' => array('post'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Call To Action or Heading',
				'desc' => 'Please Include a call to action or heading to appear before the expert feedback',
				'id' => $prefix . 'expert_heading_text',
				'type' => 'text'
			),
			array(
				'name' => 'Expert Feedback',
				'desc' => 'Please include feedback from the expert',
				'id'   => $prefix . 'expert_feedback_text',
				'type' => 'textarea',
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'wpb_sample_metaboxes' );