<?php 

	// 100/100pts

	date_default_timezone_set('Europe/Sofia');

	$startDateString = $_GET['dateOne'];
	$endDateString = $_GET['dateTwo'];
	$holidaysAsString = $_GET['holidays'];
	$holidays = preg_split("/\s+/", $holidaysAsString, -1, PREG_SPLIT_NO_EMPTY);


	// Convert all holidays into unix time stamps and put them in $holidaysAsTime
	$holidaysAsTime = [];
	foreach ($holidays as $holiday) {
		array_push($holidaysAsTime, strtotime($holiday));
	}

	$startDate = strtotime($startDateString);
	$endDate = strtotime($endDateString);

	$workDays = [];
	$currentDate = $startDate;
	while ($currentDate <= $endDate) {
		if (isWorkDay($currentDate, $holidaysAsTime)) {
			array_push($workDays, $currentDate);
		}
		$currentDate = strtotime("+1 day", $currentDate);
	}

	// Print the output
	// If there is no workdays print h2 and die
	if (count($workDays) == 0) {
		echo "<h2>No workdays</h2>";
		die();
	}
	// Else print the <ol>
	$html = '<ol>';
	foreach ($workDays as $workDay) {
		$html .= '<li>' . date("d-m-Y", $workDay) . '</li>';
	}
	$html .= '</ol>';
	echo $html;


function isWorkDay($currentDate, $holidaysAsTime) {
	$dayOfWeek = date('N', $currentDate);
	if (in_array($currentDate, $holidaysAsTime) || $dayOfWeek > 5) {
		return false;
	} else {
		return true;
	}
}

function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>