<?php
/*
   Plugin Name: Tijo Shortcodes
   Plugin URI: http://wordpress.org/extend/plugins/tijo-shortcodes/
   Version: 1.0
   Author: Josh Horneck
   Author URI: http://tijo.io
   Description: This plugin contains a CPT and Taxonomy generator and basic shortcodes like tabs, accordions, Genesis columns, buttons and more.
   Text Domain: tijo-custom
   License: GPLv3
  */

//Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
  exit;
}

require_once ( plugin_dir_path(__FILE__) . '/includes/shortcodes.php');


