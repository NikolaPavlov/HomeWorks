<?php 
	$num = 1234;

	for ($i=100; $i < 1000; $i++) { 
		if ((num % 10 != (num/10) % 10) &&
			((num/10) % 10 != (num/100) % 10)) {
			echo "$i,";
		}
	}
	echo 'test';

 ?>