<?php
	$max = (int) fgets(STDIN);
	$multiple = (int) fgets(STDIN);
	
	
	if ($multiple < 0) {
		$multiple = $multiple * (-1);
	}
	$limit = $max - ($max % $multiple);
	
	for ($i = 0; $i < $limit; $i+=$multiple) {
		echo $i . " ";
	}
	echo $limit . PHP_EOL;
?>