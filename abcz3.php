<?php
	$a = (int) fgets(STDIN);
	$b = (int) fgets(STDIN);
	$c = (int) fgets(STDIN);
	
	if ($a + $b > $c) {
		echo "alpha" . PHP_EOL;
	} else if ($a < $b - $c) {
		echo "bravo" . PHP_EOL;
	} else if ($c % $b == 0) {
		echo "charlie" . PHP_EOL;
	} else {
		echo "zulu" . PHP_EOL;
	}
?>