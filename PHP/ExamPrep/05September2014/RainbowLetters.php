<?php 
	// 90 / 100

	$text = $_GET['text'];
	$red = $_GET['red'];
	$blue = $_GET['blue'];
	$green = $_GET['green'];
	$step = $_GET['nth'];


	$red = convertToHex(trim($red));
	$green = convertToHex(trim($green));
	$blue = convertToHex(trim($blue));

	$color = '#' . $red . $green . $blue;

	//printing the output
	$result = "";
	$color = htmlspecialchars($color);
	$result .= '<p>';
	for ($i=0; $i < strlen($text); $i++) { 
		$letter = htmlspecialchars($text[$i]);
		if (($i+1) % $step == 0) {
			$result .= "<span style=\"color: $color\">$letter</span>";
		}	else {
			$result .= $letter;
		}
	}
	$result .= '</p>';
	echo $result;



function convertToHex($color){
	$colorHex = dechex($color);
	if (strlen($colorHex) == 1) {
		$colorHex .= '0';
	}
	return $colorHex;
}

