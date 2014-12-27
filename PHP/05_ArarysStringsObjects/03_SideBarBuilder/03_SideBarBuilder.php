<html>
<head>
	<meta charset="UTF-8">
	<title>SideBarBuilder</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="" method="POST">
		<label>Categories:</label>
		<input type="text" name="categories"><br>
		<label>Tags:</label>
		<input type="text" name="tags"><br>
		<label>Months:</label>
		<input type="text" name="months"><br>
		<input type="submit" value="Generate">
	</form>
	<?php 
			//create function for printing the separate menu
			function genereteAside($title, $content){
			//split the content into words
			$splitedContent = explode(', ', $content);
			echo '<div class="aside">';
			echo "<h3>$title</h3>";
			echo '<hr>';
			echo '<ul>';
			foreach ($splitedContent as $value) {
				echo "<li><a href=\"#\">$value</a></li>";
			}
			echo '</ul>';
			echo '</div>';
		}
	// check if the form is recived
	if (isset($_POST['categories'])&&
		isset($_POST['tags']) &&
		isset($_POST['months'])) {
			$categories = $_POST['categories'];
			$tags = $_POST['tags'];
			$months = $_POST['months'];

			genereteAside('Categories', $categories);
			genereteAside('Tags', $tags);
			genereteAside('Months', $months);
	}
		

		
	 ?>
</body>
</html>