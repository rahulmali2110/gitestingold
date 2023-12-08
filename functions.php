<?php
/*
 * Functions file - Calls all other required files
 *
 * PLEASE DO NOT EDIT ANY THEME FILES
 * unless you are prepared to lose all changes on the next update
 *
 * @package Fluida
 */

// variables for theme identification - do NOT edit unless you know what you are doing
define ( "_CRYOUT_THEME_NAME", "fluida" );
define ( "_CRYOUT_THEME_VERSION", "0.9.9.4" );

require_once( get_template_directory() . "/admin/main.php" ); 		// Admin side

// Frontend side
require_once( get_template_directory() . "/includes/setup.php" );     // Setup and init theme
require_once( get_template_directory() . "/includes/styles.php" );    // Register and enqeue css styles and scripts
require_once( get_template_directory() . "/includes/loop.php" );      // Loop functions
require_once( get_template_directory() . "/includes/comments.php" );  // Comment functions
require_once( get_template_directory() . "/includes/core.php" ); 	  // Core functions
require_once( get_template_directory() . "/includes/hooks.php" );     // Hooks


add_filter( 'wp_mail_from', function() {
    return 'abhijitkrm001@gmail.com';
} );