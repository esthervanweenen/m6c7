<?php
session_start();

include('databaseFuncties.php');

if( registreerGebruiker( $_POST['naam'], $_POST['ww'], $_POST['gbd'], $_POST['email'] ) ){
	echo 'Succes!';
} else {
	echo 'Mislukt.';
}
?>