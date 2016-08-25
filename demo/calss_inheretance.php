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


$bmw = new Car();


// inheret everything from another class
class Plane extends Car{


}


$ac = new Plane();
$ac->MoveWheels();
echo $ac->wheels;





// if (class_exists("Plane")) {
// 	echo "it does";
// }



?>

