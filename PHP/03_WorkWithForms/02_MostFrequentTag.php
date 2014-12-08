<!--Problem 2. Most Frequent Tag
Write a PHP script MostFrequentTag.php which generates an HTML input
text field and a submit button. In the text field the user must enter
different tags, separated by a comma and a space (", "). When the
information is submitted, the script should generate a list of the tags,
sorted by frequency. Then you must print: "Most Frequent Tag is:
[most frequent tag]". Semantic HTML is required. Styling is not required -->

<!DOCTYPE html>
<html>
<head>
	<title>MostFrequentTag</title>
</head>
<body>
	<!-- generate html with php for training-->
	<?php 
		echo '<form method="GET">';
		echo '<label>Enter Tags:</label>';
		echo '<div>';
		echo '<input name="tags" type="text">';
		echo '<input type="submit" value="Submit">';
		echo '</div>';
	 ?>
	 <!-- taking the input, put it in arr,create another asociative arr
	  output the sorted by asociativeArr values tags -->
	<?php 
		if (isset($_GET['tags']) && !empty($_GET['tags'])) {
			$tags = explode(', ', $_GET['tags']);
			$tagsFreq = array();

			//put values from 1st arr to keys in second,
			// if key exist count++
			foreach ($tags as $value) {
				if (isset($tagsFreq[$value])) {
					$tagsFreq[$value]++;
				}
				else {
					$tagsFreq[$value] = 1;
				}
			}
			//sort associative arr by value
			arsort($tagsFreq);

			//creating the output
			foreach ($tagsFreq as $key => $value) {
				echo "$key : $value times". '<br>';
			}
		}
	 ?>

</body>
</html>