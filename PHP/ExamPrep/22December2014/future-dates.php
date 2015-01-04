<?php 
	
	date_default_timezone_set('Europe/Sofia'); //---> set default timezone
	//1. Find all numbers
	//2. Find all dates
	//3. Sum all numbers and reverse the sum
	//4. Increase all dates with revers sum and print the result

	$numbersString = $_GET['numbersString'];
	$dateString = $_GET['dateString'];


	$numberPattern = "/[^a-zA-Z0-9]+?([0-9]+)[^a-zA-Z0-9]+?/";
	preg_match_all($numberPattern, $numbersString, $matchesNums);
	$datePattern = "/[0-9]{4}-[0-9]{2}-[0-9]{2}/";
	preg_match_all($datePattern, $dateString, $matchesDates);

	$sum = 0;
	foreach ($matchesNums[1] as $num) {
		$sum += intval($num);
	}

	//reverse the sum
	$reverse = 0;
	while ($sum > 0){
  		$reverse = $reverse * 10;
  		$reverse = $reverse + $sum % 10;
 		 $sum = (int)($sum / 10);
	}

	//if there is no dates exit die with msg
	if (count($matchesDates[0]) == 0) {
		die("<p>No dates</p>");
		exit;
	}

	//print the output
	$html = "";
	$html .= '<ul>';
	foreach ($matchesDates[0] as $key => $date) {
		$date = new DateTime($date);
		$date->add(new DateInterval("P" . $reverse . "D"));
		$html .= '<li>' . $date->format('Y-m-d') . '</li>';
	}
	$html .= '</ul>';
	echo $html;









function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>