function bitChecker (num) {
	var numAsStr = num.toString(2);
	var thirdBit = numAsStr[numAsStr.length - 4];
	if (thirdBit === "1") {
		return true;
	} else {
		return false;
	}

// check binary representation, and the bit num:

	// return thirdBit;
	// return numAsStr;
}

console.log(bitChecker(333));
console.log(bitChecker(425));
console.log(bitChecker(2567564754));