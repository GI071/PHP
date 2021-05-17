<?php

class Point {
	private $x;
	private $y;
	
	public function __construct($x=0, $y=0) {
		$this->x = $x;
		$this->y = $y;
	}
	
	public function __get($name) {
		return $this->$name;
	}
	
	public function __set($name, $value) {
		$this->$name = $value;
	}
	
	
	
	public function __toString() {
		return sprintf("[%g, %g]", $this->x, $this->y);
	}
	
}


class Car extends Point {
	private $model;
	Private $fuelAmount;
	private $fuelCapacity;
	private $fuelConsumption;
	private $location;
	
	
	public function __construct($model="A", Point $location) {
		$this->model = $model;
		$this->fuelAmount = 0;
		$this->fuelCapacity = 60;
		$this->fuelConsumption = 0.6;
		$this->location = $location;
	}
	
	public function __get($name) {
		return $name;
	}
	
	public function __set($name, $value) {
		$this->$name = $this->$value;
	}
	
	public function __toString() {
		return sprintf("%s %s", $this->model, $this->location);
	}
	
	public function distance($x, $y) {
		return hypot($this->x - $x, $this->y - $y);
	}
	
	public function refill($fuel) {
		if ( $fuel > $this->fuelCapacity ) {
			$this->fuelAmount = $this->fuelCapacity;
			try {
				throw new Exception ("Too Much Fuel");
			} catch	(Exception $ee) {
				echo $ee . PHP_EOL;
			}
		}
		if ($fuel <= $this->fuelCapacity ) {
			$this->fuelAmount += $fuel;
		}
	}
	
	public function drive(Point $destination) {
		echo "Distance: " . $this->distance($destination->x, $destination->y) . PHP_EOL;
		$dist = $this->distance($destination->x, $destination->y);
		if ($dist * $this->fuelConsumption > $this->fuelAmount) {
			try {
				throw new Exception("Out Of Fuel");
			} catch (Exception $e) {
				echo $e;
			}
		}
		$this->location->x = $destination->x;
		$this->location->y = $destination->y;
		$this->fuelAmount = $dist / $this->fuelConsumption;
	}
	
	public function drive2($x, $y) {
		echo "Distance: " . $this->distance($x, $y) . PHP_EOL;
		$dist = $this->distance($x, $y);
		if ($dist * $this->fuelConsumption > $this->fuelAmount) {
			try {
				throw new Exception("Out Of Fuel");
			} catch (Exception $e) {
				echo $e;
			}
		}
		$this->location->x = $x;
		$this->location->y = $y;
		$this->fuelAmount = $dist / $this->fuelConsumption;
	}
	
}


	$car = new Car("BMW", new Point(0, 0));
	echo $car . PHP_EOL;
	
	$car->refill(5);
	$car->drive(new Point(3,4));
	
	echo $car . PHP_EOL;
	
	$car->drive2(3,4);
	echo $car . PHP_EOL;
	
?>