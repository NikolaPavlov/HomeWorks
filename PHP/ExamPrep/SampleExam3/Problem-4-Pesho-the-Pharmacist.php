<?php 

	//unfinished

	date_default_timezone_set("Europe/Sofia");


	$todayDate = '07/08/2014';
	$invoices = 	[
				"11/05/2013 | Sopharma | Paracetamol | 20.54 lv", 
				"11/05/2013 | Sopharma | Analgin | 57.45 lv", 
				"02/12/2011 | Actavis | Aulin | 120.54 lv", 
				"13/05/2009 | Sopharma | Tamiflu | 221.54 lv", 
				"23/01/2014 | Actavis | Paracetamol | 7.54 lv", 
				"11/05/2013 | Actavis | Paracetamol | 17.54 lv"];


//convert $todayDate into unix time stamp
				$todayDate = timeToUk($todayDate);

	$answers = array();
	foreach ($invoices as $invoice) {
		$invoiceSplited = preg_split('/\s*\|\s*/', $invoice);
		// print_array($invoiceSplited);
		$currentDate = timeToUk($invoiceSplited[0]);
		$firmName = $invoiceSplited[1];
		$drugName = $invoiceSplited[2];
		$price = floatval($invoiceSplited[3]) . '';
		//check if the date is in the range (-5 years from today)
		if ($currentDate >= strtotime('-5 years', $todayDate)) {
			// Check if date and firmName exsists if it's not create it.
			if (!array_key_exists($currentDate, $answers) ||
				!array_key_exists($firmName, $answers[$currentDate])) {
					$answers[$currentDate][$firmName][$price] = array();
					$answers[$currentDate][$firmName][$price][] = $drugName;
			} else {
				// The dates and firmName exsist, add $price to key $price and add $drugName in array
				$oldKey = key($answers[$currentDate][$firmName]);//get the oldKey value
				$newKey = ($oldKey + $price) . ''; //make new key as string
				//update with new key
				$answers[$currentDate][$firmName][$newKey] = $answers[$currentDate][$firmName][$oldKey];
				//add new drugName into the outer array
				$answers[$currentDate][$firmName][$newKey][] = $drugName;
				//remove the old value with the old key
				unset($answers[$currentDate][$firmName][$oldKey]);
			}
		}
	}
	// Sorting (still does't work bro)

	ksort($answers);
	foreach ($answers as &$firmName) {
		ksort($firmName);
		foreach ($firmName as $price => $drugName) {
			sort($drugName);
		}
	}

	print_array($answers);






function timeToUk ($time) {
	$timePieces = preg_split('/\//', $time);
	$convertedTime = strtotime($timePieces[1] . '/' . $timePieces[0] . '/' . $timePieces[2]);
	return $convertedTime;
}

function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>