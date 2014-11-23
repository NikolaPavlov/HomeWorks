//telerik ninjas wtf 
function solve(arr) {
	var numbers = [];
	var biggerSum = -2000000;

	for (var i = 1; i < arr.length; i++) {
		numbers.push(parseInt(arr[i]));
	}


	for (var i = 0; i < arr.length; i++) {
		var currentSum = 0;
		for (var j = i + 1; j < arr.length; j++) {
			currentSum += numbers[j];
			if (currentSum > biggerSum) {
				biggerSum = currentSum;
			}
		}
	}
	console.log(biggerSum);
}



//test
// solve([
// 	'8', 
// 	'1', '6', '-9', '4', '4', '-2', '10', '-1']);
// solve(arr);