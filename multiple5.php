<?php
	$multiple = (int) fgets(STDIN);
	
	$limit = $multiple - $multiple%5;
	for ($i = 0; $i < $limit; $i+=5) {
		echo $i . " ";
	}
	echo $limit . PHP_EOL;
?>