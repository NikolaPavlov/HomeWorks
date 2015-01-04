<?php 

	date_default_timezone_set('Europe/Sofia'); //---> set default timezone
	
	$dateOne = $_GET['dateOne'];
	$dateTwo = $_GET['dateTwo'];


	//Reverse the dates if the first one is bigger
	if (strtotime($dateOne) > strtotime($dateTwo)) {
		$tempDate = $dateTwo;
		$dateTwo = $dateOne;
		$dateOne = $tempDate;
	}

	//Find all thursdays between the two dates and put them in arr
	$thursdays = array();
	for ($i = strtotime($dateOne); $i <= strtotime($dateTwo); $i = strtotime('+1 day', $i)) {
	  if (date('N', $i) == 4) //Monday == 4
	  	array_push($thursdays, date('d-m-Y', $i));
	}

	// Print the output
	$html = "";
	$html .= "<ol>";
	if (empty($thursdays)) {
		echo "<h2>No Thursdays</h2>";
	} else {
		foreach ($thursdays as $thursday) {
			$html .= "<li>$thursday</li>";
		}
		$html .= "</ol>";
		echo $html;
	}










function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>