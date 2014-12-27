<?php 
	// 100/100

	$text = $_GET['list'];
	$minPrice = $_GET['minPrice'];
	$maxPrice = $_GET['maxPrice'];
	$productType = $_GET['filter'];
	$order = $_GET['order'];


	$productLines = preg_split("/[\r\n]+/", $text, -1, PREG_SPLIT_NO_EMPTY);
	
	$products = array();

	for ($i=0; $i < count($productLines); $i++) { 
		$productData = explode('|', $productLines[$i]);
		$id = $i + 1;
		$name = trim($productData[0]);
		$type = trim($productData[1]);
		$components = explode(',', $productData[2]);
		$price = floatval($productData[3]);

		if ($type == $productType || $productType == 'all') {
			if ($price <= $maxPrice && $price >= $minPrice) {
				$data = [
				"name" => $name,
				"type" => $type,
				"components" => $components,
				"price" => $price,
				"id" => $id
				];
				array_push($products, $data);
			}
		}
	}

usort($products, 'sorter');
if ($order == 'descending') {
	$products = array_reverse($products);
}

//printing the output
$html = "";
foreach ($products as $product) {
	$id = htmlspecialchars($product['id']);
	$name = htmlspecialchars(trim($product['name']));
	$price = htmlspecialchars(number_format($product['price'], 2, '.', ''));

	$html .= "<div class=\"product\" id=\"product" . $id . "\">";
	$html .= "<h2>" . $name . "</h2>";
	$html .= "<ul>";
	foreach ($product['components'] as $component) {
		$component = htmlspecialchars(trim($component));
		$html .= "<li class=\"component\">$component</li>";
	}
	$html .= "</ul>";
	$html .= "<span class=\"price\">" . $price . "</span>";
	$html .= "</div>";
}
	echo $html;







function sorter($a, $b) {
	if ($a['price'] == $b['price']) {
		return $a['id'] > $b['id'] ? 1 : -1; 
	} else {
		return $a['price'] > $b['price'] ? 1 : -1;
	}
}
	
function print_array($aArray) {
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
 ?>