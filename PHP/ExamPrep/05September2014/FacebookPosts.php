<?php 
	// 100/100

	// 1.Extract all posts and put their values into asociative arr
	// 2.Sort bu dateStamp
	// 3.Print the output

	date_default_timezone_set('Europe/Sofia');

	$text = $_GET['text'];
	$textSplited = preg_split("/[\r\n]/", $text, -1, PREG_SPLIT_NO_EMPTY);

	$answers = array();
	foreach ($textSplited as $value) {
		$line = preg_split('/;/', $value, -1, PREG_SPLIT_NO_EMPTY);
		$author = $line[0];
		$date = $line[1];
		$dateStamp = strtotime($date);
		$dateFormated = htmlspecialchars(date('j F Y', $dateStamp));
		$post = $line[2];
		$likes = $line[3];
		if (isset($line[4])) {
			$comments = preg_split('/\//', $line[4], -1, PREG_SPLIT_NO_EMPTY);
		}
		$data = [
			'author' => $author,
			'date' => $dateStamp,
			'post' => $post,
			'likes' => $likes,
			'comments' => $comments
		];
		array_push($answers, $data);	
	}

	// print_array($answers);
	usort($answers, 'sorter');

	//creating the output
	$html = "";
	foreach ($answers as $value) {
		$html .= "<article>";
		$author = htmlspecialchars(trim($value['author']));
		$date = trim($value['date']);
		$dateFormated = htmlspecialchars(date('j F Y', $date));
		$post = htmlspecialchars(trim($value['post']));
		$likes = htmlspecialchars(trim($value['likes']));
		$comments = $value['comments'];

	$html .= "<header><span>$author</span><time>$dateFormated</time></header>";
	$html .= "<main><p>$post</p></main>";
	$html .= "<footer>";
	$html .= "<div class=\"likes\">$likes people like this</div>";
	$html .= "<div class=\"comments\">";
		foreach ($comments as $comment) {
			$comment = htmlspecialchars(trim($comment));
			$html .= "<p>$comment</p>"; 
		}
	$html .= "</div>";
	$html .= "</footer>";
	$html .= "</article>";
	}
	echo $html;











function sorter($a, $b) {
	if ($a['date'] == $b['date']) {
		return 0;
		break;
	}
	return $a['date'] > $b['date'] ? -1 : 1;
}

function print_array($arr) {
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}
 ?>

