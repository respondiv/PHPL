<?php

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];


		$connection = mysqli_connect(
			'localhost',
			'phpl',
			'PHPlearn',
			'phpl'
			);
		if($connection){
			echo "We are connected";
		}
		else{
			// die - this function will stop processing everything and give us user inputed error message - Syntax : die($message);
			die("Database Connection failed");
		}


		// if ($username && $password){

		// 	echo $username . " and " . $password;
		// }
		// else{
		// 	echo "Enter both username and password";
		// }
	}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
	<div class="col-sm-6">
		<form action="login.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" name='username'>	
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password">
			</div>	

			<input type="submit" class="btn btn-primary" name="submit" value="Send">	

		</form>
	</div>
</div>

	
</body>
</html>