function solve(arr) {
		var firstRow = arr[0].split(' ');
		var rows = parseInt(firstRow[0]);
		var cols = parseInt(firstRow[1]);
		var secondRow = arr[1].split(' ');
		var startRow = parseInt(secondRow[0]);
		var startCol = parseInt(secondRow[1]);
		//loading the char array
		var charArr = arr.slice(2);
		var visited = {
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
		};
		var sum = 0;
		var count = 0;


//formula for get value of given cell
		function getValueAtGivenCell(row, col, cols) {
			return row * cols + col + 1;
		}

		while () {
			//check if on visited cell

			//check if outside of the labyrinth 
			var dir = charArr[row][col];
		}


}

		//test
		solve(args = [
			"3 4",
			"1 3",
			"lrrd",
			"dlll",
			"rddd"
		]);

		// solve(args =[
		//  "5 8",
		//  "0 0",
		//  "rrrrrrrd",
		//  "rludulrd",
		//  "durlddud",
		//  "urrrldud",
		//  "ulllllll"]);

		// solve(args =[
		//  "5 8",
		//  "0 0",
		//  "rrrrrrrd",
		//  "rludulrd",
		//  "lurlddud",
		//  "urrrldud",
		//  "ulllllll"]);