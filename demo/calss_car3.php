<?php

// Class syntax - class ClassName{}

class Car{ // first letter needs to be capitalized

	/* Creating some properties (variables tied to an object) | use either public, protected or private. Id used var, it's same as using public
	*/

	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $doors = 4;



	// method = functions inside the class | outside of class they are call functions, inside they are called methods
	function MoveWheels(){
		//echo "Wheel Moved";

		// $this is use to refer the current class inside the class 
		$this ->wheels = 10;
	}

	

}

// if(method_exists("Car","MoveWheels")){
// 	echo "Yes";
// }
// else{
// 	echo "no";
// }


// instantiate a class | use it to our app | Syntax - new ClassName(); | we can create as many instant as we need


// this $bmw is an object now as it contains all functions of class Car 
$bmw = new Car();

// displaying the properties of the method
echo $bmw->wheels . "<br>";


// changing the value of property from outside.
$bmw -> wheels = 8;
echo $bmw->wheels  . "<br>";


//calling the method
$bmw->MoveWheels();
echo $bmw->wheels  . "<br>";


// echoing and assing value at same time
$truck = new Car();
echo $truck->doors = 2;



?>

