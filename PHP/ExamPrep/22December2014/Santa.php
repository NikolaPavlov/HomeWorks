<?php 

	// 100/100pts
	
	// "$giftOf[child name] = $[wasChildGood] ? '[wanted present]' : '[picked riddle]';"

	$childName = $_GET['childName'];
	$wantedPresent = $_GET['wantedPresent'];
	$riddlesAsStr = $_GET['riddles'];

	$wantedPresent = htmlspecialchars($wantedPresent);
	$childName = htmlspecialchars(preg_replace('/\s+/', '-', $childName));
	$childNameLen = strlen($childName);
	$riddles = preg_split('/;/', $riddlesAsStr, -1, PREG_SPLIT_NO_EMPTY);
	$riddleNum = $childNameLen % count($riddles);
	$riddle = htmlspecialchars($riddles[$riddleNum -1]);

	if ($riddleNum == 0) {
		$riddle = htmlspecialchars($riddles[count($riddles) - 1]);
	} else {
		$riddle = htmlspecialchars($riddles[$riddleNum - 1]);
	}

	echo "\$giftOf$childName = \$[wasChildGood] ? '$wantedPresent' : '$riddle';";










function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}

 ?>