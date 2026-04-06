<?php
/**
 * Plugin Name: WP Scan & Backup
 * Plugin URI: https://github.com/eusakiko/wp-scan
 * Description: Base plugin structure for scan and backup features.
 * Version: 0.1.0
 * Author: eusakiko
 * License: GPL2+
 * Text Domain: wp-scan
 */

if ( ! defined( 'ABSPATH' ) ) {
exit;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-scan.php';

register_activation_hook( __FILE__, array( 'WP_Scan', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'WP_Scan', 'deactivate' ) );

function wp_scan_run() {
$plugin = new WP_Scan();
$plugin->run();
}

wp_scan_run();
