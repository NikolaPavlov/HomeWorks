function numInToHex (str) {
	var arr = str.split(/\D+/g);
	console.log(arr);
	arr.pop();
	var answersArr = [];


	for (var i = 0; i <= arr.length; i++) {
		arr[i] = Number(arr[i]).toString(16).toUpperCase();
		while (arr[i].length < 4) {
			arr[i] ='0' + arr[i];
		};
		arr[i] = '0x' + arr[i];
	};
	arr.join('-');
	console.log(arr);
}

// numInToHex('5tffwj(//*7837xzc2---34rlxXP%$');
numInToHex('482vMWo(*&^%$213;k!@41341((()&^>><///]42344p;e312');
// numInToHex('20');


//learn foreach in javascript
//learn concatenation in javascript
