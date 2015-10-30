<?php
/*
 * Plugin Name: Simple Time Ago
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: simple-time-ago
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-simple-time-ago.php' );
require_once( 'includes/class-simple-time-ago-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-simple-time-ago-admin-api.php' );
require_once( 'includes/lib/class-simple-time-ago-post-type.php' );
require_once( 'includes/lib/class-simple-time-ago-taxonomy.php' );

/**
 * Returns the main instance of Simple_Time_Ago to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Simple_Time_Ago
 */
function Simple_Time_Ago () {
	$instance = Simple_Time_Ago::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Simple_Time_Ago_Settings::instance( $instance );
	}

	return $instance;
}

Simple_Time_Ago();
