function isPrime(num) {
	//if num is smaller than 1 he isn`t prime by definition
	if (num <= 1) {
		return false;
	};

	//check if number is integer
	if (num != Math.round(num)) {
		return false;
	};

	// core check 
	for (var i = 2; i < Math.sqrt(num); i++) {
		if (num % i == 0) {
			return false;
		} else {
			return true;
		}
	};
}

console.log(isPrime(7));
console.log(isPrime(254));
console.log(isPrime(587));