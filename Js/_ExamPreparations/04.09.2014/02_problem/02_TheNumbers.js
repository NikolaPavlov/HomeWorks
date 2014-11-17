//how to remove first and second element from arr 
function trim (arr) {
	var nums = arr.split(/\D+/g);
	// arr.splice(0, 1);
	// arr.splice(arr.length - 1, arr.length);

	for (var i = 0; i < nums.length; i++) {
		nums[i] = Number(nums[i]).toString(16);	
	}

	console.log(nums);
}

trim('[5tffwj(//*7837xzc2---34rlxXP%$]');