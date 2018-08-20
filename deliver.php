<?php
$username      = isset( $_GET['u'] ) ? $_GET['u'] : '';
$purchase_code = isset( $_GET['pc'] ) ? $_GET['pc'] : '';
$token         = isset( $_GET['token'] ) ? $_GET['token'] : '';
$file          = isset( $_GET['file'] ) ? $_GET['file'] : '';
$secret        = "BatmanVsSuperman";
$_token        = md5( $username . $purchase_code . $secret );

if ( '' == $username || '' == $purchase_code || '' == $token || '' == $file ) {
	die( 'error' );
}
$file = $file . ".zip";

if ( $_token == $token ) {
	header( 'Content-Description: File Transfer' );
	header( 'Content-Type: application/octet-stream' );
	header( 'Content-Disposition: attachment; filename="' . basename( $file ) . '"' );
	header( 'Expires: 0' );
	header( 'Cache-Control: must-revalidate' );
	header( 'Pragma: public' );
	header( 'Content-Length: ' . filesize( $file ) );
	readfile( $file );
} else {
	die( 'error' );
}