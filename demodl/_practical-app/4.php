<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */


// exercise 1 and 2 combined

// function that returns value
function addNumbers($value1,$value2){
	$sum = $value1 + $value2;
	return($sum);

}

// call addNumbers function and store it's result
$result = addNumbers(2,4);


echo $result;



	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>