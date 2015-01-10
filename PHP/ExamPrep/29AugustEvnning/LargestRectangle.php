<?php 

	//unfinished
	
	$input = $_GET['jsonTable'];
	$decodeInput = json_decode($input);
	echo $decodeInput;

	print_array($decodeInput);














function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>