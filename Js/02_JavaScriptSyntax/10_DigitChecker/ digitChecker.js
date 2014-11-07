function checkDigit(num) {
	var digit = (num / 100) % 10;
	if (Math.floor(digit) === 3) {
		return true;
	} else {
		return false;
	}
}

console.log(checkDigit(1235));
console.log(checkDigit(25368));
console.log(checkDigit(123456));