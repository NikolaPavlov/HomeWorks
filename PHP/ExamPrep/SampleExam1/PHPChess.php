<?php 
	
	// 70/100pts

	// The board should be 8x8
	// Allow pieces are R, H, B, K, Q, P

$board = $_GET['board'];
// echo $board;
if (!isset($board)) {
	invalidBoard();
}
// Split board into rows
$rows = preg_split('/\//', $board);
// print_array($rows);
if (count($rows) != 8) {
	invalidBoard();
}

$answers = [];
$answersTable = [];
foreach ($rows as $row) {
	$cells = preg_split('/-/', $row);
	if (count($cells) != 8) {
		invalidBoard();
	}
	// echo $row . '<br>';
	array_push($answersTable, $row);
	// Check every cell value
	foreach ($cells as $cell) {
		checkPices($cell);
		array_push($answersTable, $cell);
	}

}

// Print the output (print the matrix in PHP)
echo "<table>";
for ($i=0; $i < 72; $i+=9) { 
	echo '<tr>';
	for ($j=0; $j < 16; $j+=2) {
		
			echo '<td>'. $answersTable[$i][$j] . '</td>';
		
	}
	echo '</tr>';
}
echo "</table>";
// print_array($answersTable);
// var_dump($answersTable);




function checkPices($cell) {
	global $answers;
	if ($cell == 'R') {
		if (!isset($answers['Rook'])) {
			$answers['Rook'] = 1;	
		} else {
			$answers['Rook']++;
		}
	}

	if ($cell == 'H') {
		if (!isset($answers['Horseman'])) {
			$answers['Horseman'] = 1;	
		} else {
			$answers['Horseman']++;
		}
	}

	if ($cell == 'B') {
		if (!isset($answers['Bishop'])) {
			$answers['Bishop'] = 1;	
		} else {
			$answers['Bishop']++;
		}
	}

	if ($cell == 'K') {
		if (!isset($answers['King'])) {
			$answers['King'] = 1;	
		} else {
			$answers['King']++;
		}
	}

	if ($cell == 'Q') {
		if (!isset($answers['Queen'])) {
			$answers['Queen'] = 1;	
		} else {
			$answers['Queen']++;
		}
	}

	if ($cell == 'P') {
		if (!isset($answers['Pawn'])) {
			$answers['Pawn'] = 1;	
		} else {
			$answers['Pawn']++;
		}
	} 
	if ($cell == '-') {
		continue;
	} 
}

ksort($answers);
echo json_encode($answers);
// print_array($answers);









function invalidBoard() {
	die('<h1>Invalid chess board</h1>');
}

function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>