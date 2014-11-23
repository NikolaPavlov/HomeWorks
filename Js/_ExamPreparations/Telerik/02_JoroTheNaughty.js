function solve (arr) {
	var firstRow = arr[0].split(' ').map(Number); // map(Number) ---> make Numbers
	var startPosition = arr[1].split(' ').map(Number);
	//loading matrix in Js
	var rows = firstRow[0];
	var cols = firstRow[1];
	var allJumps = firstRow[2];

	var field = [];
	var counter = 1;

	//loading the matrix aka. array of arrays
	for (var i = 0; i < rows; i++) {
		field[i] = [];
		for (var j = 0; j < cols; j++) {
			field[i][j] = counter++;		
		}
	}

	console.log(field);
}

solve([
	'6 7 3',
	'0 0',
	'2 2',
	'-2 2',
	'3 -1']
	);