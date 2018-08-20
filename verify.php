<?php
$username = isset($_GET['u'])?$_GET['u']:'';
$purchase_code = isset($_GET['pc'])?$_GET['pc']:'';
$secret = "BatmanVsSuperman";

if ( '' == $username || '' == $purchase_code ) {
	die( 'error' );
}

if('batman'==$username && '112233' == $purchase_code){
	$token = md5($username.$purchase_code.$secret);
	die($token);
}else{
	die('error');
}
