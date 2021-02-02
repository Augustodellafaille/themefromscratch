<?php 
//register nav walker class_alias
require_once('wp-bootstrap-navwalker.php');

function wpb_theme_setup(){
	//nav Menus
	register_nav_menus(array(
		'primary' => __('primary Menu')
	));
}

add_action('after_setup_theme','wpb_theme_setup');
