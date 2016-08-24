<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php

if (isset($_POST['update'])) {
	updateUsers();
}
if (isset($_POST['add'])) {
	addUsers();
}
if (isset($_POST['delete'])) {
	deleteUsers();
}

?>

<?php include "includes/header.php"; ?>

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
		<h4> DB User Add / Update Form </h4>
	</div>
</div>

<div class="container">
	<div class="col-sm-6">
		<form action="login_delete.php" method="post">
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

			<input type="submit" class="btn btn-primary" name="update" value="UPDATE USER">
			<input type="submit" class="btn btn-primary" name="add" value="ADD USER">		

		</form>

	</div>

	<div class="col-sm-6">
		<h4> DB User Add / Update Form </h4>
		<form action="login_delete.php" method="post">
			<div class="form-group">
				<select name="id" id = "">
					<option value="" disabled selected>Select Users ID </option>
					<?php
						printId();
					?>
				</select> *The selected users ID will be deleted
			</div>	

			<input type="submit" class="btn btn-primary" name="delete" value="DELETE USER">			

		</form>

	</div>

</div>

	
<?php include "includes/footer.php"; ?>