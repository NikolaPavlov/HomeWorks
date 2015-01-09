<?php 

	//0/100pts

	$text = $_GET['text'];
	$key = $_GET['key'];

	// Create dynamic regex base on $key pattern
	$keyPattern = "";
	$keyPattern .= $key[0];
	for ($i=1; $i < strlen($key) - 1; $i++) { 
		//check if the char is [a-z]
		if (ctype_lower($key[$i])) {
			$keyPattern .= '[a-z]*';
		} 
		//check if the char is [A-Z]
		elseif (ctype_upper($key[$i])) {
			$keyPattern .= '[A-Z]*';
		}
		//check if the char is [0-9]
		elseif (ctype_digit($key[$i])) {
			$keyPattern .= '[0-9]*';
		}
		//check if the char is special symobl
		else {
			$keyPattern .= "\\".$key[$i];
		}
	}
	$keyPattern .= $key[strlen($key) - 1];
	


	// Create main regex for searching the text
	$textPattern = "\"/" . $keyPattern . '(.{2,6})' . $keyPattern . "/\"";
	preg_match_all("/a[0-9]*\#\"[A-Z]*5(.{1,6})a[0-9]*\#\"[A-Z]*5/", $text, $matches);

	// Print the output
	$html = "<p>";
	$html .= implode('', $matches[1]);
	$html .= "</p>";
	echo $html;
	









function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>