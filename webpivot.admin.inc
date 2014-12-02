<?php

function web_pivot_admin_settings()
{
	$all_views = views_get_all_views($reset = FALSE);
	//dpm($all_views);
	global $views_name;
	$i=0;
	foreach ($all_views as $key => $value) {
		if (isset($value->display['page'])) {
			$views_name[$value->human_name] =  array('machine_name' => $value->name,
			'path' => $value->display['page']->display_options['path'],
			'display' => FALSE
			);
			$i++;	
		}	
		global $views_name;
		//$views_name_serialzed = serialize($views_name);
		
		//dpm(unserialize($test));
	}
	//dpm($views_name);
	variable_set('webpivot_coweb_pivot_admin_settingsunt',$i);
	variable_set('webpivot_serialzed',$views_name);
	foreach ($views_name as $key => $value) {
		$form[$value['machine_name']] =array(
			'#type' => 'checkbox',
		    '#title' => $key,
		    '#default_value' => variable_get('webpivot_'.$value['machine_name']),
		);
	}
	$form['submit'] = array(
		'#type' => 'submit',
		'#value' => 'Save'
	);
	return $form;
}

function web_pivot_admin_settings_submit($form, &$form_state) {
	//global $views_name;
	foreach ($views_name as $key => $value) {
		variable_set('webpivot_'.$value['machine_name'],$form[$value['machine_name']]['#checked']);
	}
	//dpm($views_name);
}


