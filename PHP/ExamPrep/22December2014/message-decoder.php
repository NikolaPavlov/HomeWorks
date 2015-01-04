<?php 
	//GODLIKE

	// “Reply from [ip_address]: bytes=[size_in_bytes] time=[time_in_milliseconds]ms TTL=[time_to_live]”
	// Reply from 95.101.195.91: bytes=32 time=068ms TTL=49


	$jsonMatrix = $_GET['jsonTable'];
	// echo $jsonMatrix;
	$jsonDecode = json_decode($jsonMatrix);
	// print_array($jsonDecode);
	$columns = $jsonDecode[0];
	$arrPings = $jsonDecode[1];
	// print_array($arrPings);


	$answers = array();

	for ($i=1; $i < count($arrPings); $i++) { 
		preg_match("/(\d+)ms/", $arrPings[$i], $matches);
		// echo chr($matches[1]) . '<br>';
		$chr = htmlspecialchars(chr($matches[1]));
		array_push($answers, $chr);
	}

	$html = "";
	$html .= "<table border='1' cellpadding='5'><tr>";

	$html .= "</table>";
	echo $html;







function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>