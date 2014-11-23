function solve (arr) {
	var numbers = [];
	var biggestSum = Number.MIN_VALUE;
	var localSum = 0;

	for (var i = 0; i < arr.length; i++) {
		numbers.push(parseInt(arr[i]));
	}

	for (var i = 1; i < arr.length - 1; i++) {
		for (var j = i + 1; j < arr.length; j++) {
			localSum += numbers[j];
			if (localSum > biggestSum) {
				biggestSum = localSum;
			}
		}
		localSum = 0;
	}
	console.log(biggestSum);
	// console.log(typeof(numbers[1]));
}


solve([
	'8', 
	'1', '6', '-9', '4', '4', '-2', '10', '-1']);