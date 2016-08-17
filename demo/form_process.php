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