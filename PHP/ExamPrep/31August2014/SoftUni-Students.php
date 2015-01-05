<?php 

	//sorting shits bellow
	
	//result is integer number
	//automaticly get id number
	//when we san't sort by criteria, sort by id should be performed
	//


	$studentsAsStr = $_GET['students']; // array new line splited
	$column = $_GET['column']; // column for sorting
	$order = $_GET['order']; //ascending or descending


	//Split all students inputs
	$students = preg_split('/[\r\n]/', $studentsAsStr, -1, PREG_SPLIT_NO_EMPTY);
	
	$results = array();
	$id = 1;
	foreach ($students as $student) {
		$studentSplited = preg_split('/, /', $student, -1, PREG_SPLIT_NO_EMPTY);
		$name = $studentSplited[0];
		$email = $studentSplited[1];
		$type = $studentSplited[2]; // online or onsite
		$points = (int)$studentSplited[3];

		$data = [
			'name' => $name,
			'email' => $email,
			'type' => $type,
			'points' => $points,
			'id' => $id
		];
		array_push($results, $data);
		$id++;
	}

	// Perform the sorting



function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>