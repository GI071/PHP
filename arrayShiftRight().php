<?php
	function arrayShiftRight($array, $size) {
		$temp = $array[$size-1];
		$size = $size - 2; 
		for ($i = $size; $i >= 0; $i--) {
			$array[$i+1] = $array[$i];
		}
		$array[0] = $temp;
	}
?>


