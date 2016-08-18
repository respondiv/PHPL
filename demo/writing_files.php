<?php

$file = "example.txt";


if ($handle = fopen($file, 'w')){

	fwrite($handle, 'I am writing inside file via PHP. This is awesome');

	fclose($handle);
}
else{
	echo "The application was not able to write on the file";
}



?>
