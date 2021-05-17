<?php
	function arrayReverse($array, $size) {
		$size = $size - 1;
		for ($i = 0, $temp = 0; $i < $size; $i++, $size--) {
			$temp = $array[$size];
			$array[$size] = $array[$i];
			$array[$i] = $temp;
		}
	}
?>