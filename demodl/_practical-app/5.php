<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

// exercise 1

echo rand(1, 999);

echo "<br><br>";	


// exercise 2

$name = "My Super Long name";

echo strtoupper($name);

echo "<br><br>";	


// exercise 3

$newArray = [10,15,20,30, 25];

echo array_sum($newArray);

echo "<br><br>";
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>