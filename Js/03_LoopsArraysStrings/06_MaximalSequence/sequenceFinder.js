function findMaxSequence(arr) {
	var localSequence = 1;
	var localElement = 0;
	var maxSequence = 1;
	var maxElement = arr[0];

//logic aka The Magic
	for (var i = 0; i < arr.length - 1; i++) {
		if (arr[i] === arr[i - 1]) {
			localSequence++;
			localElement = arr[i];
			if (localSequence >= maxSequence) {
				maxSequence = localSequence;
				maxElement = localElement;
			}
		} else {
			localSequence = 1;
		}
	}

// creating the answer
	var results = [];
	for (var i = 0; i < maxSequence; i++) {
		results.push(maxElement);
	}
//printing the answer
	console.log(results);

}

//tests
findMaxSequence([2, 1, 1, 2, 3, 3, 2, 2, 2, 1]);
findMaxSequence(['happy']);
findMaxSequence([2, 'qwe', 'qwe', 3, 3, '3']);

//gg wp