<?php

class Point {
	private $x;
	private $y;
	
	private function validate($value) {
		if (is_numeric($value)) {
			return $value;
		} else {
			throw new Exception("fuck off");
		}
	}
	
	public function __construct($x=0, $y=0) {
		$this->x = $this->validate($x);
		$this->y = $this->validate($y);
	}
	
	public function __get($name) {
		return $this->$name;
	}
	
	public function __set($name, $value) {
		$this->$name = $this->validate($value);
	}
	
	public function distance (Point $other) {
		return "Distance is: " . hypot($this->x - $other->x, $this->y - $other->y);
	}	
	
	public function __toString() {
		return sprintf("(%g, %g)", $this->x, $this->y);
	}
	
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
	
	$a = new Point(3, 5);
    $b = new Point(3, 7);
    $c = new Point(3, 7);
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

?>
