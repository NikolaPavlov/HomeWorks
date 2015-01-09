<?php 
/*
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

	// print_array($answers);






	$answers2 = array();
	for ($i=0; $i < count($answers) - 1; $i++) { 
		if ($answers[$i]['type'] == $answers[$i + 1]['type']) {
			$data2 = [
				'type' => $answers[$i]['type'],
				'room' => $answers[$i]['room'],
				'name' => array(),
				'weight' => $answers[$i]['weight'] + $answers[$i+1]['weight']
			];
			if ($data2['weight'] > $maxWeight) {
				break;
			}
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

	// print_array($answers2);
	usort($answers2, 'sortByType');

	foreach ($answers2 as $key => $arr) {
		print_array($arr['name']);
	}
	
	// echo '----------------------';
	// print_array($answers2);





function sortByType($a, $b) {
	return strcmp($a['type'], $b['type']);
}

function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
*/


//====================author solution===========================//


$inputLuggage = $_GET['luggage'];
$luggage = explode('C|_|', $inputLuggage);
$luggage = array_filter($luggage);
$filterTypeLuggage = $_GET['typeLuggage']; // arr
$filterRoom = $_GET['room'];
$filterMinWeight = (int)$_GET['minWeight'];
$filterMaxWeight = (int)$_GET['maxWeight'];

$luggageList = array();
foreach ($luggage as $luggagePiece) {
	$tempLuggagePiece = explode(';', $luggagePiece);
	$tempType = $tempLuggagePiece[0];
	$tempRoom = $tempLuggagePiece[1];
	$tempWeight = floor($tempLuggagePiece[3]);
	$tempName = $tempLuggagePiece[2];

	if (!array_key_exists($tempType, $luggageList) ||
		!array_key_exists($tempRoom, $luggageList[$tempType])) {
		$luggageList[$tempType][$tempRoom][$tempWeight][] = $tempName;
	} else {
		$oldKey = key($luggageList[$tempType][$tempRoom]);
		$newKey = ($oldKey + $tempWeight) + '';
		$luggageList[$tempType][$tempRoom][$newKey] = $luggageList[$tempType][$tempRoom][$oldKey];
		$luggageList[$tempType][$tempRoom][$newKey][] = $tempName;
		unset($luggageList[$tempType][$tempRoom][$oldKey]);
	}
}

ksort($luggageList);
print_array($luggageList);

// Print the output
$html = "<ul>";
foreach ($luggageList as $type => $rooms) {
	ksort($rooms);
	if (in_array($type, $filterTypeLuggage)) {
			$html .= '<li><p>' . $type . '</p>';
	}
}
















function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}

 ?>