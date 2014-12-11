<!--Problem 1. Square Root Sum
Write a PHP script SquareRootSum.php that displays a table in your browser
with 2 columns. The first column should contain a number (from 0 to 100) and
the second column should contain the square root of that number, rounded to
the second digit after the decimal point. The last row of the table should
contain the sum of all values in the Square column. Styling the page is optional. -->

<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
</head>
<body>
 <table border="5">
	 	<thead>
	 		<tr>
	 			<th>Number</th>
	 			<th>Square</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 	<!-- generate all rows with php -->
	<?php 
		$sum = 0;
		for ($i=0; $i <= 100; $i+=2) { 
			$num = $i;
			$sqrt = round(sqrt($i), 2);
			$sum += $sqrt;
			echo '<tr>';
			echo"<td>$num</td>";
	 		echo"<td>$sqrt</td>";
	 		echo '</tr>';
		}	
		// printing the sum
		echo '<tr>';
		echo '<td>Total</td>' . "<td>$sum</td>";
		echo '</tr>';
	 ?>
	 	</tbody>
	 </table>
</body>
</html>