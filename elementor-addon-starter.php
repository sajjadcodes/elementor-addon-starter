<?php
/**
 * Plugin Name: Elementor Addon Starter
 * Description: Simple Elementor biolerplate to avoid reinvent the wheel
 * Version:     1.0.0
 * Author:      Sajad Hussain
 * Author URI:  https://sajjadcodes.com/
 */

 function elementor_addon_starter() {
    //load plugin files
    require_once(__DIR__.'/includes/widgets-manager.php');
    require_once(__DIR__. '/includes/controls-manager.php');
 }
 add_action('plugins_loaded', 'elementor_addon_starter');