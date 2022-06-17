<?php
/**
 * Plugin Name: Elementor Addon Starter
 * Description: Simple Elementor biolerplate to avoid reinvent the wheel
 * Version:     1.0.0
 * Author:      Sajad Hussain
 * Author URI:  https://sajjadcodes.com/
 */


 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function elementor_addon_starter() {

	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );

	// Run the plugin
	\Elementor_Addon_Starter\Plugin::instance();

}
add_action( 'plugins_loaded', 'elementor_addon_starter' );