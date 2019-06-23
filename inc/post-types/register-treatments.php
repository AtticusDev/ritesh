<?php

$treatment = new CPT(array(
	'post_type_name' => 'treatment',
	'singular' => __('Treatment', 'ritesh'),
	'plural' => __('Treatments', 'ritesh'),
	'slug' => 'treatment'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
    'menu_icon' => 'dashicons-carrot'
));