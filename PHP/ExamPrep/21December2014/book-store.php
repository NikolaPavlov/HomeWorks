<?php 
	
	// 85/100pts

	date_default_timezone_set('Europe/Sofia');
	//sort criteria = $genre $author $publishDate

	$productList = $_GET['text']; //[\r\n]
	$minPrice = $_GET['min-price'];
	$maxPrice = $_GET['max-price'];
	$sortCritria = $_GET['sort'];
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

	// print_array($answers);
	// echo $sortCritria;
	
	switch ($sortCritria) {
		case 'genre': usort($answers, 'genreSort'); break;
		case 'author': usort($answers, 'authorSort'); break;
		case 'publish-date': usort($answers, 'publishDateSort'); break; // deoes't work for now
		default: echo 'error in switch'; break;
	}
	 // echo  '<br>' . '---------------' . '<br>';
	
	 if ($order == 'descending') {
	 	$answers = array_reverse($answers);
	 }

 	// print_array($answers);


 	// Print the output
 	$html = "";
 	foreach ($answers as $book) {
 		$dateForPrint = date('Y-m-d', $book['publishDate']);
 		$html .= '<div>';
 		$html .= '<p>' . htmlspecialchars($book['name']) . '</p>';
 		$html .= '<ul>';
 		$html .= '<li>' . htmlspecialchars($book['author']) . '</li>';
 		$html .= '<li>' . htmlspecialchars($book['genre']) . '</li>';
 		$html .= '<li>' . htmlspecialchars($book['price']) . '</li>';
 		$html .= '<li>' . htmlspecialchars($dateForPrint) . '</li>';
 		$html .= '<li>' . htmlspecialchars($book['info']) . '</li>';
 		$html .= '</ul>';
 		$html .= '</div>';
 	}
 	echo $html;


function genreSort($a, $b) {
	return strcmp($a['genre'], $b['genre']);
}
function authorSort($a, $b){
	return strcmp($a['author'], $b['author']);
}
function publishDateSort($a, $b){
	return $a['publishDate'] > $b['publishDate'] ? 1 : -1;
}

function print_array($aArray) {
 	echo '<pre>';
    print_r($aArray);
    echo '</pre>';
}
 ?>