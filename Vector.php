<?php

class Vector {
	private $x;
	private $y;
	
	private function validate($value) {
		if (is_numeric($value)) {
			return $value;
		} else {
			throw new Exception("fuck off");
		}
	}
	
	public function __construct($x=0.0, $y=0.0) {
		$this->x = $this->validate($x);
		$this->y = $this->validate($y);
	}
	
	public function __get($name) {
		return $this->$name;
	}
	
	public function __set($name, $value) {
		$this->$name = $this->validate($value);
	}
	
	public function distance (Vector $other) {
		return "Distance is: " . hypot($this->x - $other->x, $this->y - $other->y);
	}	
	
	public function __toString() {
		return sprintf("(%g, %g)", $this->x, $this->y);
	}
	
	
	public function enlarge (Vector $other) {
		$this->x = $this->x + $other->x;
		$this->y = $this->y + $other->y;
		return $this;
	}
	
	
	
}	

	function len(Vector $name) {
		echo $name . "'s Length is: " . hypot($name->x, $name->y) . PHP_EOL;
	}
	
	function compare ($x, $y) {
		if ($x == $y) {
			echo $x . " is equal to " . $y . PHP_EOL;
		} else {
			echo $x . " is NOT equal to " . $y . PHP_EOL;
		}
	}
	
	function areTheSame ($x, $y) {
		if ($x === $y) {
			echo $x . " and " . $y . " are references to the same instance" . PHP_EOL;
		} else {
			echo $x . " and " . $y . " are different instances" . PHP_EOL;
		}
	}
	
	function sum ($a, $b) {
		$c = new Vector; 
		$c->x = $a->x + $b->x;
		$c->y = $a->y + $b->y;
		return $c;
	}
	
	function diff ($a, $b) {
		$c = new Vector; 
		$c->x = $a->x - $b->x;
		$c->y = $a->y - $b->y;
		return $c;
	}
	
	
	
	$a = new Vector(3.15, 5.0);
    $b = new Vector(3.15, 7.0);
    $c = new Vector(3.15, 7.0);
    $d = $a;
    $e = clone $a;

    echo "a: " . $a . PHP_EOL;
    echo "b: " . $b . PHP_EOL;
    echo "c: " . $c . PHP_EOL;

    compare($a, $b);
    compare($b, $c);

    areTheSame($a, $b);
    areTheSame($a, $d);
	areTheSame($b, $c);

    echo $a->distance($b) . PHP_EOL;
    echo $b->distance($c) . PHP_EOL;
	
	len($a) . PHP_EOL;
	echo sum($a, $b) . PHP_EOL;
	echo diff($a, $b) . PHP_EOL;
	echo $a->enlarge($b) . PHP_EOL;
	

?>
