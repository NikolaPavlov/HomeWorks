<!--Problem 1. Square Root Sum
Write a PHP script SquareRootSum.php that displays a table in your browser
with 2 columns. The first column should contain a number (from 0 to 100) and
the second column should contain the square root of that number, rounded to
the second digit after the decimal point. The last row of the table should
contain the sum of all values in the Square column. Styling the page is optional. -->

<!DOCTYPE html>
<html>
	<head>
		<title>RichPeopleProblems</title>
	</head>
	<body>
		<form action="#" method="POST" accept-charset="utf-8">
			<label>Enter cars:</label>
			<input type="text" name="cars">
			<input type="submit" name="submit" value="Show result">
		</form>
		<table border="5">
			<thead>
				<tr>
					<th>Car</th>
					<th>Color</th>
					<th>Count</th>
				</tr>
			</thead>
			<tbody>
					<?php
						if (isset($_POST['cars']) && !empty($_POST['cars'])) {
							$cars = $_POST['cars'];
							$carsSplited = explode(', ', $cars);//this will return array
							$colors = array('red', 'green', 'black', 'purple', 'orange');

							foreach ($carsSplited as $key=>$value) {
							$colorsRdn = array_rand($colors);
								echo '<tr>';
								echo "<td> $value </td>";
								echo '<td>' . $colors[$colorsRdn] . '</td>';
								echo '<td>' . rand(1, 5) . '</td>';
								echo '</tr>';
							}
						}
					?>
			</tbody>
		</table>
		
	</body>
</html>