<?php 

	
	$keyString = $_GET['keys'];
	$textString = $_GET['text'];


	preg_match('/^[a-zA-Z_]+/',$keyString, $startKeys);
	preg_match('/[a-zA-Z_]+$/', $keyString, $endKeys);
	$startKey = $startKeys[0];
	$endKey = $endKeys[0];
	echo $startKey . '<br>';
	echo $endKey;

	$patternText = $startKey . '[0-9.]+' . $endKey;
	$patternText = '\'/' . $patternText . '/\'';
	echo '<br>';
	echo $patternText;
	// preg_match_all('/startKEY[0-9.]+endKEY/', $textString, $matches);
	preg_match_all($patternText, $textString, $matches);
	echo '<br>';

	print_array($matches);













function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>