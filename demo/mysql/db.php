<?php

	$connection = mysqli_connect(
		'localhost', //host
		'root', // db username
		'', // password
		'phpl' // db name
		);
	if(!$connection){
		// die - this function will stop processing everything and give us user inputed error message - Syntax : die($message);
		die("Database Connection failed");
	}

?>