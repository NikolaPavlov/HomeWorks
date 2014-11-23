function solve (args) {
	var firstRow = args[0].split(' ');
	var rows = parseInt(firstRow[0]);
	var cols = parseInt(firstRow[1]);
	var secondRow = args[1].split(' ');
	var row = parseInt(secondRow[0]);
	var col = parseInt(secondRow[1]);

	var lab = args.slice(2);
	var visited = {};

	var sum = 0;
	var count;
	var directions = {
		u: {
			row: -1,
			col: 0
		},
		r: {
			row: 0,
			col: +1
		},
		d: {
			row: +1,
			col: 0
		},
		l: {
			row: 0,
			col: -1
		}
	}

	function getValueAt (row, col, cols) {
		return row * cols + col + 1;
	}

	while() {
		//check if outside of the labyrinth

		//check if on visited cell 
		sum += getValueAt(row, col, cols);
		count++;
		var dir = lab[row][col];
		row += directions[dir].row;
		col += directions[dir].col;
		visited[getValueAt(row, col, cols)] = true;
	}

	console.log(lab);
}


solve(test1);



var test1 = [
"3 4",
"1 3",
"lrrd",
"dlll",
"rddd"
];

