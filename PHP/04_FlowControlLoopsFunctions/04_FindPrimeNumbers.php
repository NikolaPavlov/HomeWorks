<!--Problem 4. Find Primes in Range
Write a PHP script PrimesInRange.php that receives two numbers –
start and end – from an input field and displays all numbers in
that range as a comma-separated list. Prime numbers should be bolded.
Styling the page is optional. -->

<!DOCTYPE html>
<html>
<head>
	<title>PrimeNumbersInRange</title>
</head>
<body>
<form action="#" method="GET" accept-charset="utf-8">
	<label>Start Index:</label>
	<input type="text" name="startNum">
	<label>End:</label>
	<input type="text" name="endNum">
	<input type="submit" name="submit" value="Submit">
</form>

<?php 
function isPrime($num) {
    //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
    if($num == 1)
        return false;
    //2 is prime (the only even number that is prime)
    if($num == 2)
        return true;
    /**
     * if the number is divisible by two, then it's not prime and it's no longer
     * needed to check other even numbers
     */
    if($num % 2 == 0) {
        return false;
    }
    /**
     * Checks the odd numbers. If any of them is a factor, then it returns false.
     * The sqrt can be an aproximation, hence just for the sake of
     * security, one rounds it to the next highest integer value.
     */
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }
    return true;
}

//creating the result
if (isset($_GET['startNum']) && isset($_GET['endNum'])
	&& !empty($_GET['startNum']) && !empty($_GET['endNum'])) {
	$startNum = $_GET['startNum'];
	$endNum = $_GET['endNum'];
 	$results = array();
	for ($i=$startNum; $i < $endNum; $i++) { 
		if (isPrime($i)) {
			array_push($results, "<strong>$i</strong>");
		} else {
			array_push($results, $i);
		}
	}
	// printing the ouput
	echo implode(', ', $results);
}
 ?>
</body>
</html>