<?php 
/*

	//28/100pts didn't preserve [\n\r] symbols this is the problem MF!

	$text = $_GET['text'];

	$words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

	$output = array();
	foreach ($words as $word) {
		//check if $word contains all capitals
		if ($word === strtoupper($word)) {
			if ($word == strrev($word)) {
				array_push($output, palindrome($word));
			} else {
				array_push($output, strrev($word));
			}
		} else {
				array_push($output, $word);
		}
	}

	$html = '<p>';
	$html .= implode(' ', $output);
	$html .= '</p>';

	echo $html;




function palindrome($word){
		//return double charackters
		$doubleCharsWord = "";
		for ($i=0; $i < strlen($word); $i++) { 
			$doubleCharsWord .= $word[$i];
			$doubleCharsWord .= $word[$i];
		}
		return $doubleCharsWord;
}

function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
*/

//=============Solution with iterate over the str len=============//


	$text = $_GET['text'];
	
	$buffer = "";
	for ($i=0; $i < strlen($text); $i++) { 
		if (ord($text[$i]) >= 65 &&
			ord($text[$i]) <= 90) {
			$buffer .= $text[$i];
		} else {
			$buffer = "";

		}
	}

 	//use ctype_upper  ---> check if all charackters in the word are uppercase
 	
 ?>


 
