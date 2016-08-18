<?php

print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

$id = 100;
$button = "Click me now";

?>

<div>
<a href="get.php?id=<?php echo $id;?>"> <?php echo $button;?></a>
</div>	
</body>
</html>
