<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/


	//exercise 1

	$id = 45;
	print_r($_GET);

	//exercise 2

	$cookieName = "NewCookie";
	$value = "this is awesome";
	$cookieTime = time() + (60*60^24*7);
	setcookie($cookieName, $value, $cookieTime);
	

	// exercise 3
	session_start();

	$_SESSION['greeting'] = "What a wonderful Day";


	?>



	<!-- exercise 1 -->
	<a href="9.php?id=<?php echo $id; ?>"> Click Here </a>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>