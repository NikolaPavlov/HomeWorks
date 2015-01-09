<?php 

	//60/100pts

	//1CPU + 1ROM + 1RAM + 1VIA = 1Comp = 420lv
	// 1cpu = 85lv;
	// 1rom = 45lv;
	// 1ram = 35lv;
	// 1via = 45lv;
	
	//If 5or more from one type -50% for thath type
	//If there is parts left after assembling He sells them for 50% of the price


$partsAsStr = $_GET['list'];
$parts = preg_split("/, /", $partsAsStr, -1, PREG_SPLIT_NO_EMPTY);



// Create associative array
$answers = array();
foreach ($parts as $part) {
	if (!isset($answers[$part])) {
		$answers[$part] = 1;
	} else {
		$answers[$part]++;
	}
}



// Calc the expenses
// print_array($answers);
$totalExpense = 0;
foreach ($answers as $piece => $pieceCount) {
	$totalExpense += calcExpense($piece, $pieceCount);
}

// echo '<br> totalExpense: ' . $totalExpense;


function calcExpense($piece, $pieceCount) {
	$price = 0;
	switch ($piece) {
		case 'CPU': $price = 85; 
			break;
		case 'ROM': $price = 45;
			break;
		case 'RAM': $price = 35;
			break;
		case 'VIA': $price = 45;
			break;
		default:
			echo 'error in swich case with ' . $piece;
			break;
	}

		if ($pieceCount >= 5) {
			return ($price * $pieceCount) / 2;
		} else {
			return $price * $pieceCount;
		}
	
}


// Iterate over the associative array and count the comps
$comps = 0;
while ($answers['CPU'] > 0 && 
	$answers['RAM'] > 0 && 
	$answers['VIA'] > 0 &&
	$answers['ROM'] > 0) {
	$comps++;
	$answers['CPU']--;
	$answers['RAM']--;
	$answers['VIA']--;
	$answers['ROM']--;
}



$totalCost = 	($answers['CPU'] * 85) / 2 + 
				($answers['RAM'] * 35) / 2 + 
				($answers['VIA'] * 45) / 2 + 
				($answers['ROM'] * 45) / 2;

$totalCost += 420 * $comps;
// echo '<br>totalCost: ' . $totalCost;

$partsLeft = $answers['CPU'] + $answers['RAM'] + $answers['VIA'] + $answers['ROM'];
$gain = $totalCost - $totalExpense;

// Print the output
$html = '<ul>';
$html .= "<li>$comps computers assembled</li>";
$html .= "<li>$partsLeft parts left</li>";
$html .= '</ul>';
if ($gain > 0) {
	$html .= "<p>Nakov gained $gain leva</p>";
} else {
	$gain = $gain * (-1);
	$html .= "<p>Nakov lost $gain leva<p>";
}


echo $html;




function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>