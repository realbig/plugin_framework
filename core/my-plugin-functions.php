<?php
/**
 * Provides helper functions.
 *
 * @since      0.1.0
 *
 * @package    MyPlugin
 * @subpackage MyPlugin/core
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since 0.1.0
 *
 * @return MyPlugin
 */
function MYPLUGIN() {
	return MyPlugin::getInstance();
}