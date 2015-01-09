<?php 
	
	//unfinished

	// <span style="[fontSize];">[character]</span>
	
	$text = $_GET['text'];
	$minFontSize = (int)$_GET['minFontSize'];
	$maxFontSize = (int)$_GET['maxFontSize'];
	$step = intval($_GET['step']);

	$currentSize = $minFontSize;
	$isIncrementing = true;
	$decoration = "";

	for ($i=0; $i < strlen($text); $i++) { 
		if (ord($text[$i] % 2 == 0)) {
			$decoration = "text-decoration:line-through;";
		} else {
			$decoration = "";
		}

		echo "<span style='font-size:$currentSize;$decoration'>" .
		htmlspecialchars($text[$i]) . '</span>';

		if ($isLetter) {
			if ($isIncrementing) {
				$currentSize+=$step;
			} else {
				$currentSize--;
			}
		}
	}











function isLetter($char) {
    return (ord($char) >= ord('a') && ord($char) <= ord('z')) ||
		((ord($char) >= ord('A') && ord($char) <= ord('Z')));
}

 ?>