<?php

if ( ! defined( 'ABSPATH' ) ) {
exit;
}

class WP_Scan_Admin {
/**
 * Inicializa hooks de administración.
 *
 * @return void
 */
public function run() {
add_action( 'admin_menu', array( $this, 'register_admin_menu' ) );
}

/**
 * Registra menú principal y submenús.
 *
 * @return void
 */
public function register_admin_menu() {
		add_menu_page(
			__( 'WP Scan', 'wp-scan' ),
			__( 'WP Scan', 'wp-scan' ),
			'manage_options',
			'wp-scan',
			array( $this, 'render_scanner_page' ),
			'dashicons-shield'
		);

add_submenu_page(
'wp-scan',
__( 'Escáner', 'wp-scan' ),
__( 'Escáner', 'wp-scan' ),
'manage_options',
'wp-scan',
array( $this, 'render_scanner_page' )
);

add_submenu_page(
'wp-scan',
__( 'Backups', 'wp-scan' ),
__( 'Backups', 'wp-scan' ),
'manage_options',
'wp-scan-backups',
array( $this, 'render_backups_page' )
);
}

/**
 * Vista del escáner.
 *
 * @return void
 */
public function render_scanner_page() {
if ( ! current_user_can( 'manage_options' ) ) {
return;
}
?>
<div class="wrap">
<h1><?php esc_html_e( 'WP Scan - Escáner', 'wp-scan' ); ?></h1>
<p><?php esc_html_e( 'Página base del escáner en construcción.', 'wp-scan' ); ?></p>
</div>
<?php
}

/**
 * Vista de backups.
 *
 * @return void
 */
public function render_backups_page() {
if ( ! current_user_can( 'manage_options' ) ) {
return;
}
?>
<div class="wrap">
<h1><?php esc_html_e( 'WP Scan - Backups', 'wp-scan' ); ?></h1>
<p><?php esc_html_e( 'Página base de backups en construcción.', 'wp-scan' ); ?></p>
</div>
<?php
}
}
