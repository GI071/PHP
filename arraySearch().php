<?php
	function arraySearch($array, $size, $needle) {
		for ($i = 0; $i < $size; $i++) {
			if ($array[$i] == $needle) {
				return $i;
			}
		}
		return -1;
	}
?>