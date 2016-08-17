<?php

	$connection = mysqli_connect(
		'localhost', //host
		'phpl', // db username
		'PHPlearn', // password
		'phpl' // db name
		);
	if($connection){
		//echo "We are connected";
	}
	else{
		// die - this function will stop processing everything and give us user inputed error message - Syntax : die($message);
		die("Database Connection failed");
	}

	// adding query into variable so it's easy to read and manage
	$query = "SELECT * FROM users";


	$result = mysqli_query($connection,$query);

	if (!$result) {
		die("Query FAILED " . mysqli_error());
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
		<?php
			//while ($row = mysqli_fetch_row($result)) {
			while ($row = mysqli_fetch_assoc($result)) {

		?>
			<pre>

		<?php
				print_r($row);
		?>
			</pre>
		<?php


			}

		?>

	</div>
	
	<div class="col-sm-6">
		<table>
			<tr>
				<td>ID</td>
				<td>username</td>
				<td>password</td>
			</tr>
			<?php
				//while ($row = mysqli_fetch_row($result)) {
				while ($rows = mysqli_fetch_assoc($result)) {
					foreach ($rows as $key => $value) {
							<tr>
								<td>
									echo 
					}
				}

			?>
		</table>

	</div>


</div>

	
</body>
</html>