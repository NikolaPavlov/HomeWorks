function replaceSpaces (str) {
	var strArr = str;

	strArr = strArr.replace( ("/\s+/g"), "&nbsp;");
	console.log(strArr);
}

replaceSpaces("But you were living in another world tryin' to get your message through");