<?php

$kalenderNaam = $_POST['gebruiker'];

include ("functies.php");
dbconnect();

$query = "INSERT INTO Kalender(activiteitnaam) VALUES('$gebruikerNaam');";

$result = mysql_query($query);
if ($result == false){
	echo "Er is iets fout gegaan:" . mysql_error();
} else {
	echo "De query is goed gegaan. Vang de reactie van database op.";
}
echo "<a href='queryEditor.html'>Ga terug naar het formulier</a>";

?>