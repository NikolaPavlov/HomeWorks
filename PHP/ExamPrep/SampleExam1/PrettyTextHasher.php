<?php 

	// 100/100pts

	$text = $_GET['text'];
	$hashValue = $_GET['hashValue'];
	$fontSize = $_GET['fontSize'];
	$fontStyle = $_GET['fontStyle'];


	//Ascii value even=increase odd=decrease

	$result = "";
	for ($i=0; $i < strlen($text); $i++) { 
		$ch = ord($text[$i]);
		if ($i % 2 == 0) {
			$ch += $hashValue;
		} elseif ($i % 2 ==1) {
			$ch -= $hashValue;
		}
		$ch = chr($ch);
		$result .= $ch;
	}

	// Print the result
	$html = '<p ' . "style=\"font-size:$fontSize;";
	if ($fontStyle == 'bold') {
		$html .= 'font-weight:bold;">';
	} elseif ($fontStyle == 'italic') {
		$html .= 'font-style:italic;">';
	} else {
		$html .= 'font-style:normal;">';
	}
	$html .= $result;
	$html .= '</p>';
	echo $html;

 ?>