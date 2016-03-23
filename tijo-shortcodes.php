<?php
/*
   Plugin Name: Tijo Shortcodes
   Plugin URI: http://wordpress.org/extend/plugins/tijo-shortcodes/
   Version: 1.0
   Author: Josh Horneck
   Author URI: http://tijo.io
   Description: This plugin contains basic shortcodes like tabs, accordions, Genesis columns, buttons and more.
   Text Domain: tijo-shortcodes
   License: GPLv3
  */

//Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
  exit;
}

require_once ( plugin_dir_path(__FILE__) . '/includes/shortcodes.php');

// enqueue jqueryui script
function my_jquery_ui_scripts() {
    wp_enqueue_script('custom-scripts', plugin_dir_url(__FILE__) . '/js/scripts.js', array('jquery'));
    add_action( 'plugins_loaded', array( 'tijo-shortcodes', 'get_instance' ) );
}

add_action('wp_enqueue_scripts', 'my_jquery_ui_scripts');


