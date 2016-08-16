<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// Comparison Operators examples

// Ex 1
if (4 < 4) {
	echo "4 is less than 4 <br>";
}

// Ex 2
if (4 <= 4) {
	echo "4 is less than or equal to 4 <br>";
}

// Ex 3
if (4 == 4) {
	echo "4 is equal to 4 <br>";
}

// Ex 4
if (4 > 4) {
	echo "4 is greater than 4 <br>";
}

// Ex 5
if (4 >= 4) {
	echo "4 is greater than or equal to 4 <br>";
}

// Ex 6
if (4 != 5) {
	echo "4 is not equal to 5 <br>";
}


// Ex 7
if (4 <> 5) {
	echo "4 is greater than or less than 5 <br>";
}

// Ex 8
if (4 === 4) {
	echo "4 is identical to number 4 <br>";
}


// Ex 9
if (4 === '4') {
		echo "4 is identical to number 4 <br>";
}
else{
	echo "4 is not identical to string 4 <br>";
}


// Ex 10
if (4 == '4') {
		echo "4 is equal to string 4 <br>";
}


// Ex 11
if (4 === '4' || 5 < 10) {
		echo "4 is identical to string 4 or 5 is less than 10 <br>";
}

// Ex 12
if (4 === 5 && 5 < 10) {
		echo "4 is identical to 4 or 5 is less than 10 <br>";
}

?>


<h2>Comparison Operators </h2>
<pre>
	equal					==
	identica				===
	compare:
		Greater Than			>
		Less Than			<
		Greater than or equa to		>= 
		Less than or equal to		<= 
		Greater than or less than	<>	
	not equal				!=
	not identical				!===
</pre>

<h2>Logical Operators </h2>
<pre>
	And		&&
	Or		||
	Not		!
</pre>
	
</body>
</html>
