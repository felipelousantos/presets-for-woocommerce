<?php

function presets_core_user_apply_meta() {
	$prefix = 'core_user_';

	$userdata = array(
		'ID' => get_current_user_id(),
	);

	$fields = array(
		'first_name',
		'last_name',
		'display_name',
		'description',
		'user_url',
		'user_email',
	);

	foreach ( $fields as $field ) {
		$meta = get_presets_meta( $prefix, $field );
		if ( ! empty( $meta ) ) {
			$userdata[ $field ] = $meta;
		}
	}

	wp_update_user( wp_slash( $userdata ) );

}

add_action( 'presets_apply_meta', 'presets_core_user_apply_meta' );
