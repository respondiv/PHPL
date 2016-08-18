<?php

// setcookie syntax - setcookie($cookie_name, $value, $expiration_time);
$name = "testCookies";
$value = 200;
$expiration = time() + (60*60*24*7); // time -> current time + when it expires in seconds.
setcookie($name,$value,$expiration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
if (isset($_COOKIE['testCookies'])) {
	//echo "Hey you visited us again! <br>"; 

	$cookieContent = $_COOKIE['testCookies'];	
	echo $cookieContent;	
}
else{
	$cookieContent = "";
}


?>
	
</body>
</html>
