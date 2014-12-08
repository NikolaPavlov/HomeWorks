<?php 
	$input = 1234;
	// $input = 15;
	$resultFound = false;

	for ($i=100; $i < min($input, 1000); $i++) { 
		$firstDigit = $i % 10;
		$secondDigit = ($i / 10) % 10;
		$thirdDigit = ($i / 100) % 10;
		if (($firstDigit != $secondDigit) && 
			($secondDigit != $thirdDigit) &&
			($firstDigit != $thirdDigit)) {
			echo "$i,<br>";
			$resultFound = true;
		}
	}
	if (!$resultFound) {
		echo "no";
	}
 ?>