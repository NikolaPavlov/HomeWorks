//initialize two dimensional array
function revealTriangles(arr) {
	var output = [];
	//translate input into char arrays, char[][]
	for (var i = 0; i < arr.length; i++) {
		output.push(arr[i].split(''));
	}
	//replace triangles with *
	for (var row = 1; row < output.length; row++) {
		for (var col = 0; col < arr[row].length; col++) {
			var a = arr[row][col];
			var b = arr[row][col + 1];
			var c = arr[row][col + 2];
			var d = arr[row - 1][col + 1];
			if (a == b && b == c && c == d) {
				output[row][col] = '*';
				output[row][col + 1] = '*';
				output[row][col + 2] = '*';
				output[row - 1][col + 1] = '*';
			}
		}
	}
	console.log(output);
}



// test here bitchez
revealTriangles([
	'abcdexgh',
	'bbbdxxxh',
	'abcxxxxx'
]);