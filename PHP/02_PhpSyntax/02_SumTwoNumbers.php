<?php 
	$num1 = 2;
	$num2 = 5;
	$answer = $num1 + $num2;
	echo '$firstNum + $secondNum = '. $num1 . ' + ' . $num2 . ' = ' . number_format(floatval($answer), 2, '.', '');

	echo '<br>----------------------------------<br>';
	
	$num1 = 1.567808;
	$num2 = 0.356;
	$answer = $num1 + $num2;
	echo '$firstNum + $secondNum = '. $num1 . ' + ' . $num2 . ' = ' . number_format(floatval($answer), 2, '.', '');

	echo '<br>----------------------------------<br>';

	$num1 = 1234.5678;
	$num2 = 333;
	$answer = $num1 + $num2;
	echo '$firstNum + $secondNum = '. $num1 . ' + ' . $num2 . ' = ' . number_format(floatval($answer), 2, '.', '');