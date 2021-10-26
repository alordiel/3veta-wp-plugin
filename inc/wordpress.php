<?php

/**
 * Register textdomain.
 */
function veta_load_textdomain() {
	load_plugin_textdomain( '3veta', false, VETA_ABS_PATH . platformSlashes( '/languages' ) );
}

add_action( 'plugins_loaded', 'veta_load_textdomain' );

/**
 * Register style sheet and scripts for the admin area.
 */
function veta_admin_styles_script() {

	$admin_base = get_current_screen();
	if ( null !== $admin_base && 'settings_page_dropdown-multisite-selector' !== $admin_base->base ) {
		return;
	}
	wp_enqueue_script(
		'veta-admin-js',
		VETA_REL_URL . veta_platform_slashes( '/assets/js/3veta-admin.js' ),
		'',
		filemtime( VETA_ABS_PATH . veta_platform_slashes( '/assets/js/3veta-admin.js' ) ),
		true
	);

	wp_enqueue_style(
		'veta-admin-css',
		VETA_REL_URL . veta_platform_slashes( '/assets/css/3veta-admin.css' ),
		'',
		filemtime( VETA_ABS_PATH . veta_platform_slashes( '/assets/css/3veta-admin.css' ) )
	);

	//Adding localization for script string
	$translation_array = array(
		'wrong_domain' => __( '', '3veta' ),
		'ajax_url'     => admin_url( 'admin-ajax.php' ),
	);
	wp_localize_script( 'veta-admin-js', 'veta_l10n', $translation_array );
}

add_action( 'admin_enqueue_scripts', 'veta_admin_styles_script' );
