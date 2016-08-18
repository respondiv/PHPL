<?php

// Class syntax - class ClassName{}

class Car{ // first letter needs to be capitalized

	/* Creating some properties (variables tied to an object) | use either public, protected or private. Id used var, it's same as using public
	*/

	var $wheels = 4;	// same as public
	public $hood = 1;	// Available to everyone
	protected $engine = 1;	// only available to this class or sub class or it's child class (inherited class using extend) 
	private $doors = 4;	// only available to this class


	function showProperty(){
		echo $this->doors;
	}

	

}

class Semi extends Car{
	function showProperty(){

		// echo $this->engine;			//this displays the property bcoz it's protected
		echo $this->doors;				// this doesn't display the property bcoz it's private
	}
}


// this $bmw is an object now as it contains all functions of class Car 
$bmw = new Car();

// displaying the var properties 
echo $bmw->wheels . "<br>";


// displaying the public properties 
echo $bmw->hood . "<br>";

// // displaying the protected properties | this should not work
// echo $bmw->engine . "<br>";

// // displaying the private properties | this should not work
// echo $bmw->doors . "<br>";


// displaying the private properties using method 
echo $bmw->showProperty() . "<br>";


$suv = new Semi();

// displaying the protected properties using method 
echo $suv->showProperty() . "<br>";



?>

