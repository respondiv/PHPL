<?php

	/* *******************************************************
	Code to read / pull all info from users table of DB
	*********************************************************/

		global $connection;

		// adding query into variable so it's easy to read and manage
		$query = "SELECT * FROM users";
		$result = mysqli_query($connection,$query);

		if (!$result) {
			die("Query FAILED " . mysqli_error($connection));
		}

		// Store all data from SQL to Array: this contain arrays within array

		$rows = array();

		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}


	/* *******************************************************
		Function to Print ID's of User as select Options
	*********************************************************/
	function printId(){
		global $rows;
		foreach ($rows as $keys => $values) {
			$id = $values['id'];
			echo "<option value='$id'>$id</option>";
		}
	}


	/* *******************************************************
		Function to list all users as table
	*********************************************************/
	function listAllUsers(){
		global $rows;
		// rows contain arrays within array (whole table) | $values will contain 1 array at a time (1 row within table)
		foreach ($rows as $keys => $values) { 
			echo "<tr>";
			//$values will contain 1 array at a time (1 row within table) | $value contain data for each column within row at a time
			foreach ($values as $key => $value) {
					echo "<td>" . $value . "</td>";
			}
			echo "</tr>";
		}
	}

	/* *******************************************************
		Function to update the user's username and password
	*********************************************************/
	function updateUsers(){
		global $connection;
		global $username;
		global $password;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$userid = $_POST['id'];

		// call encrypt function
		passEncrypt();


		$updateQuery = "UPDATE users SET ";
		$updateQuery .= "username = '$username', ";
		$updateQuery .= "password = '$password' ";
		$updateQuery .= "WHERE	id = $userid ";

		$updateResult = mysqli_query($connection,$updateQuery); 

		if(!$updateResult){
			die("QUERY FAILED" . mysqli_error($connection));
		}

		header("Location: http://demo.dev/mysql/login_delete.php");
	}


	/* *******************************************************
		Function to add the user with username and password
	*********************************************************/
	function addUsers(){
		global $connection;
		global $username;
		global $password;
		$username = $_POST['username'];
		$password = $_POST['password'];

		// call encrypt function
		passEncrypt();

		// adding query into variable so it's easy to read and manage
		$query = "INSERT INTO users(username,password) ";
		$query .= "VALUES ('$username','$password')";


		$addResult = mysqli_query($connection,$query);

		if(!$addResult){
			die("QUERY FAILED" . mysqli_error($connection));
		}

		header("Location: http://demo.dev/mysql/login_delete.php");
	}

	/* *******************************************************
		Function to delete the user's from user table
	*********************************************************/
	function deleteUsers(){
		global $connection;

		$userid = $_POST['id'];

		$deleteQuery = "DELETE FROM users ";
		$deleteQuery .= "WHERE	id = $userid ";

		$deleteResult = mysqli_query($connection,$deleteQuery); 

		if(!$deleteResult){
			die("QUERY FAILED" . mysqli_error($connection));
		}

		header("Location: http://demo.dev/mysql/login_delete.php");
	}

		/* *******************************************************
			Function to encrypt password and prevent mysql injection
		*********************************************************/
		function passEncrypt(){
			global $connection;
			global $username;
			global $password;
			/* 	mysqli_real_escape_string will treat the enter data as regular string including '' or "" 
				so when user enter's it, it won't throw any error and accept them as it is.
				This will preven sql injection because SQL queries (Statement) contains those character as command but
				they are now treated as regular text input.
			*/
			$username = mysqli_real_escape_string($connection,$username);
			$password = mysqli_real_escape_string($connection,$password);

			// encrypting password
			$hashFormat	= "$2y$10$";
			$salt = "thisisveryrandomcrazys";
			$hash_and_salt = $hashFormat . $salt;

			$password = crypt($password,$hash_and_salt);

		}

?>