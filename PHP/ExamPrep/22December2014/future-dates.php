<?php 
	// 87/100
	
	date_default_timezone_set('Europe/Sofia'); //---> set default timezone
	//1. Find all numbers
	//2. Find all dates
	//3. Sum all numbers and reverse the sum
	//4. Increase all dates with revers sum and print the result

	$numbersString = $_GET['numbersString'];
	$dateString = $_GET['dateString'];
	
	// Extract all numbers find the sum and reverse it
	$numPattern = "/[^a-zA-Z]([0-9]+)[^a-zA-Z]/";
	preg_match_all($numPattern, $numbersString, $matches);

	$sumNums = 0;
	foreach ($matches[1] as $match) {
		$sumNums += $match;
	}
	$sumBackwards = floatval(strrev($sumNums));

	// Find all dates
	$datePattern = "/[0-9]{4}-[0-9]{2}-[0-9]{2}/";
	preg_match_all($datePattern, $dateString, $matches);

	$futureDates = array();
	foreach ($matches[0] as $date) {
		$tempDate = date_create($date);
		date_add($tempDate, date_interval_create_from_date_string("$sumBackwards days"));
		array_push($futureDates, $tempDate);
	}


	// Print the output
	if (empty($matches[0])) {
		echo '<p>No dates</p>';
		die;
	}

	$html = '<ul>';
	foreach ($futureDates as $futureDate) {
		$html .= '<li>' . date_format($futureDate, 'Y-m-d') . '</li>';
	}
	$html .= '</ul>';
	echo $html;




function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>