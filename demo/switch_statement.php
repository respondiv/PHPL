<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php


// default if statement, checks one condition at a time

$number = 4;

if ($number < 10) {
	echo "do this <br>";
}

if ($number < 30) {
	echo "do this <br>";
}


if ($number < 50) {
	echo "do this <br>";
}


/* switch statement: is used to select one of many blocks of code to be executed.

if else statement does same thing as switch statement and is even powerful. But, switch is a construct for better code readability and maintainability. 
*/

$newNumner = 14;

switch ($newNumner) {
	case 20:
		echo "it is less than 20";
		break;
	
	case 44:
		echo "it is 44";
		break;

	case 54:
		echo "it is 54";
		break;

	case '64':
		echo "it is string 64";
		break;

	default:
		echo "it doesn't match any numbers";
		break;
}



?>
	
</body>
</html>
