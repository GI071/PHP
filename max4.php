<?php
	$a = fgets(STDIN);
	$b = fgets(STDIN);
	$c = fgets(STDIN);
	$d = fgets(STDIN);

	if ($a>=$b && $a>=$c && $a>=$d) {
		echo $a;
	} else if ($b>=$c && $b>=$d) {
		echo $b;
	} else if ($c>=$d) {
		echo $c;
	} else {
		echo $d;
	}
?>