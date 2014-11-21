
function reg (str) {
	var str = 'This is some txt MF 84545, 342- 233 !'
	var regex =/\d+/g;
	var match = regex.exec(str);
	console.log(match);
}

reg();