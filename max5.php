<?php
	$a = (int) fgets(STDIN);
	$b = (int) fgets(STDIN);
	$c = (int) fgets(STDIN);
	$d = (int) fgets(STDIN);
	$e = (int) fgets(STDIN);

	if ($e>=$a && $e>=$b && $e>=$c && $e>=$d) {
		echo $e;
	} else if ($a>=$b && $a>=$c && $a>=$d) {
		echo $a;
	} else if ($b>=$c && $b>=$d) {
		echo $b;
	} else if ($c>=$d) {
		echo $c;
	} else {
		echo $d;
	}
?>