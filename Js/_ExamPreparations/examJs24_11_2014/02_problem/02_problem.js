//remove pluses 44pts/100
function solve(input) {
	// Initialize the output as char[][], holding the input chars
	var output = [];
	//getting the input, put it in rows, split the rows
	for (var row = 0; row < input.length; row++) {
		output[row] = input[row].split('');
	}

	//magic happen bellow
	for (var row = 2; row < input.length; row++) {
		// var maxCol = Math.min(
		// 	input[row - 1].length - 2,
		// 	input[row].length - 3);
		for (var col = 1; col <= 900; col++) {
			var a = input[row][col];
			var b = input[row - 1][col];
			var c = input[row - 2][col];
			var d = input[row - 1][col - 1];
			var e = input[row - 1][col + 1];
			if (a == b && b == c && c == d && d == e) {
				output[row][col] = '';
				output[row - 1][col] = '';
				output[row - 2][col] = '';
				output[row - 1][col - 1] = '';
				output[row - 1][col + 1] = '';
			};
		};
	};
	// Print the result
    for (var row = 0; row < input.length; row++) {
        console.log(output[row].join(''));
    }

 // console.log(output);
}




solve([
'ab**15',
'bBb*555',
'absh*5',
'ttHHH',
'ttth'
	]);

// solve([
// '888**t*',
// '8888ttt',
// '888ttt<<',
// '*8*0t>>hi'
// 	]);