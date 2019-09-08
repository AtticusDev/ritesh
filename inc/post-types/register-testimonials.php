<?php

$testimonial = new CPT(array(
	'post_type_name' => 'testimonial',
	'singular' => __('Testimonial', 'ritesh'),
	'plural' => __('Testimonials', 'ritesh'),
	'slug' => 'testimonial'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
    'menu_icon' => 'dashicons-format-quote'
));