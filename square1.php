<?php
	$square = (int) fgets(STDIN);
	
	for ($raw = 1; $raw <= $square; $raw++) {
		for ($col = 1; $col < $square; $col++) {
			echo $col . " ";
		}
		echo $col . PHP_EOL;
	}
	
    
	
?>