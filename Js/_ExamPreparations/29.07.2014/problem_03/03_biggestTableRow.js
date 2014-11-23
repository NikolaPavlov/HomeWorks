
function biggestRowSum (arrStr) {
	// var regex = /\d+\.\d+|-/g;
	var regex = /\-?[\d\.]+/g;

	var maxSum = Number.MIN_VALUE;
	var numsAsString = '';

	
	for (var i = 2; i < arrStr.length - 1; i++) {
		var sum = 0;
		var nums = arrStr[i].match(regex);
		var numsRightSide = [];
		for (var j = 0; j < 3; j++) {		
			if (nums[j] != '-') {
				sum += Number(nums[j]);
				numsRightSide.push(nums[j]);
			}
			if (sum > maxSum) {
				maxSum = sum;
				numsAsString = maxSum + ' = ' + numsRightSide.join(' + ');
			}
		}
	}
	if (maxSum == Number.MIN_VALUE) {
		console.log('no data');
	} else {
		console.log(numsAsString);
	}
}












// biggestRowSum(['<table>',
// '<tr><th>Town</th><th>Store1</th><th>Store2</th><th>Store3</th></tr>',
// '<tr><td>Sofia</td><td>26.2</td><td>8.20</td><td>-</td></tr>',
// '<tr><td>Varna</td><td>11.2</td><td>18.00</td><td>36.10</td></tr>',
// '<tr><td>Plovdiv</td><td>17.2</td><td>12.3</td><td>6.4</td></tr>',
// '<tr><td>Bourgas</td><td>-</td><td>24.3</td><td>-</td></tr>',
// '</table>']);

biggestRowSum(['<table>',
'<tr><th>Town</th><th>Store1</th><th>Store2</th><th>Store3</th></tr>',
'<tr><td>Sofia</td><td></td><td>8.20</td><td>-</td></tr>',
'<tr><td>Varna</td><td>11.2</td><td>18.00</td><td>36.10</td></tr>',
'<tr><td>Plovdiv</td><td>17.2</td><td>12.3</td><td>6.4</td></tr>',
'<tr><td>Bourgas</td><td>-</td><td>3000.3</td><td>-</td></tr>',
'</table>']);

