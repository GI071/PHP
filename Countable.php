<?php

class Countable1 {
	public	static $counter = 0;

	public function __construct() {
		self::$counter += 1; 
	}
}
	
	new Countable1();
	new Countable1();
	new Countable1();
	
	echo Countable1::$counter . PHP_EOL;

?>
