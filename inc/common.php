<?php
function veta_save_booking_page_name() {
	check_ajax_referer( 'craZy_wOrld', 'security' );
	if ( ! current_user_can( 'manage_options' ) ) {
		echo json_encode( [
			'status'  => 0,
			'message' => __( 'Access denied', '3veta' )
		], JSON_NUMERIC_CHECK );
	}

	if ( empty( $_POST['url'] ) ) {
		echo json_encode( [
			'status'  => 0,
			'message' => __( 'Please fill the your booking page URL.', '3veta' )
		], JSON_NUMERIC_CHECK );
	}

	$status = update_option( '3veta_booking_page', $_POST['url'] );
	if ( ! $status ) {
		$message = __( 'There was a problem, please try again', '3veta' );
		$status  = 0;
	} else {
		$message = __( 'Saved!', '3veta' );
		$status  = 1;
	}

	echo json_encode( [
		'status'  => $status,
		'message' => $message
	], JSON_NUMERIC_CHECK );
	wp_die();
}

add_action( 'wp_ajax_veta_save_booking_page', 'veta_save_booking_page_name' );
