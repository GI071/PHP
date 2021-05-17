<?php
	$dividend = (int) fgets(STDIN);
	$divisor = (int) fgets(STDIN);
	
	
	if ($divisor < 0) {
		$divisor = $divisor * (-1);
	}
	$multiple = $dividend - $dividend % $divisor;
    
    if ( $multiple > $dividend ) {
        $multiple -= $divisor;
    }
	echo $multiple . PHP_EOL;
?>