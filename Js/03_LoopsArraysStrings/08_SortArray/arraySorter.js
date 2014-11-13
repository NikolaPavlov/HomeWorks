function sortArray(arr) {
	arr.sort(orderBy);
	console.log(arr.join(", "));
}

function orderBy(firstNumber, secondNumber) {
	return firstNumber - secondNumber;
}
sortArray([5, 4, 3, 2, 1]);
sortArray([12, 12, 50, 2, 6, 22, 51, 712, 6, 3, 3]);