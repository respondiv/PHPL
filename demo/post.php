<?php

echo $_POST['name'] . "<br>";
echo $_POST['message'] . "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php






?>
<form action="post.php" method="post">
	
	<input type="text" name="name">
	<input type="text" name="message">
	<input type="submit" name="submit">

</form>
	
</body>
</html>
