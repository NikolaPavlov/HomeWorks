<?php 

	// 100/100pts

	$list = $_GET['list'];
	$maxSize = $_GET['maxSize'];

	

	$listSplited = preg_split("/\s*[\r\n]+\s*/", $list, -1, PREG_SPLIT_NO_EMPTY);

	$html = '<ul>';
	foreach ($listSplited as $list) {
		$list = trim($list);
		$html .= "<li>";
		if (strlen($list) > $maxSize) {
			for ($i=0; $i < $maxSize; $i++) { 
				$html .= htmlspecialchars($list[$i]);
			}
		} else {
			for ($i=0; $i < strlen($list); $i++) { 
				$html .= htmlspecialchars($list[$i]);
			}
		}
		if (strlen($list) > $maxSize) {
			$html .= '...';
		}
		$html .= '</li>';
	}
	$html .= '</ul>';
	echo $html;




function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>