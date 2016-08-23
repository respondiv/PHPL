<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

/* syntax

foreach ($variable as $key => $value) {
	# code...
}

*/


// it will looks everyvalue in the array and execute the statement

// regular array foreach loop
$listOddNumbers = array(3,5,7,9,11,13,15,17,19,20);
foreach ($listOddNumbers as $number) {
	if ($number % 3 ==0 ) {
		echo $number . " is divisible by 3 <br>";
	}
	else{
		echo $number . " is not divisible by 3 <br>";
	}
}

echo "<br>";

// associated array foreach loop
$listEvenNumbers = array('twoSquare' => 4, 'fourSquare' => 16, 'sixSquare' => 36, 'eightSquare' =>64, 'tenSquare' => 100 );
foreach ($listEvenNumbers as $key => $value) {
	//echo $key . " <br>";
	//echo $value . " <br>";
	switch ($key) {
		case 'twoSquare':
			echo " 2 square is " . $value . "<br>"; 
			break;
		case 'fourSquare':
			echo " 4 square is " . $value . "<br>"; 
			break;
		case 'sixSquare':
			echo " 6 square is " . $value . "<br>"; 
			break;
		case 'eightSquare':
			echo " 8 square is " . $value . "<br>"; 
			break;
		case 'tenSquare':
			echo " 10 square is " . $value . "<br>"; 
			break;
		
		default:
			echo "does not match any value";
			break;
	}
}

?>
	
</body>
</html>
