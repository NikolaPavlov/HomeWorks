<?php 
	
	$inputHtml = $_GET['priceList'];
	$pattern = "/<td>\s*(.*?)\s*<\/td>\s*<td>\s*(.*?)\s*<\/td>\s*<td>\s*(.*?)\s*<\/td>\s*<td>\s*(.*?)\s*<\/td>/";
	// $pattern = "|<td>\s*(.*?)\s*</td>\s*<td>\s*(.*?)\s*</td>\s*<td>\s*(.*?)\s*</td>\s*<td>\s*(.*?)\s*</td>|";
	preg_match_all($pattern, $inputHtml, $matches, PREG_SET_ORDER);
	print_array($matches);

	$answers = array();
	foreach ($matches as $match) {
		$category = html_entity_decode($match[2]);
		$product = html_entity_decode($match[1]);
		$price = html_entity_decode(floatval($match[3]));
		$price = number_format($price, 2, '.', '');
		$currency =html_entity_decode($match[4]);
		$data = [
			'product' => $product,
			'price' => $price,
			'currency' => $currency
		];

		if (!isset($answers[$category])) {
			$answers[$category] = array();
		}
		array_push($answers[$category], $data);
	}

	// print_array($answers);
	ksort($answers);// sorting array of arrays by first element
	foreach ($answers as $category => $item) {
		usort($answers[$category], 'sorter');
	}
	echo json_encode($answers);
	// echo '--------------';
	// print_array($answers);









function sorter($a, $b) {
	return strcmp($a['product'], $b['product']);
}

function print_array($aArray) {
// Print a nicely formatted array representation:
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>