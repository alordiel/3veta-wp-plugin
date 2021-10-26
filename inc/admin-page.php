<?php
/**
 * Register Menu element for the 3veta settings page
 */
function veta_register_3veta_menu_element() {

	add_menu_page(
		'3Veta Settings',
		'3Veta',
		'manage_options',
		'3Veta',
		'veta_admin_page_template',
		'none'
	);

}

add_action( 'admin_menu', 'veta_register_3veta_menu_element' );


/**
 * Including the settings template for the admin page
 */
function veta_admin_page_template() {

	return include( VETA_ABS_PATH . platformSlashes( '/inc/templates/admin.php' ) );
}


function veta_menu_icon_style() {
	$icon = VETA_REL_URL . veta_platform_slashes( '/assets/images/3veta-icon-small.png' );
	echo '<style> #toplevel_page_3Veta .wp-menu-image { background-image: url("' . $icon . '");background-size: cover; } </style>';
}

add_action( 'admin_footer', 'veta_menu_icon_style' );
