<?php 
	$input = "hello";
	// $input = 15;

	if (is_numeric($input)) {
		var_dump($input);
	}	else {
		echo gettype($input);
	}
 ?>