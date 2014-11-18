
//input 2 numbers in arr

function printTable(input) {
	var startNum = parseInt(input[0]);
	var endNum = parseInt(input[1]);

console.log("<table>");
console.log("<tr><th>Num</th><th>Square</th><th>Fib</th></tr>");


	for (var i = startNum; i <= endNum; i++) {
		var numSquare = i * i;
		var fibStr = "";
		if (checkFibNums(i, endNum)) {
			fibStr = "yes";
		} else {
			fibStr = "no";
		}
		//format the output
		console.log(
			'<tr><td>' + i + '</td><td>' +
			numSquare + '</td><td>' + fibStr +
			'</td></tr>');
	}
console.log("</table>");

function checkFibNums(numForCheck, maxNum) {
	var fib = [];
	var startNumFib = 0;
	var secondNumFib = 1;
	var tempNum = 0;

	for (var i = 0; i < maxNum; i++) {
		tempNum = startNumFib + secondNumFib;
		startNumFib = secondNumFib;
		secondNumFib = tempNum;
		if (tempNum < 1.3069892237633987e+308) {
			fib.push(tempNum);
		}
	}

	//check if arr contains numForCheck
	return (fib.indexOf(numForCheck) > -1);

}
}






// printTable([2, 6]);
// printTable([55,56]);
