<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

/* syntax 

function FunctionName($value)
{
	# code...
}

//caling function
FunctionName($value);


*/

//greeting function

function greet($message){
	echo $message;
}

//call greet function
greet("Hello everyone from the greet function");

echo "<br><br>";


// divisible by 3 function
function threeDivisible($number){

	if ($number % 3 ==0 ) {
		echo "<br>" . $number . " is divisible by 3 <br><br>";
	}
	else{
		echo $number . " is not divisible by 3 <br>";
	}

}


// call threeDivisible function
for ($i=1; $i <= 15 ; $i++) { 
	threeDivisible($i);
}

//multiple paramater function
function divide($value1,$value2){
	if ($value1 % $value2 ==0) {
		echo "<br>" . $value1 . " is divisible by " . $value2 . "<br>";
	}
	else{
		echo "<br>" . $value1 . " is not divisible by " . $value2 . "<br>";
	}
}


// call multiple paramater function: divide
$value1 = 10;
$value2 = 5;
for ($i=1; $i <= 15 ; $i++) { 
	divide($value1, $value2);
	$value1 = $value1 + 10;
	$value2 = $value2 +2;
}


// Calling multipple paramater function: divide again
divide(4, 2);

?>
	
</body>
</html>
