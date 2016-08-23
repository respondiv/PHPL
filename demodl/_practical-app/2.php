<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */

		$number1 = 10;
		$number2 = 20;

		echo " sum of " . $number1 . " and " . $number2 . " is ";

		echo $number1 + $number2;

		echo "<br>";

		$nameList = array('firstCustomer' => 'John', 'secondCustomer' => 'Marry', 'thirdCustomer' => 'Helen' );

		$nameListRegular = array("John", "Marry", "Helen");

		echo "print_r of Regular array";

		echo "<br>";

		print_r($nameListRegular);

		echo "<br>";

		echo " Printing Second value of regular array " . $nameListRegular[1];

		echo "<br>";

		echo "print_r of Associated Array";

		echo "<br>";

		print_r($nameList);

		echo "<br>";

		echo " Printing Second value of Associated array " . $nameList['secondCustomer'];

		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>