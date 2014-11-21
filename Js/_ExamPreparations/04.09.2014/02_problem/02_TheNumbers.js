function solve(arr) {
	var numbers = arr[0].split(/D+/g);
	// /\D+/
	var result = [];
	for (var i = 0; i < numbers.length; i += 1) {
		if (numbers[i] != '') {
			var temp = parseInt(numbers[i]).toString(16).toUpperCase();
			while (temp.length < 4) {
				temp = '0' + temp;
			}
			temp = '0x' + temp;
			result.push(temp);
		}
	}
	console.log(result.join('-'));
}

solve('482vMWo(*&^%$213;k!@41341((()&^>><///]42344p;e312');
// solve('5tffwj(//*7837xzc2---34rlxXP%$”.');