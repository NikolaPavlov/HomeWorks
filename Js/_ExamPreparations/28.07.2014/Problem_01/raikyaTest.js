//loading the array between 2 nums

function arrLoading(argument) {
	var num1 = 5;
	var num2 = 8;
	var arr = [];

	for (var i = num1; i <= num2; i++) {
		arr.push(i);
	};

	console.log(typeof(arr[2]));
}

arrLoading();