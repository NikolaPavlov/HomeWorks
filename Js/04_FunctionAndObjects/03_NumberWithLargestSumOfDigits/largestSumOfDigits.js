function findLargestBySumOfDigits(arr) {
	var nums = [];
	var sumOfDigits = 0;
	var biggestSum = 0;
	var biggestNum = 0;
	
	//Put all numbers into array nums
	for (var i = 0; i < arr.length; i++) {
		nums.push(Number(arr[i]));
	}
	//Find sumOfDigits of every num in nums and compare against biggestSum
	for (var i = 0; i < arr.length; i++) {
		if (nums[i] < 0) {
			nums[i] *= -1;
		}

		if (isNaN(arr[i])) {
			console.log('undefined');
			break;
		}

		if (sumOfDigitsFun(nums[i]) > biggestSum) {
			biggestSum = sumOfDigitsFun(nums[i]);
			biggestNum = nums[i];
		}
	}

	//Print result
	if (biggestSum != 0) {
		console.log(biggestNum);
	}
}

function sumOfDigitsFun(num) {
	var sum = 0;

	while (num > 0) {
		sum += num % 10;
		num = Math.floor(num / 10);
	}
	return sum;
}



findLargestBySumOfDigits([5, 10, 15, 111]);
findLargestBySumOfDigits([33, 44, -99, 0, 20]);
findLargestBySumOfDigits(['hello']);