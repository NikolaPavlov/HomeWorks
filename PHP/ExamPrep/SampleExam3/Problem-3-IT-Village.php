<?php 
	//game board is 4x4
	//clockwise


	$boardAsString = "P I F S | P 0 0 F | N 0 0 V | I F F I";
	$enterPosition = "2 1";
	$movesAsString = "5 11 9 8 6 8 4";
	

	$boardSplited = preg_split('/\|/', $boardAsString, -1, PREG_SPLIT_NO_EMPTY);
	$movesSplited = preg_split('/ /', $movesAsString, -1, PREG_SPLIT_NO_EMPTY);
	$money = 50;
	$countInn = 0;
	$startRow = $enterPosition[0];
	$startCol = $enterPosition[2];

	
	// //remove all empty spaces in the board matrix 
	$boardSplited1 = array();
	foreach ($boardSplited as $row) {
		$rowSplited = preg_split('/ /', $row, -1, PREG_SPLIT_NO_EMPTY);
		$boardSplited1[] = $rowSplited;
	}

	// Create string with all available bord cells clockwise
	$field = 	$boardSplited1[0][0].
				$boardSplited1[0][1].
				$boardSplited1[0][2].
				$boardSplited1[0][3].
				$boardSplited1[1][3].
				$boardSplited1[2][3].
				$boardSplited1[3][3].
				$boardSplited1[3][2].
				$boardSplited1[3][1].
				$boardSplited1[3][0].
				$boardSplited1[2][0].
				$boardSplited1[1][0];


	// Find the start position in the $field string $positionIndex
	if ($startRow <= $startCol) {
		$positionIndex = $startRow + $startCol;
	} else {
		$positionIndex = 12 - ($startRow + $startCol);
	}

	for ($i=0; $i < count($movesSplited); $i++) { 
		$positionIndex = ($positionIndex + $movesSplited[$i]) % 12;
		  switch ($field[$positionIndex]) {
        case 'P' : {
            $money-=5;
        } break;
        // case 'I' : {
        //     if (!in_array($positionIndex, $innOwn)) {
        //         if ($money >=100) {
        //             $innOwn[] = $positionIndex;
        //             $money -=100;
        //         } else {
        //             $money -=10;
        //         }
        //     }
        // } break;
        case 'F' : {
            $money+=20;
        } break;
        case 'S' : {
            $i+=2;
        } break;
        case 'V' : {
            $money*=10;
        } break;
        case 'N' : {
            echo  "<p>You won! Nakov's force was with you!<p>";
            return;
        }

    }
	}





function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>