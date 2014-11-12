// function findMinAndMax(arr) {
// 	var min = Math.MAX_VALUE;
// 	var max = Math.MIN_VALUE;

// 	for (var i = 0; i < arr.length - 1; i++) {
// 		if (arr[i] > max) {
// 			max = arr[i];
// 		}

// 		if (arr[i] < min) {
// 			min = arr[i];
// 		};
// 	}
// 	return console.log(min)
// }


function findMinAndMax (arr) {
	var resultsArr = arr.sort(function(a, b){return a - b});
	var min = resultsArr[0];
	var max = resultsArr[resultsArr.length - 1];
	console.log("Min ->", min +  "\nMax ->", max + "\n");
}

findMinAndMax([1, 2, 1, 15, 20, 5, 7, 31]);
findMinAndMax([2, 2, 2, 2, 2]);
findMinAndMax([500, 1, -23, 0, -300, 28, 35, 12]);