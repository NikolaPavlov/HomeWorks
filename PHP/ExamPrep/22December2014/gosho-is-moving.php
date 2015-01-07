<?php 

	//[luggage type];[room];[name];[weight]"
	


	$luggageList = $_GET['luggage'];
	$luggageListSeparated = preg_split('/C\|_\|/', $luggageList, -1, PREG_SPLIT_NO_EMPTY);
	$typeLuggage = $_GET['typeLuggage'];//arr
	$room = trim($_GET['room']);//name of the room
	$minWeight = intval($_GET['minWeight']);
	$maxWeight = intval($_GET['maxWeight']);
	

	// print_array($luggageListSeparated);
	$answers = array();
	foreach ($luggageListSeparated as $line) {
		$lineSplited = preg_split('/;/', $line);
		// print_array($lineSplited);
		$typeLocal = $lineSplited[0];
		$roomLocal = $lineSplited[1];
		$nameLocal = $lineSplited[2];
		$weightLocal = floatval($lineSplited[3]);
		if (in_array($typeLocal, $typeLuggage) &&
			$roomLocal == $room &&
			$weightLocal <= $maxWeight) {
			$data = [
				'type' => $typeLocal,
				'room' => $roomLocal,
				'name' => $nameLocal,
				'weight' => $weightLocal
			];
			array_push($answers, $data);
		}
	}

	$answers2 = array();
	for ($i=0; $i < count($answers) - 1; $i++) { 
		if ($answers[$i]['type'] == $answers[$i + 1]['type']) {
			$data2 = [
				'type' => $answers[$i]['type'],
				'room' => $answers[$i]['room'],
				'name' => array(),
				'weight' => $answers[$i]['weight'] + $answers[$i+1]['weight']
			];
			array_push($data2['name'], $answers[$i]['name']);
			array_push($data2['name'], $answers[$i+1]['name']);
		} else {
			$data2 = [
				'type' => $answers[$i]['type'],
				'room' => $answers[$i]['room'],
				'name' => $answers[$i]['name'],
				'weight' => $answers[$i]['weight']
			];
		}
		array_push($answers2, $data2);
	}


print_array($answers2);
foreach ($answers2 as $arr) {
	// usort($arr, 'strSorter');
	print_array($arr);
	usort($arr, 'strSorter');
}
print_array($answers2);
// echo $answers2['name'];
// print_array($answers2[1]['name']);
// sort($answers2[1]['name']);
print_array($answers2[1]['name']);




function strSorter($a, $b) {
	return sort($arr['name']);
}

function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>