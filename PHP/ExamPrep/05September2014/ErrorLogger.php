<?php 
	// 100/100
	//line [line]-[exception] in [filename]:[method]
	
	$errorLog = $_GET['errorLog'];
	//this is the author regex
	$regex = "/Exception in thread \".*\" java.*\.(.*):.*\n.*?\.(.*?)\((.*?):(\d+)/";
	
	preg_match_all($regex, $errorLog, $matches);
	// print_array($matches);

	//print the output
	$result = "";
	$result .= '<ul>';
	for ($i=0; $i < count($matches[0]); $i++) { 
		$line = htmlspecialchars($matches[4][$i]);
		$exception = htmlspecialchars($matches[1][$i]);
		$filename = htmlspecialchars($matches[3][$i]);
		$method = htmlspecialchars($matches[2][$i]);
		$result .= "<li>line <strong>$line</strong> - <strong>$exception</strong> in <em>$filename:$method</em></li>";
	}
	$result .= '</ul>';

	echo $result;




function print_array($arr) {
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}
 ?>