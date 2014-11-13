function findMaxSequence(arr) {
	var localCounter = 1;
	var maxCounter = 1;
	var startIndex;

	for (var i = 1; i < arr.length; i++) {
		if (arr[i] > arr[i - 1]) {
			localCounter++;
			if (localCounter > maxCounter) {
				maxCounter = localCounter;
				startIndex = i - maxCounter + 1;
			}
		} else {
			localCounter = 1;
		}
	}
	if (maxCounter === 1) {
		console.log("no");
	} else {
		console.log(arr.slice(startIndex, startIndex + maxCounter));
	}
}

findMaxSequence([3, 2, 3, 4, 2, 2, 4]);
findMaxSequence([3, 5, 4, 6, 1, 2, 3, 6, 10, 32]);
findMaxSequence([3, 2, 1]);