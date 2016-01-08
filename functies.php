<?php
	function dbconnect(){
		include("dbdef.php"); 
		
		$connect = mysql_connect($db_hostname, $db_user, $db_password);
		if ($connect == false){
			die("verbinding met ". $db_hostname . "is niet gelukt."); 
		}
		
		$database = mysql_select_db($db_name, $connect); 
		if($database == false){
			die("Database" . $db_name . "kan niet geselecteerd worden."); 
		}
		
		return $database; 
	}	

?>