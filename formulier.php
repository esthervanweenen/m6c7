<?php
session_start();

if( !isSet( $_SESSION['login'] ) ){
	$_SESSION['login'] = false;
	$_SESSION['user'] = 0;
}

if( $_SESSION['login'] ){
	header( 'Location: index.php' ); //Doorsturen naar startpagina omdat je al ingelogged bent
}

?>
<!doctype html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<form method="POST" action="login.php">
			<input type="text" name="lln" id="lln" required placeholder="Gebruikersnaam" />
			<input type="password" name="ww" id="ww" required placeholder="Wachtwoord" />
			<input type="submit" value="Login" />
		</form>
	</body>
</html>