<?php
	$in = fopen("task.in", "r");
	$out = fopen("task.out", "w");
	
	$arr = fgetcsv($in, 100, " ");
	$a = (int) $arr[0];
	$b = (int) $arr[1];
	
	function gcd($a, $b) {
		if ( $b == 0 ) {
			return $a;
		}
		return gcd($b, $a % $b);
	}
	
	$lcm = $a / gcd($a, $b) * $b;
	fwrite($out, $lcm);

	fclose($in);
	fclose($out);
?>