<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

// Variable Starts with $. This is an empty variable 
$city;


// Variable with value

$name = "AOR";
$number = 100;


echo $name; 

echo "Has";

echo $number;


// Good format for Variable Name

$country = "Canada";
$First_Name = "John";
$last_Name = "Doe";
$billingAddress = "John's billing address";


/*  Don't use this format for variable names

$number-list = 100;
$0number = 10;

*/


// variable are case sensetive

$NUMBER = 1000;
$NUMBeR = 1000;


// Here $NUMBeR is not equal to $NUMBER because they are two different variables


//  Variable Data Type

// String
$dogName = "Scooby";

// This is also string
$dogAge = "2"; //years

// Integer
$dogWeight = 7; // KG

// Floating point numbers
$dogLength = 1.5; //feet


// Concatination example: Ading string

echo "<br>" . $dogName . " is " . $dogAge . " years old" . " and weight " . $dogWeight . " kg ";


// Variable with HTML tag.

$cityName = "<h1>Calgary</h1>";

echo $cityName;

?>
	
</body>
</html>
