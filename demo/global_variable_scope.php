<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php


$x = "outside"; // global scope

function convertx (){
	$x = "inside"; // local scope

}

echo $x;

echo "<br>";

convertx();

echo $x;

echo "<br><br>";


// now making above function with global variable

$y = "outside"; // global scope

function converty (){
	global $y; // this makes global variable
	$y = "inside"; 

}

echo $y;

echo "<br>";

converty();

echo $y;



?>
	
</body>
</html>
