<?php

class Gun {
	private $model="";
	private $capacity;
	private $amount=0;
	private $isReady=false;
	private $totalShots=0;
	
	
	private function validate($value) {
		if (is_numeric($value)) {
			return $value;
		} else {
			throw new Exception("fuck off");
		}
	}
	
	public function __construct($model="Colt-1911", $capacity = 9) {
		$this->model = $model;
		$this->capacity = $this->validate($capacity);
		$this->amount = 0;
		$this->isReady = false;
		$this->totalShots = $this->validate(0);	
	}
	
	public function __get($name) {
		// return $this->$name;
	}
	
	public function __set($name, $value) {
		$this->$name = $this->$value;
	}
	
	public function __toString() {
		return sprintf("[%s, %d, %d, %g]", $this->model, $this->capacity, $this->amount, $this->isReady);
	}
	
	public function reload($name) {
		$this->amount = $this->capacity;
		echo $name . " loaded" . PHP_EOL;
	}
	
	public function prepare($name) {
		$this->isReady = true;
		echo $name . " preparado" . PHP_EOL;
	}
	
	public function shoot($name) {
		if ( $this->isReady != true ) {
			echo "NotReady";
			return;
		}
		if ( $this->amount == 0 ) {
			echo "OutOfRounds" . PHP_EOL;
			return;
		}
		if ( $this->amount > 0 ) {
			echo "bang" . PHP_EOL;
			$this->isReady = false;
			$this->amount -= 1;
			$this->totalShots += 1;
		}
	}
	
}
	
	
	$a = new Gun("Glock", 11);
    $b = new Gun("Walther", 9);
    $c = new Gun();

    echo "a: " . $a . PHP_EOL;
    echo "b: " . $b . PHP_EOL;
    echo "c: " . $c . PHP_EOL;
	echo '\n\n' . PHP_EOL;
	$a->reload($a);
	$a->prepare($a);
	$a->shoot($a);
	echo "a: " . $a . PHP_EOL;
	$a->prepare($a);
	$a->shoot($a);
	echo "a: " . $a . PHP_EOL;
	$a->prepare($a);
	$a->shoot($a);
	echo "a: " . $a . PHP_EOL;
	$a->prepare($a);
	$a->shoot($a);
	echo "a: " . $a . PHP_EOL;

    
	

?>
