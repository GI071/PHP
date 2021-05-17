<?php

class Pen {
	private $inkAmount;
	private $inkCapacity;
	
	public function __construct($inkCapacity=100) {
		$this->inkCapacity = $inkCapacity;
		$this->inkAmount = 0;
	}
	
	public function __get($name) {
		return $this->name;
	}
	
	public function __set($name, $value) {
		$this->$name = $value;
	}
	
	public function refill() {
		$this->inkAmount = $this->inkCapacity;
	}
	
	public function write(Paper $paper, $message="alo") {
		$pen = new Pen;
		$pen->refill();
		
		if ( $pen->inkAmount >= strlen($message) ) {
			
			$paper->addContent($message);
			$pen->inkAmount = $pen->inkAmount - strlen($message);
		} else {
			echo $pen->inkAmount . PHP_EOL;
			$message = substr($message, 0, $pen->inkAmount);
			echo $message . PHP_EOL;
			$paper->addContent($message);
			$pen->inkAmount = 0;
		}
		
		if ( $pen->inkAmount == 0 ) {
			try { 
				throw new Exception("Out Of Ink.");
			} catch (Exception $e) {
					echo "Message: " . $e->getMessage() . PHP_EOL;
				}
		}
	}
}
	
class Paper {
    private $maxSymbols;
    private $content = "";
	private $emptyplace;
    
	public function Paper($maxSymbols=100) {
		$this->maxSymbols = $maxSymbols;
		$this->content = "Content:";
		$this->emptyplace = 0;
		
	}
	
	public function __get($name) {
		return $this->name;
	}
	
	public function addContent($message) {
		$this->emptyplace = $this->maxSymbols - $this->content;
		
		if ( $this->emptyplace <= strlen($message) ) {
			$message = substr($message, 0, $this->emptyplace);
			$this->content = $this->content . " " . $message;
			$this->emptyplace = 0;
			try { throw new Exception ("Out Of Space.");
			} catch (Exception $ee) {
				echo "Message: " . $ee->getMessage() . PHP_EOL;
			}
			
		} else {
		
			$this->content = $this->content . " " . $message;
			$this->emptyplace -= strlen($message);
		}
	}
	
	public function show() {
		echo $this->content . PHP_EOL;
	}
	
}

	$pen = new Pen;
	$paper = new Paper;
	
	$paper->show();
	$pen->write($paper, "Hello, world!");
	$pen->write($paper, "Bye, world!");
	$paper->show();
	
?>

