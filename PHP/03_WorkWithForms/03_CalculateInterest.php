<!-- Problem 3. Calculate Interest
Write a PHP script CalculateInterest.php which generates an
HTML page that contains:
- An input text field to hold the amount of money
- Radio buttons to choose the currency
- An input text field to enter the compound annual interest amount
- A dropdown menu to choose the period of time.
- A submit button. When the information is submitted, the script
should print out the amount of money you will have after the selected
period, rounded to 2 decimal places. Semantic HTML is required.
Styling is not required.
After the 6th month we have 1061.520150601 USD in our account. We round
the result and add the symbol "$" for USD. The output is $ 1061.52. -->

<!DOCTYPE html>
<html>
	<head>
		<title>CalculateInterest</title>
	</head>
	<body>
		<!-- generate the html with php for training-->
		<?php
			echo '<form method="GET">';
					echo '<div>';
					echo '<label>Enter Amount</label>';
							echo '<input type="text" name="amount">';
					echo '</div>';
					echo '<input type="radio" value="USD" name="currency" checked><label>USD</label>';
					echo '<input type="radio" value="EUR" name="currency"><label>EUR</label>';
					echo '<input type="radio" value="BGN" name="currency"><label>BGN</label>';
					echo '<div>';
							echo '<label>Compound Interest Amount</label>';
							echo '<input type="text" name="interest">';
					echo '</div>';
					echo '<select name="period-months">';
							echo '<option>6 Months</option>';
							echo '<option>1 Year</option>';
							echo '<option>2 Year</option>';
							echo '<option>5 Year</option>';
					echo '</select>';
					echo '<input type="submit" name="submit" value="Calculate">';
			echo '</form>';
		?>
		<!-- enough training, stop generate html with php, stop taking drugs too -->
		<!-- taking the input  -->
		<?php
			if (isset($_GET['amount'])
				&& isset($_GET['currency'])
				&& isset($_GET['interest'])
				&& isset($_GET['period-months'])) {
				$amount = floatval($_GET['amount']);
				$currency = $_GET['currency'];
				$interest = floatval($_GET['interest']);
				$periodInMonths = floatval($_GET['period-months']);
				if (is_numeric($amount) && is_numeric($interest) && is_numeric($periodInMonths)) {
					if ($interest > 0 && $interest <= 100) {
						$numberOfYears = $periodInMonths / 12;
						$result = $amount * pow(1 + ($interest / 100) / 12, 12 * $numberOfYears);
						$result = number_format($result, 2, '.', '');
						if ($currency == 'USD') {
							$currency = '$';
						}
						echo "$result $currency";
					} else {
						echo "Isn't a valid interest";
					}
				} else {
					echo "Isn't a num!";
				}
			}
		?>
	</body>
</html>