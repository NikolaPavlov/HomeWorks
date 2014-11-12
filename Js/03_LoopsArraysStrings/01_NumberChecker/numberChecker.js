function printNumbers(num) {
	var result = [];

	if (num <= 1) {
		console.log("no");
	} else {

		for (var i = 1; i <= num; i++) {
			if (i % 4 !== 0 && i % 5 !== 0) {
				result.push(i);
			};
		};

		console.log(result.join(", "));
	};
};


printNumbers(20);
printNumbers(-5);
printNumbers(13);