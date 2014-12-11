<!--Problem 5. Sum of Digits
Write a PHP script SumOfDigits.php which receives a comma-separated list
of integers from an input form and creates a two-column table. The first
column should contain each of the values from the input. The second column
should contain the sum of the digits of each value. If the value is not an
integer number, print "I cannot sum that". Styling the page is optional. -->

<!DOCTYPE html>
<html>
	<head>
		<title>Title</title>
	</head>
	<body>
		<form action="#" method="POST" accept-charset="utf-8">
			<label>Input string:</label>
			<input type="text" name="input">
			<input type="submit" name="submit">
		</form>
		<table border="5">
			<tbody>
				<?php 
					if (isset($_POST['input']) && !empty($_POST['input'])) {
						$inputSplit = preg_split('/[, ]+/', $_POST['input']);
						foreach ($inputSplit as $value) {
							echo "<tr><td>$value</td>";
							if (is_numeric($value)) {
								$sum = 0;
								do {
									$sum += $value % 10;
								} while ($value = (int) $value / 10);
							} else {
								$sum = 'I cannot sum that';
							}
							echo "<td>$sum</td>";
						}
					}
				 ?>
			</tbody>
		</table>
	</body>
</html>