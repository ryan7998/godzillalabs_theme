<?php

/**
 * @file
 * template.php
 */
 
 
function godzillalabs_menu_tree__primary($variables){
	return '<ul class="menu nav navbar-nav navbar-right">' . $variables['tree'] . '</ul>';
}
function godzillalabs_menu_tree__secondary($variables){
	return '<ul class="menu nav navbar-nav navbar-left">' . $variables['tree'] . '</ul>';
}
function godzillalabs_preprocess_page(&$variables) {
	drupal_add_js(drupal_get_path('theme', 'godzillalabs'). '/js/custom.js', array(
		'scope' => 'footer',
	));
}
?>