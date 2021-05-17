<?php

class Complex {
	private $real;
	private $imaginary;
	
	private function validate($value) {
		if (is_numeric($value)) {
			return $value;
		} else {
			throw new Exception("fuck off");
		}
	}
	
	public function __construct($real=0.0, $imaginary=0.0) {
		$this->real = $this->validate($real);
		$this->imaginary = $this->validate($imaginary);
	}
	
	public function __get($name) {
		return $this->$name;
	}
	
	public function __set($name, $value) {
		$this->$name = $this->validate($value);
	}
	
	public function distance (Complex $other) {
		return "Distance is: " . hypot($this->real - $other->real, $this->imaginary - $other->imaginary);
	}	
	
	public function __toString() {
		return sprintf("(%g, %g)", $this->real, $this->imaginary);
	}
	
	
	public function enlarge (Complex $other) {
		$this->real = $this->real + $other->real;
		$this->imaginary = $this->imaginary + $other->imaginary;
		return $this;
	}
	
	
	
}	

	function len(Complex $name) {
		echo $name . "'s Length is: " . hypot($name->real, $name->imaginary) . PHP_EOL;
	}
	
	function compare ($real, $imaginary) {
		if ($real == $imaginary) {
			echo $real . " is equal to " . $imaginary . PHP_EOL;
		} else {
			echo $real . " is NOT equal to " . $imaginary . PHP_EOL;
		}
	}
	
	function areTheSame ($real, $imaginary) {
		if ($real === $imaginary) {
			echo $real . " and " . $imaginary . " are references to the same instance" . PHP_EOL;
		} else {
			echo $real . " and " . $imaginary . " are different instances" . PHP_EOL;
		}
	}
	
	function sum ($a, $b) {
		$c = new Complex; 
		$c->real = $a->real + $b->real;
		$c->imaginary = $a->imaginary + $b->imaginary;
		return $c;
	}
	
	function diff ($a, $b) {
		$c = new Complex; 
		$c->real = $a->real - $b->real;
		$c->imaginary = $a->imaginary - $b->imaginary;
		return $c;
	}
	
	function multiply ($a, $b) {
		$mult = new Complex; 
		
		$mult->real = $a->real * $b->real - $a->imaginary * $b->imaginary;
		$mult->imaginary = $a->real * $b->imaginary + $a->imaginary * $b->real;
		return $mult;
	}
	
	
	
	$a = new Complex(3.15, 5.0);
    $b = new Complex(3.15, 7.0);
    $c = new Complex(3.15, 7.0);
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
	
	echo multiply($a, $b) . PHP_EOL;
	

?>
