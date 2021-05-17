<?php
	$multiple = (int) fgets(STDIN);
	
	$limit = $multiple - $multiple%3;
	for ($i = 0; $i < $limit; $i+=3) {
		echo $i . " ";
	}
	echo $limit . PHP_EOL;
?>