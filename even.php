<?php
	$even = (int) fgets(STDIN);
	
	$even = (int)($even / 2) * 2;
	
	for ($i = 0; $i < $even; $i+=2) {
		echo $i . " ";
	}
	echo $even . PHP_EOL;
?>