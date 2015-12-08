<?php
	include( 'databaseFucties.php'); 
	
	
	if( $procucten = zoekProductOpPrijs( 50, 60) ){
		echo '<ul>'; 
		
		foreach( $producten as $product{
				
			echo "<li>{$row['naam']} (&euro; $row['prijs']})</li>"; 
		} 
		echo '<ul>'; 
	}

?>


