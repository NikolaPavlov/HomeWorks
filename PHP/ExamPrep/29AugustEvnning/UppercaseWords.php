<?php 
	$text = $_GET['text'];
	// echo $text;



	for ($i=0; $i < count($text); $i++) { 
		echo $text[$i];
	}














function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>