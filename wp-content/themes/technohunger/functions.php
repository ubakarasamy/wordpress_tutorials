<?php

function techno_script_enqueue() {
//adding stylesheet
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style('customstyle2', get_template_directory_uri() . '/css/navbar.css', array(), '1.0.0', 'all');
	
//adding java scripts
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
	wp_enqueue_script('customjs2', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.2.1', true);
	
}
//adding actions
add_action('wp_enqueue_scripts', 'techno_script_enqueue');


