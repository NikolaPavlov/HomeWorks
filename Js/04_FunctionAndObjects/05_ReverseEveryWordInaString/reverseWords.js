function reverseWordsInString (str) {
	var words = str.split(/\s+/g);

	for (var i in words) {
		words[i] = words[i].split('').reverse().join('');
	}

	console.log(words.join(' '));
}


reverseWordsInString('Hello, how are you.');
reverseWordsInString('Life is pretty good, isn’t it?');