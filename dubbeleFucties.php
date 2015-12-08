<?php
function zoekProductOpPrijs ( $min, $max ) {
	include( 'dbconnect.php'); 
	$db = connect(); 
	
	$query = "SELECT * FROM Product WHERE prijs >= $min AND prijs <= $max;"; 
	
	$result = mysql_query( $query ); 
	
	if( $result ){
		$producten = array(); 
		while( $row = mysql_fetch_assoc( $result ) ) {
			$product[] = $row;  
		} 
		
		return $producten; 
	}
	
	return FALSE; 

}
?>