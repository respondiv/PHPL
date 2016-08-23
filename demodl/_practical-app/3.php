<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

// exercise 1

$number = 6;
if ($number % 2 == 0) {
		echo $number . " is divisible by 2 and I love PHP <br>";
	}
elseif ($number % 3 == 0) {
		echo $number . " is divisible by 3 I love PHP <br>";
	}
else{
	echo $number . " is not divisible by 2 and 3 but I still love PHP<br>";
}	

//  exercise 2

for ($i=0; $i <10 ; $i++) { 
	echo $i . " <br>";
}

// exercise 3

for ($i=0; $i <10 ; $i = $i+2) { 
	switch ($i) {
		case 2:
			echo $i . " X 2 is " . $i*2 . " <br>";
			break;
		case 4:
			echo $i . " X 2 is " . $i*2 . " <br>";
			break;
		case 6:
			echo $i . " X 2 is " . $i*2 . " <br>";
			break;
		case 8:
			echo $i . " X 2 is " . $i*2 . " <br>";
			break;
	
		default:
			echo " 0 X 2 is 0 <br>";
			break;
	}
}



	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>