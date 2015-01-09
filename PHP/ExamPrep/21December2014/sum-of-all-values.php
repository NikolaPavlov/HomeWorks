<?php 

	
	$keyString = $_GET['keys'];
	$textString = $_GET['text'];


	preg_match('/^[a-zA-Z_]+/',$keyString, $startKeys);
	preg_match('/[a-zA-Z_]+$/', $keyString, $endKeys);

	if (empty($startKeys) || empty($endKeys)) {
		die('<p>A key is missing</p>');
	} else {
		$startKey = $startKeys[0];
		$endKey = $endKeys[0];
		$patternText = $startKey . '([0-9.]+)' . $endKey;
		$patternText = '/' . $patternText . '/';
		preg_match_all($patternText, $textString, $matches);
		$sum = 0;
		foreach ($matches[1] as $num) {
			$sum += $num;
		}
		if (empty($matches[1]) || $sum == 0) {
			die('<p>The total value is: <em>nothing</em></p>');
		}
		echo "<p>The total value is: <em>$sum</em></p>";
	}










function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>