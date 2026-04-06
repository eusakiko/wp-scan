<?php

if ( ! defined( 'ABSPATH' ) ) {
exit;
}

require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-wp-scan-admin.php';

class WP_Scan {
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
$admin = new WP_Scan_Admin();
$admin->run();
}
}
