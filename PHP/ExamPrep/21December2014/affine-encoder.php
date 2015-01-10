<?php 

	//Unfinished

	// E(x) = (k*x +s) % m
	// m = the size of the current alphabet
	// x = position of the char in alphabet started from 0


	$jsonMatrix = $_GET['jsonTable'];
	$jsonMatrix = json_decode($jsonMatrix);
	print_array($jsonMatrix);
	$k = $jsonMatrix[1][0];
	$s = $jsonMatrix[1][1];
	// $x ---> position of the letter in the alphabet from 0
	$m = 26;

	//find the number of col
	$colLength = 0;
	$words = $jsonMatrix[0];
	foreach ($words as $word) {
	 	if (strlen($word) > $colLength) {
	 		$colLength = strlen($word);
	 	}
	} 

	print_array($words);

	// Put from $words arr into $output
	$currentChar = ' ';
	$output = array();
	for ($row=0; $row < count($words); $row++) {
		$output[] = [];
		for ($col=0; $col < $colLength; $col++) { 
			if ($col > strlen($words[$row])) {
				$output[$row][$col] = '';
			} else {
				$currentChar = $words[$row][$col];
				echo $currentChar . '<br>';
			}
		}
	}









function cypher ($k, $x, $s, $m) {
	return $cyperCode = ($k * $x + $s) % $m;
}

function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>