function solve(arr) {
	var start = Number(arr[0]);
	var end = Number(arr[1]);
	var nums = [];
	var pattern = /(\d{2})\d*\1/g;

	//buileding array of numbers from start to end 
	for (var i = start; i <= end; i++) {
		var localNum = i;
		nums.push(localNum);
	}

	//main resolve
	console.log('<ul>');

	for (var i = 0; i < nums.length; i++) {
		if (isRakiyaNumber(nums[i])) {
			console.log('<li><span class=\'rakiya\'>' + nums[i] + '</span><a href="view.php?id='+ nums[i] + '">View</a></li>');
		} else {
			console.log('<li><span class=\'num\'>' + nums[i] + '</span></li>');
		}
	}
	console.log('</ul>');
}

//function for checking the individual number
function isRakiyaNumber (number) {
	var pattern = /(\d{2})\d*\1/g;
	
	if ((number.toString()).match(pattern)) {
		return true;
	} else {
		return false;
	}
}

// solve(['5', '8']);
// solve(['11210', '11215']);
solve([55555, 55560]);