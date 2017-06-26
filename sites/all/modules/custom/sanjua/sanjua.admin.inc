<?php

/**
 * Form definition to manage Sanjua settings.
 *
 * @return array
 */
function sanjua_settings_form() {

	/*
	$form['product_reference'] = array(
		'#type' => 'entityreference',
		'#title' => t('Product Reference'),
		'#era_entity_type' => 'node',  // Mandatory.
		'#era_bundles' => array(), // Optional (Any bundle by default).
		'#era_cardinality' => 3,       // Optional (1 By default).
		'#era_query_settings' => array(
			'limit' => 15, // Default is 50.
			'property_conditions' => array(
				// 'entity property', 'filter value', 'operator'.
				array('nid', 0, '>'),
			),
			'field_conditions' => array(
				// 'field name', 'column', 'value', 'op', 'delta', 'language'.
				//array('field_test_field', 'value', 'test'),
			),
		),
	);
	*/

	$form['sanjua_copyright'] = array(
		'#type' => 'textfield',
		'#title' => t('Copyright'),
		'#default_value' => variable_get('sanjua_copyright',''),
	);

	// Add an uploadable banner image option
	$form['sanjua_home_video'] = array(
		'#type' => 'managed_file',
		'#title' => t('Home Video'),
		'#default_value' => variable_get('sanjua_home_video',''),
		'#upload_location' => 'public://home/',
		'#upload_validators' => array(
			'file_validate_extensions' => array('mp4 flv'),
		),
	);

	$form['sanjua_logo'] = array(
		'#type' => 'managed_file',
		'#title' => t('Logo'),
		'#default_value' => variable_get('sanjua_logo',''),
		'#upload_location' => 'public://home/',
	);

	$form['#submit'][] = 'sanjua_settings_form_submit';

	return system_settings_form($form);
}

function sanjua_settings_form_submit($form, &$form_state) {

	global $user;

	// Load the file via file fid.
	$file = file_load($form_state['values']['sanjua_home_video']);
	if ($file) {
		// Change status to permanent.
		$file->status = FILE_STATUS_PERMANENT;
		// Save.
		file_save($file);

		// Optionally record that the module (e.g. user module) is using the file.
		file_usage_add($file, 'user', 'user', $user->uid);
	}

	variable_set('sanjua_home_video_url', $file->uri);
}