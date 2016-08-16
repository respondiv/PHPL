<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

// While Loops

$number = 4;
$counter = 1;

while ( $number <= 10) {
	echo "Hello for " . $counter . " times <br>";
	$number ++;
	$counter ++;
}


// remember the loop will go infinite if the condition keeps matching. e.g. 

/*

while ( 4 <= 10) {
	echo "Hello Everyone";
}

*/



//  Do While Loops

echo "<h3> Do while loops</h3>";

// Same while loops written differently

$i = 11;
$counter = 1;

do{
	echo "Hello for " . $counter . " times <br>";
	$i ++;
	$counter ++;

}while ( $i <= 10);


// another example of do while loop with break and if statement: needs further investigation.

$i = 7;

do {
    if ($i < 5) {
        echo "i is not big enough <br>";
        break;
    }
    $i *= 2;
    if ($i < 14) {
    	echo $i . "<br>";
    	echo "i is big enough";
        break;
    }
   echo "i is ok";
   break;

    /* process i */

} while (0);


?>
	
<h2>Difference between while loop and do while loop </h2>

<pre>
While loops only executes when the condition is correct until it becomes incorrect. If the condition is incorrect the it will not execute at all.

Do while loops executes at least 1 time. Then it will check the conditions and will keep executing until the condition is not true anymore.
</pre>


</body>
</html>
