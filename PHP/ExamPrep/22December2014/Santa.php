<?php 
	
	// "$giftOf[child name] = $[wasChildGood] ? '[wanted present]' : '[picked riddle]';"

	$childName = $_GET['childName'];
	$wantedPresent = $_GET['wantedPresent'];
	$riddles = $_GET['riddles'];



	$childName = str_replace(' ', '-', $childName);
	$childName = htmlspecialchars($childName);
	$wantedPresent = htmlspecialchars($wantedPresent);
	$riddles = explode(';', $riddles);
	$nameLength = strlen($childName);

	if ($nameLength % count($riddles) == 0) {
		$pickedRiddle = count($riddles) - 1;
	} else {
		$pickedRiddle = ($nameLength % count($riddles)) - 1;
	}
	
	echo "\$giftOf$childName = \$[wasChildGood] ? '$wantedPresent' : '$riddles[$pickedRiddle]';";















function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}

 ?>