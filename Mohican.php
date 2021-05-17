<?php

class Mohican {
	public $name;
	public static $arr = array();

	public function __construct($n="") {
		$this->name = $n;
		array_push(self::$arr, $this->name);
	}
	
	public function __toString() {
		return sprintf("%s", $this->name);
	}
}
	
	new Mohican("mohican1");
	new Mohican("mohican2");
	new Mohican("mohican3");
	new Mohican("mohican4");
	
	echo end(Mohican::$arr) . PHP_EOL;
	array_pop(Mohican::$arr);
	echo end(Mohican::$arr) . PHP_EOL;

?>
