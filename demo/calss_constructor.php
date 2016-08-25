<?php

// Class syntax - class ClassName{}

class Car{ // first letter needs to be capitalized

	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $doors = 4;


	// Construct are default method that initiate automatically when a instance of a class is created 
	function __construct(){
		echo $this->wheels = 20;
	}

	function MoveWheels(){
		$this ->wheels = 10;
	}

	
}


$bmw = new Car();





?>

