<?php
session_start(); 

$rol = $_POST['rol']; 
$naam = $_POST['naam']; 
$ww = $_POST['ww']; 
$gb = $_POST['gb']; 
$em = $_POST['em']; 

include( 'dbconnect.php' ); //=> fucties.php
$db = connect(); //dbconnect()

$query = "INSERT INTO Gebruiker (rol, naam, wachtwoord, geboortedatum, emailadres ) VALUES ($rol, '$naam', '$ww', $gb, '$em' ); "; 

echo $query; 
$result = mysql_query ( $query); 
if ( $result ){
	echo 'Succesvol geregistreerd.'; 
} else {
	echo 'Mislukt, probeerd het later nog eens. '; 
} 
?>
