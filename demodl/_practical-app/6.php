<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */

	
?>

<form action="6.php" method="post">
	<input type="text" name="name" placeholder="Enter Your Name"> <br>
	<input type="password" name="password" placeholder="Your Password"><br>
	<input type="tel" name="tel" placeholder="Your phone number"><br>
	<br>
	<input type="Submit" name="submit" value="Send">
</form>


<?php

if (isset($_POST['submit'])) {

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

	if (!in_array($username, $names)){
		echo "Sorry, you are not allowed";
	}
	else{
		echo "Welcome " . $username . " !";
	}
	
}

?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>