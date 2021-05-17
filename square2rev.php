<?php
	$square = (int) fgets(STDIN);
	$counter = 1;
	
	for ($row = 1; $row <= $square; $row++) {
		$counter = $square * $square - $row * $square + 1;
		for ($col = 1; $col < $square; $col++) {
			echo $counter . " ";
			$counter++;
		}
		echo $counter . PHP_EOL;
	}
?>