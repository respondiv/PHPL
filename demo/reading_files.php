<?php

$file = "example.txt";


if ($handle = fopen($file, 'r')){

	// fread - read file content - Syntax - fread($handle,number_of_bytes);

	// $content = fread($handle, 12); // Each bite equals to a character

	$content = fread($handle, filesize($file)); // filesize($fileName) will give us the file size to read whole document

	echo $content;

	fclose($handle);
}
else{
	echo "The application was not able to write on the file";
}



?>
