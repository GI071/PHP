<?php
	function arrayMin($array, $size) {
		$min = $array[0];
		for ($i = 0; $i < $size; $i++) {
			if ($array[$i] >= $array[$i+1]) {
				$min = $array[$i+1];
			}
		}
		return $min;
	}
?>