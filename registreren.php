<?php
session_start(); 

$naam = $_POST['naam']; 
$ww = $_POST['wachtwoord']; 
$gb = $_POST['geboortedatum']; 
$em = $_POST['emailadres']; 
$rol = $_POST['rol']; 

include( 'databaseFuncties.php' ); //=> fucties.php

$query = "INSERT INTO Gebruiker (naam, wachtwoord, geboortedatum, emailadres, rol ) VALUES ('$naam', '$ww', '$gb', '$em', '$rol' ); "; 
$result = mysql_query ( $query); 

if( $result ){
	$_SESSION['login'] = true;
	$_SESSION['user'] = $em;
	
	header('Location: Hoofdpagina.html');
	echo 'Succes!';
} else {
	header('Location: loginpagina.html');
	echo 'Mislukt.';
}
?>
