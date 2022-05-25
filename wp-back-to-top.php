<?php
/*
Plugin Name:  Back To Top
Plugin URI:   https://devway.in
Description:  This plugin will automatically add a back to top button.
Version:      1.0.0
Author:       André Amorim
Author URI:   https://www.linkedin.com/in/andrefcamorim/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  afca-back-to-top
Domain Path:  /languages
*/


// Add button "back to top" in the footer
add_action( 'wp_footer', 'add_back_to_top_btn' );
function add_back_to_top_btn() {
	echo '<a href="#" class="afca-topbutton"></a>';
}

add_action( 'wp_enqueue_scripts', 'callback_for_setting_up_scripts' );
function callback_for_setting_up_scripts() {
	wp_enqueue_style(
		'afca-topbutton-style',
		plugins_url( '/assets/css/style.css', __FILE__ ),
		[],
		'1.0.0'
	);

	wp_enqueue_script(
		'afca-topbutton-script',
		plugins_url( '/assets/js/script.js', __FILE__ ),
		[ 'jquery' ],
		'1.0.0',
		true
	);
}


