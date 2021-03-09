<?php

/**
 * Adding 'cmb2' vendor
 */
if ( file_exists( dirname( __FILE__ ) . '/../../vendors/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/../../vendors/cmb2/init.php';
}

/**
 * Define the metabox and field configurations.
 */
function wppresets_settings() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'wppresets_settings_metabox',
		'title'         => __( 'Settings', 'wppresets' ),
		'object_types'  => array( 'presets', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );



	}

add_action( 'cmb2_admin_init', 'wppresets_settings' );
