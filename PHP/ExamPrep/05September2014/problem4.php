<?php 

// 1.filter between minPrice and maxPrice
// 2.filter by product type(desktop, laprop, all)
// 3.order ascending or descending
// -give counter id to eace product
// encode the output with htmlspecialchars()



//getting the input 
$text = $_GET['list']; 
$minPrice = $_GET['minPrice'];
$maxPrice = $_GET['maxPrice'];
$filter = $_GET['filter']; //desktop laptop all 
$order = $_GET['order']; //ascending or descending

$id = 1;
$productsLine = preg_split("/[\n\r]/", $text, -1, PREG_SPLIT_NO_EMPTY);




$answers = array();// we will loading the filtered products here
//iterate over each product
foreach ($productsLine as $product) {
	global $id;
	$productParts = explode(' | ', $product);
	$name = $productParts[0];
	$type = $productParts[1];
	$parameters = explode(", ",$productParts[2]);
	$price = floatval($productParts[3]);
	
	$productData = [
		"name" => $name,
		"type" => $type,
		"parameters" => $parameters,
		"price" => $price,
		"id" => $id
	];

// check if the current product meet the sorting criteria and add it to $answers
	if ($price >= $minPrice &&
		$price <= $maxPrice &&
		$filter == $type || $filter == 'all') {
		$answers[] = $productData;
	}
	$id++;
}

	// sorting the products by value price
	asort($answers);
	// var_dump($answers);



// creating the output
	foreach ($answers as $value) {
		$html = "";
		$html .= "<div class=\"product\" id=\"product" . $value['id'] . "\">";
		$html .= "<h2>" . $value['name'] . "</h2>";
		$html .= "<ul>";
			// foreach ($value['parameters'] as $parameter) {
			// 	foreach ($parameter as $vl) {
			// 			echo $vl;
			// 		}				
			// }
		// $html .= "</ul>";
		// $html .= "<span class=\"price\"> ". number_format($value['price'], 2, '.', '')
		// . "</span>";
		// $html .= "</div>";




		// echo $html;	
		// var_dump($value['parameters']);
		// echo "<h2>".$value['id']."</h2>";
	}
	


	function print_array($aArray) {
// Print a nicely formatted array representation:
  echo '<pre>';
  print_r($aArray);
  echo '</pre>';
}
	print_array($answers);
	// var_dump($answers
 ?>