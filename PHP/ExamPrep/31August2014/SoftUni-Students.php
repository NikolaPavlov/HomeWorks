<?php 

	// 100/100pts

	//result is integer number
	//automaticly get id number
	//when we can't sort by certain criteria, sort by id should be performed
	


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

	switch ($column) {
		case 'id': usort($results, 'sortById'); break;
		case 'username': usort($results, 'sortByUsername'); break;
		case 'result': usort($results, 'sortByResult'); break;
		default: echo 'error in switch'; break;
	}

	if ($order == 'descending') {
		$results = array_reverse($results);
	}

	// Print the output
	$html = '<table>';
	$html .= '<thead><tr><th>Id</th><th>Username</th><th>Email</th><th>Type</th><th>Result</th></tr></thead>';
	foreach ($results as $student) {
		$html .= '<tr>';
		$html .= '<td>' . htmlspecialchars($student['id']) . '</td>';
		$html .= '<td>' . htmlspecialchars($student['name']) . '</td>';
		$html .= '<td>' . htmlspecialchars($student['email']) . '</td>';
		$html .= '<td>' . htmlspecialchars($student['type']) . '</td>';
		$html .= '<td>' . htmlspecialchars($student['points']) . '</td>';
		$html .= '</tr>';
	}
	$html .= '</table>';
	echo $html;






function sortById($a, $b) {
	return $a['id'] > $b['id'] ? 1 : -1;
}
function sortByUsername($a, $b) {
	if ($a['name'] === $b['name']) {
		return sortById($a, $b);
		break;
	}
	return strcmp($a['name'], $b['name']);
}
function sortByResult($a, $b) {
	if ($a['points'] == $b['points']) {
		return sortById($a, $b);
		break;
	}
	return $a['points'] > $b['points'] ? 1 : -1;
}

function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>