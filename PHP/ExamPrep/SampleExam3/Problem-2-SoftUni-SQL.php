<?php 

	$commandsAsStr = $_GET['commands'];
	// echo $commandsAsStr;
	print_array($commandsAsStr);






function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>