function checkBrackets (str) {
	var strArr = str;
	var leftBrackets = 0;
	var rightBrackets = 0;

	for (var i = 0; i < strArr.length ; i++) {
		if (strArr[i] === "(") {
			leftBrackets++;
		} else if (strArr[i] === ")") {
			rightBrackets++;
		}
	}
	if (leftBrackets === rightBrackets) {
		console.log("correct");
	} else {
		console.log("incorrect");
	}
}

checkBrackets('( ( a + b ) / 5 – d )');
checkBrackets(') ( a + b ) )');
checkBrackets('( b * ( c + d *2 / ( 2 + ( 12 – c / ( a + 3 ) ) ) )');