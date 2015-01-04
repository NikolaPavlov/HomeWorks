<?php 

	//[luggage type];[room];[name];[weight]"
	


	$luggageList = $_GET['luggage'];
	$luggageListSeparated = preg_split('/C\|_\|/', $luggageList, -1, PREG_SPLIT_NO_EMPTY);
	$typeLuggage = $_GET['typeLuggage'];//arr
	$room = trim($_GET['room']);//name of the room
	$minWeight = floatval($_GET['minWeight']);
	$maxWeight = floatval($_GET['maxWeight']);
	

	$answers = array();
	foreach ($luggageListSeparated as $line) {
		$lineSplited = explode(';', $line);

		$type = $lineSplited[0];
		$localRoom = $lineSplited[1];
		$name = $lineSplited[2];
		$weight = $lineSplited[3];
		$data = [
			'room' => $localRoom,
			'name' => $name,
			'weight' => $weight
		];

		if (!strcmp($localRoom, $room) && in_array($type, $typeLuggage)) {
			if (!isset($answers[$type])) {
				if (isset($answers[$])) {
						
				}
			}
			array_push($answers[$type], $data);
		}	
	}

	print_array($answers);



function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>