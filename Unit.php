<?php

class Unit {
	private $damage;
    private $hitPoints;
    private $hitPointsLimit;
    private $name;

	
	public function __construct($name="A", $hp=5, $dmg=0) {
		$this->name = $name;
		$this->hitPoints = $hp;
		$this->damage = $dmg;
		$this->hitPointsLimit = $this->hitPoints;
	}
	
	public function __get($name) {
		return $this->name;
	}
	
	public function __set($name, $value) {
		$this->$name = $value;
	}

	public function ensureIsAlive() {
		if ( $this->hitPoints == 0 ) {
			try {
				throw new Exception ("Unit Is Dead");
			} catch (Exception $e) {
				echo "Worning: " . $e->getMessage() . PHP_EOL;
			}
		}
	}
	
	public function takeDamage($dmg) {
		$this->ensureIsAlive();
		$this->damage -= dmg;
	}
	
	public function addHitPoints($hp) {
		$this->ensureIsAlive();
		$this->hitPoints += $hp;
		echo $this->name . " heeled by " . $hp . PHP_EOL;
	}
	
	public function attack(Unit $enemy) {
	
		$enemy->hitPoints -= $this->damage;
		echo $this->name . " attacks " . $enemy->name . PHP_EOL;
		echo $enemy->name . " hitPoints: " . $enemy->hitPoints . PHP_EOL;
		if ( $enemy->hitPoints <= 0 ) {
			$enemy->$hitPoints = 0;
			try { throw new Exception("Unit Is Dead");
				} catch ( Exception $ee ) {
					echo $enemy->name . " is dead!" . PHP_EOL;
				}
		} else {
			$this->counterAttack($enemy);
		}
	}
	
	public function counterAttack($enemy) {
		$this->hitPoints -= $enemy->damage / 2;
		echo $enemy->name . " counterattacks " . $this->name . PHP_EOL;
		echo $this->name . " hitPoints: " . $this->hitPoints . PHP_EOL;
		if ( $this->hitPoints <= 0 ) {
			$this->hitPoints = 0;
			try { throw New Exception ("Unit Is Dead!");
			} catch ( Exception $eee ) {
				echo $this->name . " is dead!" . PHP_EOL;
			}
		}
	}
	
	public function __toString() {
		return sprintf("[%s, %g, %g]", $this->name, $this->hitPoints, $this->demage);
	}

	
}
	
	
	$barbarian = new Unit ("Barbarian", 200, 20);
	$knight = new Unit ("Knight", 180, 30);
	
	echo $barbarian . PHP_EOL;
	echo $knight . PHP_EOL;
	
	$barbarian->attack($knight);
	$barbarian->attack($knight);
	$knight->addHitPoints(5);
	
	echo $barbarian . PHP_EOL;
	echo $knight . PHP_EOL;
	
	
?>

