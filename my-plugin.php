<?php
/**
 * Plugin Name: My Plugin
 * Description: Description
 * Version: 0.1.0
 * Author: Joel Worsham
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

// Define plugin constants
define( 'MYPLUGIN_VERSION', '0.1.0' );
define( 'MYPLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'MYPLUGIN_URL', plugins_url( '', __FILE__ ) );

/**
 * Class MYPLUGIN
 *
 * Initiates the plugin.
 *
 * @since   0.1.0
 *
 * @package MYPLUGIN
 */
class MYPLUGIN {

	private function __clone() { }

	private function __wakeup() { }

	/**
	 * Returns the *Singleton* instance of this class.
	 *
	 * @since     0.1.0
	 *
	 * @staticvar Singleton $instance The *Singleton* instances of this class.
	 *
	 * @return MYPLUGIN The *Singleton* instance.
	 */
	public static function getInstance() {

		static $instance = null;

		if ( null === $instance ) {
			$instance = new static();
		}

		return $instance;
	}

	/**
	 * Initializes the plugin.
	 *
	 * @since 0.1.0
	 */
	protected function __construct() {

		$this->add_base_actions();
		$this->require_necessities();
	}

	/**
	 * Requires necessary base files.
	 *
	 * @since 0.1.0
	 */
	public function require_necessities() {
	}

	/**
	 * Adds global, base functionality actions.
	 *
	 * @since 0.1.0
	 */
	private function add_base_actions() {

		add_action( 'init', array( $this, '_register_assets' ) );
		add_action( 'admin_enqueue_scripts', array( $this, '_enqueue_assets' ) );
	}

	/**
	 * Registers the plugin's assets.
	 *
	 * @since 0.1.0
	 */
	function _register_assets() {
	}

	function _enqueue_assets() {
	}
}

require_once __DIR__ . '/core/my-plugin-functions.php';
MYPLUGIN();