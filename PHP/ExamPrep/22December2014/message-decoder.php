<?php 

	// 66/100pts

	$jsonMatrix = $_GET['jsonTable'];
	$jsonMatrix = json_decode($jsonMatrix);
	// print_array($jsonMatrix);
	$cols = $jsonMatrix[0];

	$string = "";
	foreach ($jsonMatrix[1] as $line) {

		preg_match_all('/(\d{1,3})ms/', $line, $matches);

		if (isset($matches[1][0])) {
			$num = $matches[1][0];
			$char = chr($num);
			$string .= $char;
		}
	}
	// echo $string;

	// split the string into words
	$splitedString = preg_split('/\*/', $string);
	// print_array($splitedString);

	//Print the output
	$html = "<table border='1' cellpadding='5'>";
	$char = 0;
	foreach ($splitedString as $word) {
		$wordLen = strlen($word);
		$rows = ceil($wordLen / $cols);

		$char = 0;
		for ($row=0; $row < $rows; $row++) { 
			$html .= '<tr>';
			for ($col=0; $col < $cols; $col++, $char++) { 
				if ($char >= $wordLen) {
					$html .= '<td></td>';
				} else {
					$html .= "<td style='background:#CAF'>" . htmlspecialchars($word[$char]) . "</td>";	
				}	
			}
			$html .= '</tr>';
		}
	}
	$html .= '</table>';

	echo $html;






function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>