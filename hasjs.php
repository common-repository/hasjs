<?php
/*
Plugin Name: Has.JS
Plugin URI: http://www.ramoonus.nl/wordpress/hasjs/
Description: Pure feature detection library, a la carte style. 
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/
function rw_hasjs() {
		wp_deregister_script('hasjs'); // deregister
		wp_register_script('hasjs', plugins_url('/js/has.js', __FILE__), false, '20100716'); // re register // 2010 07 16
		wp_enqueue_script('hasjs'); // load
} 
add_action('init', 'rw_hasjs');
?>