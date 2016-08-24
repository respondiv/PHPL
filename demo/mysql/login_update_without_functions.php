<?php

	include "db.php";

	// adding query into variable so it's easy to read and manage
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection,$query);

	if (!$result) {
		die("Query FAILED " . mysqli_error());
	}


	// Store all data from SQL to Array: this contain arrays within array
	$rows = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
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
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>username</th>
					<th>password</th>
				</tr>
			</thead>
			<tbody>
				<?php
							// rows contain arrays within array (whole table) | $values will contain 1 array at a time (1 row within table)
							foreach ($rows as $keys => $values) { 
				?>
							<tr>
				<?php
								//$values will contain 1 array at a time (1 row within table) | $value contain data for each column within row at a time
								foreach ($values as $key => $value) {
				?>
								
									<td>
				<?php
										echo($value);
				?>
									</td>
				<?php
								}
				?>
						</tr>
				<?php
							}

				?>
			</tbody>
		</table>
	</div>
</div>

<div class="container offset1">
	<div class="col-m-6">
		<h4> DB User Update Form </h4>
	</div>
</div>

<div class="container">
	<div class="col-sm-6">
		<form action="login_update.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" name='username'>	
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password">
			</div>	
			<div class="form-group">
				<select name="id" id = "">

					<?php
						foreach ($rows as $keys => $values) {
								$id = $values['id'];
								echo "<option value='$id'>$id</option>";

						}
					?>
				</select>
			</div>	

			<input type="submit" class="btn btn-primary" name="submit" value="UPDATE">	

		</form>

	</div>
</div>

	
</body>
</html>