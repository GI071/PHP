<?php
	$a = fgets(STDIN);
	$b = fgets(STDIN);
	$c = fgets(STDIN);

	if ($a>=$b && $a>=$c) {
		echo $a;
	} else if ($b>=$c) {
		echo $b;
	} else {
		echo $c;
	}
?>