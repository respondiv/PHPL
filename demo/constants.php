<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php


// variable example

$number = 5;
echo "initial variable value is " . $number . "<br>";

$number++;
echo "updated variable value is " . $number . "<br>";

echo "<br>";


// constant 
define('name', 1000);

echo name;

echo "<br>";

// following gives error because it's constant

//name = name + 1;

//echo name;







?>
	
</body>
</html>
