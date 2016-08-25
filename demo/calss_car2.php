<?php

// Class syntax - class ClassName{}

Class Car{ // first letter needs to be capitalized

	// method = functions inside the class | outside of class they are call functions, inside they are called methods
	function MoveWheels(){
		echo "Wheel Moved";
	}


}

if(method_exists("Car","MoveWheels")){
	echo "Yes";
}
else{
	echo "no";
}



?>