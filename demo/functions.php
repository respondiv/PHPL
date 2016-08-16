<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

/* syntax 

function FunctionName()
{
	# code...
}

*/

// Hello functions
function say_Something(){
	echo "Hello everyone <br>";

}

say_Something();


// Sum functions
function calculate(){
	echo "<br>function calculate begins <br><br>";
	echo 10 + 10 . "<br>";
	echo "<br>function calculate ends <br><br>";

}

// divisible by 3 function
function oddOrEven(){
	$listOddNumbers = array(3,5,7,9,11,13,15,17,19,20);
	echo "<br>function oddOrEven begins <br><br>";
	foreach ($listOddNumbers as $number) {
		if ($number % 3 ==0 ) {
			echo $number . " is divisible by 3 <br>";
		}
		else{
			echo $number . " is not divisible by 3 <br>";
		}
	}
	echo "<br>function oddOrEven ends <br><br>";
}


// function within function

function init(){
	echo "<br> this is init function. It will call calculate and oddOrEven function <br>";
	calculate();
	oddOrEven();
}


//  Call / Start init function
init ();


?>
	
</body>
</html>
