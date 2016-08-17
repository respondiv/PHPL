<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php


//  short syntax for array: arrayname = [value1, value2, value3, ...]
$list = [2,3,81,64,324,9,4,16];


// max - biggest value in array - Syntax - max($list); 

echo max($list);

echo "<br><br>";


// min - smallext value in array - Syntax - min($list)

echo min($list);

echo "<br><br>";


// print_r - prints human readble value of variable / array - Syntax - print_r($list)

print_r($list);

echo "<br><br>";


// sort - sort array in ascending order - Syntax - sort($list)

sort($list);

print_r($list);

echo "<br><br>";




?>

<p><strong>More Array Function can be found here: </strong> <a href="http://php.net/manual/en/ref.array.php" target="_blank">http://php.net/manual/en/ref.array.php</a></p>

</body>
</html>
