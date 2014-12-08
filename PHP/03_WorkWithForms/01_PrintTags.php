<!--Problem 1. Print Tags
Write a PHP script PrintTags.php which generates an HTML input
text field and a submit button. In the text field the user must
enter different tags, separated by a comma and a space (", ").
When the information is submitted, the script should split the tags,
put them in an array and print out the array. Semantic HTML is required.
Styling is not required. -->

<!DOCTYPE html>
<html>
	<head>
		<title>PrintTags</title>
	</head>
	<body>
		<!-- generate html with php for training -->
		<?php
			echo '<form method="GET">';
			echo '<label>Enter Tags</label><br>';
			echo '<input type="text" name="tags">';
			echo '<input type="submit" value="Submit" name="submit">';
			echo '<br>';
		?>
		<!-- taking the input, split it, put it in arr, return the awesomeness -->
		<?php 
			if (isset($_GET['tags']) && !empty($_GET['tags'])) {
				$tags = preg_split('/[, ]+/', $_GET['tags']);
				foreach ($tags as $key => $value) {
					echo "$key : $value <br>";
				}			
			}
		 ?>
	</body>
</html>