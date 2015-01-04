<?php 
	
	// date_default_timezone_set('Europe/Sofia');

	//find all thursdays between two dates
	// 1. Create start date
	// 2. Create end date
	// 3. Iterate between start and end date, find which one is smaller
	// 4. Print all thursdays which we find in the loop
	$dateOne = $_GET['dateOne'];
	$dateTwo = $_GET['dateTwo'];

	$dateOneObj = date_create($dateOne, timezone_open("Europe/Sofia"));
	$dateTwoObj = date_create($dateTwo, timezone_open("Europe/Sofia"));

	$dateStart = $dateOneObj < $dateTwoObj ? $dateOneObj : $dateTwoObj;
	$dateEnd = $dateOneObj < $dateTwoObj ? $dateTwoObj : $dateOneObj;

	$thursdays = array();
	$currentDate = $dateStart;
	while ($currentDate <= $dateEnd) {
		$weekDay = date_format($currentDate, "w");
		if ($weekDay == 4) {
			array_push($thursdays, date_format($currentDate, "d-m-Y"));
			// date_add($currentDate, date_interval_create_from_date_string("7 day"));
			// continue;
		}
		date_add($currentDate, date_interval_create_from_date_string("1 day"));
	}

	if (empty($thursdays)) {
		echo '<h2>No Thursdays</h2>';
	} else {
		echo '<ol>';
		foreach ($thursdays as $thursday) {
			echo "<li>$thursday</li>";
		}
		echo '</ol>';
	}

 ?>