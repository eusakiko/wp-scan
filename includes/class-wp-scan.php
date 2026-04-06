<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-wp-scan-admin.php';

/**
 * Clase principal del plugin WP Scan & Backup.
 */
class WP_Scan {
	/**
	 * Instancia de administración del plugin.
	 *
	 * @var WP_Scan_Admin
	 */
	private $admin;

	/**
	 * Hook de activación del plugin.
	 *
	 * @return void
	 */
	public static function activate() {
	}

	/**
	 * Hook de desactivación del plugin.
	 *
	 * @return void
	 */
	public static function deactivate() {
	}

	/**
	 * Ejecuta las acciones principales del plugin.
	 *
	 * @return void
	 */
	public function run() {
		if ( null === $this->admin ) {
			$this->admin = new WP_Scan_Admin();
		}
		$this->admin->run();
	}
}
