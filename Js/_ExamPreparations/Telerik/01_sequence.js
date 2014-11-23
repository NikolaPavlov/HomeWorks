function solve (arr) {
	var result = 1;
	var firstNum = Number(arr[0]);

	for (var i = 2; i < arr.length; i++) {
			var prevNum = Number(arr[i - 1]);
			var num = Number(arr[i]);

			if (num < prevNum) {
				result++;
			} 
	}

	console.log(result);
}


//test
// solve([9, 1, 8, 8, 7, 6, 5, 7, 7, 6]);//2 (answer is 5 wtf)
// solve([1, 2, -3, 4, 4, 0, 1]);//3 non-decreasing