<?php 
	
	//sort criteria = $genre $author $publishDate

	$productList = $_GET['text']; //[\r\n]
	$minPrice = $_GET['min-price'];
	$maxPrice = $_GET['max-price'];
	$sortCritria = $_GET['sort'];
	echo $sortCritria;
	$order = $_GET['order'];

	$products = preg_split('/[\r\n]/', $productList, -1, PREG_SPLIT_NO_EMPTY);
	// print_array($products);

	$answers = array();
	foreach ($products as $line) {
		$lineSplited = preg_split('/\//', $line);
		// print_array($lineSplited);
		$author = $lineSplited[0];
		$name = $lineSplited[1];
		$genre = $lineSplited[2];
		$price = $lineSplited[3];
		$publishDate = strtotime($lineSplited[4]);
		$info = $lineSplited[5];
		if ($price >= $minPrice && $price <= $maxPrice) {
			$data = [
				'author' => $author,
				'name' => $name,
				'genre' => $genre,
				'price' => $price,
				'publishDate' => $publishDate,
				'info' => $info
				];
				array_push($answers, $data);
		}
	}

	print_array($answers);
	
	switch ($sortCritria) {
		case 'genre': usort($answers, 'genreSort'); break;
		case 'author': usort($answers, 'authorSort'); break;
		case 'publish date': usort($answers, 'publishDateSort'); break;
		default: echo 'error in switch'; break;
	}
	 echo  '<br>' . '---------------' . '<br>';
	 print_array($answers);



function genreSort($a, $b) {
	return strcmp($a['genre'], $b['genre']);
}
function authorSort($a, $b){
	return strcmp($a['author'], $b['$author']);
}
function publishDateSort($a, $b){
	$a['publishDate'] > $b['publishDate'] ? 1 : -1;
}

function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>