<?php
	function arrayScan($in, $arr, $limit) {
		$arr = fgetcsv($in, 0, " ");
		return min(count($arr), $limit);
	}
?>