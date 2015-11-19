<?php
	session_start();
	
	if( !isSet( $_SESSION['login'] ) ){
		$_SESSION['login'] = false;
		$_SESSION['user'] = 0;
	}
	
	if( !$_SESSION['login'] ){
		header( 'Location: formulier.php' );
	}
?>