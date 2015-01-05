<?php 

	$textAsString = $_GET['text'];
	$lineLength = $_GET['lineLength'];

	$strLen = strlen($textAsString);
	$rows = ceil($strLen / $lineLength);
	$cols = $lineLength; 


	// Create the matrix rows x cols
	$matrix = array();
	$char = 0;
	for ($row=0; $row < $rows; $row++) { 
		$matrix[] = array();
		for ($col=0; $col < $cols; $col++, $char++) { 
			if ($char >= $strLen) {
				$matrix[$row][$col] = ' ';
			} else {
				$matrix[$row][$col] = $textAsString[$char];
			}
		}
	}

	// Fall down the chars
	for ($i=0; $i < $rows-1; $i++) { 
		for ($row=$rows-1; $row > 0; $row--) { 
			for ($col=0; $col < $cols; $col++) { 
				if ($matrix[$row][$col] == ' ') {
					$matrix[$row][$col] = $matrix[$row-1][$col];
					$matrix[$row-1][$col] = ' ';
				}
			}
		}
	}
	
	// Print the output
	$html = '<table>';
	for ($row=0; $row < $rows; $row++) { 
		$html .= '<tr>';
		for ($col=0; $col < $cols; $col++) { 
			$html .= '<td>' . htmlspecialchars($matrix[$row][$col]) . '</td>';
		}
		$html .= '</tr>';
	}
	$html .= '<table>';

	echo $html;







function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>