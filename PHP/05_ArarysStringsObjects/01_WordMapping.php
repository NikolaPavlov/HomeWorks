<!-- Problem 1. Word Mapping
Write a PHP program WordMapper.php that takes a text from
a textarea and prints each word and the number of times it
occurs in the text. The search should be case-insensitive.
The result should be printed as an HTML table. -->

<html>
<head>
	<meta charset="UTF-8">
	<title>WordMapping</title>
</head>
<body>
	<form action="#" method="GET">
		<textarea name="txt" cols="60" rows="5">
			
		</textarea><br>
		<input type="submit" value="Count words">
	</form>
	<?php 
		if (isset($_GET['txt']) && !empty($_GET['txt'])) {
			$txt = $_GET['txt'];
			$txtSplited = preg_split("/[\W+]/", $txt, -1, PREG_SPLIT_NO_EMPTY);
			//check if the element from first array exsist in the $answer arr, if so increase the
			//value of its key by one, else create that key
			$answer = array();
			foreach ($txtSplited as $value) {
				if (isset($answer[$value])) {
					$answer[$value]++;
				} else {
					$answer[$value] = 1;
				}
			}
			arsort($answer);//Sort an associative array in descending order, according to the value
			//print the output
			echo '<table border="5">';
			echo '<tr><td>'.'Word'.'</td><td>'.'Count'.'</td></tr>';
			foreach ($answer as $key => $value) {
				echo '<tr><td>'. $key .'</td><td>'. $value .'</td></tr>';
			}
			echo '</table>';
		}
	 ?>
	 
</body>
</html>
