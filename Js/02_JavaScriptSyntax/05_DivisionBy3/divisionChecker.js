function divisionBy3(num) {
	var sumDigits = 0;

	while (num > 0) {
		sumDigits += (num % 10);
		num = Math.floor(num / 10);
	}
	return Math.floor(sumDigits);
}


console.log(divisionBy3(25434));
console.log(divisionBy3(734));
