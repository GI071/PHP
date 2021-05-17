<?php
	$a = (int) fgets(STDIN);
	
	if ($a%2 == 0) {
		echo "alpha" . PHP_EOL;
	} 
	if ($a%3 == 0) {
		echo "bravo" . PHP_EOL;
	}
	if ($a%5 == 0) {
		echo "charlie" . PHP_EOL;
	} 
	if ($a%2 != 0 && $a%3 != 0 && $a%5 != 0) {
		echo "zulu";
	}
?>