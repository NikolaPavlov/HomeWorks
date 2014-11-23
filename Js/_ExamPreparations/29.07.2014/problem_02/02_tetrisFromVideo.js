//1.Nested loops for checking matrix elements
function solve(input) {
	var figures = {
			'I': 0,
			'L': 0,
			'J': 0,
			'O': 0,
			'Z': 0,
			'S': 0,
			'T': 0
		} //asociatif massiv aka.Dictonary
	var keys = Object.keys(figures);

	//keys asociative massive 
	//javascript associative massive
	for (var i = 0; i < input.length; i++) {
		for (var j = 0; j < input[i].length; j++) {
			if (input[i][j] == 'o') {
				for (var k = 0; k < Object.keys(figures); k++) {
					checkFigures(keys[k], i, j);
				}
			}
		}
	}

	function checkFigures(element, row, col) {
		switch (elem) {
			case 'I':
				break;
			case 'L':
				if (input[row][col] == input[row+1][col] &&
					input[row][col] == input[row+2][col] &&
					input[row][col] == input[row+2][col+1]) {
					figures['L']++;
				};
				break;
			case 'J':
				break;
			case 'O':
				break;
			case 'Z':
				break;
			case 'S':
				break;
			case 'T':
				break;
		}
	}

}



solve(['--o--o-',
	'--oo-oo',
	'ooo-oo-',
	'-ooooo-',
	'---oo--'
]);