<?php 
	//GODLIKE

	$jsonMatrix = $_GET['jsonTable'];
	// echo $jsonMatrix;
	// echo '<br>';
	$jsonMatrix = json_decode($jsonMatrix);
	// print_array($jsonMatrix);
	$cols = $jsonMatrix[0];

	$string = "";
	foreach ($jsonMatrix[1] as $line) {

		preg_match_all('/(\d+)ms/', $line, $matches);

		if (isset($matches[1][0])) {
			$num = $matches[1][0];
			$char = chr($num);
			$string .= $char;
		}
	}
	
	$stringLen = strlen($string);
	$rows = ceil($stringLen / $cols);

	// Build the matrix
	$matrix = array();
	$char = 0;
	for ($row=0; $row < $rows; $row++) { 
		$matrix[] = array();
		for ($col=0; $col < $cols; $col++, $char++) { 
			if ($char >= $stringLen) {
				$matrix[$row][$col] = '';
			} else {
				$matrix[$row][$col] = $string[$char];
			}
		}
	}
	// print_array($matrix);
	// Print the output
	$html = "<table border='1' cellpadding='5'>";
	for ($row=0; $row < $rows; $row++) { 
		$html .= '<tr>';
		for ($col=0; $col < $cols; $col++) { 
			// 
			if ($matrix[$row][$col] == '*') {
				$html .= '</tr>';
			} elseif ($matrix[$row][$col] != '') {
				$html .= "<td style='background:#CAF'>" . htmlspecialchars($matrix[$row][$col]) . '</td>';
			}  elseif ($matrix[$row][$col] == '') {
				$html .= "<td></td>";
			} 
		}
		$html .= '</tr>';
	}
	$html .= '</table>';

	echo $html;
















function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>