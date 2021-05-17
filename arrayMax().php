<?php
	function arrayMax($array, $size) {
		$max = 0;
		for ($i = 0; $i < $size; $i++) {
			if ($array[$i] <= $array[$i+1]) {
				$max = $array[$i+1];
			}
		}
		return $max;
	}
?>