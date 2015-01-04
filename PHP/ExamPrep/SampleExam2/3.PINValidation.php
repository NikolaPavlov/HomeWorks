<?php 

	date_default_timezone_set('Europe/Sofia');
	
	$name = $_GET['name'];
	$gender = $_GET['gender'];
	$pin = $_GET['pin'];

	$isValid = true;

	// Check name and pin inputs
	// $namePattern = "/\w+\s+\w+/";
	$namePattern = "/[A-Z][a-z]*\s+[A-Z][a-z]*/";
	preg_match($namePattern, $name, $matchesNames);
	$pinPattern = "/\d{10}/";
	preg_match($pinPattern, $pin, $matchesPin);
	// print_array($matchesPin);


	if (empty($matchesNames) || empty($matchesNames)) {
		$isValid = false;
	}

	// Check the date
	$year = substr($pin, 0, 2);
	$month = substr($pin, 2, 2);
	$day = substr($pin, 4, 2);

		if ($day > 31) {
			$isValid = false;
		}
		if ($month > 52) {
			$isValid = false;
		}

	// Check the gender
	$genderNum = substr($pin, 8, 1);
	// echo '<br>';
	// echo $genderNum;
	if ($gender == 'female' && ($genderNum % 2 == 0)) {
		$isValid = false;
		// echo 'not girl';
	} else if ($gender == 'male' && ($genderNum % 2 == 1)) {
		$isValid = false;
		// echo 'not male';
	}

	// Check the checksum
	$checkSumArr = [2,4,8,5,10,9,7,3,6];

	$sum = 0;
	for ($i=0; $i < strlen($pin) - 1; $i++) { 
		$sum += $pin[$i] * $checkSumArr[$i];
	}

	// echo 'sum: ' . $sum;
	$remainder = $sum % 11;
	if ($remainder != $pin[strlen($pin) - 1]) {
		// echo 'remainder fail';
		$isValid = false;
	}



	// Print the output
	if ($isValid) {
		$answer = [
			'name' => $name,
			'gender' => $gender,
			'pin' => $pin
		];
		echo json_encode($answer);
	} elseif (!$isValid) {
		echo "<h2>Incorrect data</h2>";
	}





function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>