function solve (input) {
	var deg = Number(input[0].match(/\d+/g)) ; 
	var matrix = [];



}
//loading the matrix with row strings from input
function loadMatrix (input) {
	var matrix = [];
	var maxLength = 0;

	//finding the max length
	for (var i = 1; i < input.length; i++) {
		if (input[i] > maxLength) {
			maxLength = input[i].length;
		};
	};
	//added ' ' if input.length < maxLength
	for (var i = 0; i < input.length; i++) {
		if (input[i].length < maxLength) {
			input[i] = input[i] + Array(maxLength - input.length).join(' ');
		};	
	};
}

//rotete the matrix





//Tests
solve([
	'Rotate(90)',
	'hello',
	'softuni',
	'exam'
]);
