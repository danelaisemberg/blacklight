<?php
/**
 * Theme for Blacklight theme
 *
 * @package Blacklight
 */


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Ajustes de Blacklight',
		'menu_title'	=> 'Blacklight',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	
}