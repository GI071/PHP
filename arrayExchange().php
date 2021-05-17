<?php
	function arrayExchange($array, $len) {
		$len = $len - 1;
		for ($i = 0, $temp = 0; $i < $len; $i += 2) {
			$temp = $array[$i];
			$array[$i] = $array[$i+1];
			$array[$i+1] = $temp;
		}
	}
?>