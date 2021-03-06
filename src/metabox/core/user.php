<?php

function presets_core_user_create_metabox() {

	$prefix_meta = 'presets_core_user_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box(
		array(
			'id'           => $prefix_meta . 'metabox',
			'title'        => __( '[Core] Current user', 'presets' ),
			'object_types' => array( 'presets' ), // Post type
			'context'      => 'normal',
			'priority'     => 'high',
			'show_names'   => true, // Show field names on the left
		)
	);

	$cmb->add_field(
		array(
			'name' => __( 'First Name', 'presets' ),
			'id'   => $prefix_meta . 'first_name',
			'type' => 'text',
		)
	);

	$cmb->add_field(
		array(
			'name' => __( 'Last Name', 'presets' ),
			'id'   => $prefix_meta . 'last_name',
			'type' => 'text',
		)
	);

	$cmb->add_field(
		array(
			'name' => __( 'Display Name', 'presets' ),
			'id'   => $prefix_meta . 'display_name',
			'type' => 'text',
		)
	);

	$cmb->add_field(
		array(
			'name' => __( 'Website', 'presets' ),
			'id'   => $prefix_meta . 'user_url',
			'type' => 'text_url',
		)
	);

	$cmb->add_field(
		array(
			'name' => __( 'Email', 'presets' ),
			'id'   => $prefix_meta . 'user_email',
			'type' => 'text_email',
		)
	);

	$cmb->add_field(
		array(
			'name' => __( 'Bio', 'presets' ),
			'id'   => $prefix_meta . 'description',
			'type' => 'textarea',
		)
	);

}

add_action( 'presets_create_metabox', 'presets_core_user_create_metabox' );
