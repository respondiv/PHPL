<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php

if (isset($_POST['update'])) {
	updateUsers();
}
if (isset($_POST['add'])) {
	addUsers();
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
					listAllUsers();
				?>
			</tbody>
		</table>
	</div>
</div>

<div class="container offset1">
	<div class="col-m-6">
		<h4> DB User Add / Update / Delete Form </h4>
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
					<option value="" disabled selected>Select Users ID </option>
					<?php
						printId();
					?>
				</select> *only required when updating users
			</div>	

			<input type="submit" class="btn btn-primary" name="update" value="UPDATE">
			<input type="submit" class="btn btn-primary" name="add" value="ADD USER">		

		</form>

	</div>
</div>

	
</body>
</html>