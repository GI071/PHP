<?php
	$odd = (int) fgets(STDIN);
	
	if ($odd % 2 == 0) {
		$odd = $odd - 1;
	}
	for ($i = 1; $i < $odd; $i+=2) {
		echo $i . " ";
	}
	echo $odd . PHP_EOL;
?>