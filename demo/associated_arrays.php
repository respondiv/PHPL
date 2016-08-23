<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// regular arrays

$number = array(10, 20, '2', 'john', 'Doe');

echo " this is regular array : " . $number[3] . "<br>";

//  see how the regular arrays looks like

print_r($number);

echo "<br>";

// associated array : labels data inside arrays: here is an examples

$names = array("firstName" => "John", "secondName" => "Doe");

// See how associated array looks like

print_r($names);

echo "<br>";

//  echoing associated array

echo " First Name is " . $names['firstName'] . " and last name is " . $names['secondName'];




?>

</body>
</html>
