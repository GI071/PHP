<?php
	$a = (int) fgets(STDIN);
	$b = (int) fgets(STDIN);

	if ($a<=$b) {
		echo "alpha";
	} else if ($a<0) {
		echo "bravo";
	} else if ($b==0) {
		echo "charlie";
	} else {
		echo "zulu";
	}
?>