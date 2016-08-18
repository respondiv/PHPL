<?php


class Car{ 

	// Static Modifiers - any data that is statis in the class. The data only belongs to the class and is not accessible via instances.
	static $wheels = 4;
	var $hood = 1;



	function MoveWheels(){
		// assining vaue to static class
		Car::$wheels = 10;
	}

	

}

$bmw = new Car();

// echo $bmw->wheels . "<br>"; // this doesn't work


// using static properties
echo Car::$wheels . "<br>";

// or you can do this, which gives same results as above

$wheelsData = Car::$wheels;

echo $wheelsData  . "<br>";


// displaying static content using method
Car::MoveWheels();
echo Car::$wheels . "<br>";

?>

