<?php

if (isset($_POST['submit'])) {

	$min_user = 5;
	$min_pass	= 8;
	$names = ['Peter','Mary','Gibs','Jane','John'];
	
	$username = $_POST['name'];
	$password = $_POST['password'];
	$tel = $_POST['tel'];

	// echo $username;
	// echo "<br><br>";
	// echo $password;
	// echo "<br><br>";
	// echo $tel;
	// echo "<br><br>";

	if (strlen($username) < $min_user) {
		echo "username should be longer than 5 character <br><br>";
	}
	if (strlen($password) < $min_pass) {
		echo "Password should be longer than 8 character <br><br>";
	}

	if (!in_array($username, $names)){
		echo "Sorry, you are not allowed";
	}
	else{
		echo "Welcome " . $username . " !";
	}
	
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="form.php" method="post">
	<input type="text" name="name" placeholder="Enter Your Name"> <br>
	<input type="password" name="password" placeholder="Your Password"><br>
	<input type="tel" name="tel" placeholder="Your phone number"><br>
	<br>
	<input type="Submit" name="submit" value="Send">
</form>

</body>
</html>
