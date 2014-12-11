<!--Problem 3. Show Annual Expenses
Write a PHP script AnnualExpenses.php that receives n years from an input HTML
form and creates a table (like the one shown below) with random expenses by months
and the corresponding years (n years back). For example, if N is 10, create a table
that shows the expenses for each month for the last 10 years. Add a "Total" column
at the end, showing the total expenses for the same year. The random expenses in the
table should be in the range [0…999]. Styling the page is optional. -->

<!DOCTYPE html>
<html>
	<head>
		<title>ShowAnualExpenses</title>
	</head>
	<body>
		<form action="#" method="POST" accept-charset="utf-8">
			<label>Enter number of years:</label>
			<input type="text" name="years">
			<input type="submit" name="submit" value="Show costs">
		</form>
		<table border="5">
			<thead>
				<tr>
					<th>Year</th>
					<th>January</th>
					<th>February</th>
					<th>March</th>
					<th>April</th>
					<th>May</th>
					<th>June</th>
					<th>July</th>
					<th>August</th>
					<th>September</th>
					<th>October</th>
					<th>November</th>
					<th>December</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if (isset($_POST['years']) && !empty($_POST['years'])) {
						$years = $_POST['years'];
						for ($year=2014; $year > 2014 - $years; $year--) {
							$sum = 0;
							echo '<tr>';
							echo "<td>$year</td>";
							for ($month=0; $month < 12; $month++) { 
								$rand = rand(0, 999);
								echo "<td>$rand</td>";	
								$sum += $rand;
							}
							echo "<td>$sum</td>";
							echo '</tr>';
						}
					}
				?>
			</tbody>
		</table>
	</body>
</html>