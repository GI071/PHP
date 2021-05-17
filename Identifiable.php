<?php

class Identifiable {
	public static $counter = 0;
	public $id = 0;

	public function __construct() {
		self::$counter += 1;
		$this->id = self::$counter;
	}
	public function __destruct() {
		self::$counter -= 1;
	}
	
	public function __toString() {
		return sprintf("%g", $this->id);
	}
}
	
	$obj1 = new Identifiable();
	$obj2 = new Identifiable();
	$obj3 = new Identifiable();

	unset($obj3);
	unset($obj1);

	echo $obj2 . PHP_EOL;

?>
