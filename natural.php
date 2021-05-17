<?php
	$natural = (int) fgets(STDIN);
	
	$i = 1;
	while ($i < $natural) {
		echo $i . " ";
		$i++;
	}
	echo $natural . PHP_EOL;
?>