function divisionBy3(num) {
	var sumDigits = 0;


	while (num != 0) {
		sumDigits += num % 10;
		sumDigits /= 10;
	}
	return sumDigits;
}


console.log(divisionBy3(25434));
console.log(divisionBy3(734));