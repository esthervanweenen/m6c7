<?php
	function registreerGebruiker( $naam, $ww, $gbd, $email ) {
	include( 'dbconnect.php' );
	$db = connect();

	$query = "INSERT INTO Gebruiker(naam, wachtwoord, geboortedatum, email) VALUES('$naam', '$ww', '$gbd', '$email');";

	$result = mysql_query( $query );
	
	return $result;
}
?>