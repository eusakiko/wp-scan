<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Gestiona la interfaz y menús de administración del plugin.
 */
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
			array( $this, 'render_main_page' ),
			'dashicons-shield',
			80
		);

		add_submenu_page(
			'wp-scan',
			__( 'Escáner', 'wp-scan' ),
			__( 'Escáner', 'wp-scan' ),
			'manage_options',
			'wp-scan-scanner',
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
	 * Vista principal del plugin.
	 *
	 * @return void
	 */
	public function render_main_page() {
		$this->guard_admin_access();
		?>
		<div class="wrap">
			<h1><?php esc_html_e( 'WP Scan', 'wp-scan' ); ?></h1>
			<p><?php esc_html_e( 'Panel principal de WP Scan en construcción.', 'wp-scan' ); ?></p>
		</div>
		<?php
	}

	/**
	 * Vista del escáner.
	 *
	 * @return void
	 */
	public function render_scanner_page() {
		$this->guard_admin_access();
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
		$this->guard_admin_access();
		?>
		<div class="wrap">
			<h1><?php esc_html_e( 'WP Scan - Backups', 'wp-scan' ); ?></h1>
			<p><?php esc_html_e( 'Página base de backups en construcción.', 'wp-scan' ); ?></p>
		</div>
		<?php
	}

	/**
	 * Verifica permisos de acceso a páginas de administración.
	 *
	 * @return void
	 */
	private function guard_admin_access() {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( esc_html__( 'No tienes permisos suficientes para acceder a esta página.', 'wp-scan' ) );
		}
	}
}
