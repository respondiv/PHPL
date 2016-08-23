<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// function that returns value
function addNumbers($value1,$value2){
	$sum = $value1 + $value2;
	return($sum);

}

// The square of the Sum


// call addNumbers function and store it's result
$result = addNumbers(2,4);

// multiply the results by 2
echo $result * 2;

echo "<br>";

// or we can do this as well.
$result = addNumbers(100, $result);

echo $result;

?>
	
</body>
</html>
