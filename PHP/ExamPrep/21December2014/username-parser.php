<?php 

	$listOfStrings = $_GET['list'];
	$minLength = $_GET['length'];
	if (isset($_GET['show'])) {
		$show = $_GET['show'];
	}
	// echo $show;

	$listNames = preg_split('/[\r\n]/', $listOfStrings, -1, PREG_SPLIT_NO_EMPTY);
	// print_array($listNames);

	$html = '<ul>';
	for ($i=0; $i < count($listNames); $i++) { 
		$nameLen = strlen($listNames[$i]);
		if ($nameLen < $minLength) {
			if (isset($show) && $show == 'on') {
				$html .= "<li style=\"color: red;\">" . htmlspecialchars($listNames[$i]) . "</li>";
			} else {
				continue;
			}
		} else {
			$html .= "<li>" . htmlspecialchars($listNames[$i]) . "</li>";
		}
	}
	$html .= '</ul>';

	echo $html;







function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>