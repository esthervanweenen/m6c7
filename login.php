<?php
/*echo "<h1>" . $_POST['een'] . "</h1>";
	echo "<h1>" . $_POST['twee'] . "</h1>";

	echo "<a href='login.html'> Terug naar het formulier</a>"*/
session_start();

$email = $_POST['emailadres'];
$ww = $_POST['wachtwoord'];

include( 'databaseFuncties.php' );

$query = "SELECT * FROM Gebruiker WHERE emailadres='$email' AND wachtwoord='$ww';";

$result = mysql_query( $query );

if( $result ){
	if( mysql_num_rows( $result ) == 1 ){
		$_SESSION['login'] = true;
		$_SESSION['user'] = $email;
		
		header('Location: Hoofdpagina.html');
		echo 'Succes!';
	} else {
		header('Location: loginpagina.html');
		echo 'Mislukt.';
	}
}
?>