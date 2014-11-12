function reverseString (str) {
	var strArr = str.split("");
	strArr = strArr.reverse().join("");
	console.log(strArr);
}

reverseString("sample");
reverseString("softUni");
reverseString("java script");