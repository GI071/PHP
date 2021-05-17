<?php
	function arrayPrint($out, $array, $size) {
		$last = $size - 1;
		
		for ( $i = 0; $i < $last; $i++ ) {
			fwrite($out, $array[$i] . " ");
		}
		fwrite($out, $array[$last]);
	}
?>