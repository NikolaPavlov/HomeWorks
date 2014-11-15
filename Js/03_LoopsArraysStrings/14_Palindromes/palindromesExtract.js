//function for finding if the word is palindrome
function isPalindrome (word) {
	var reverseWord = word.split("").reverse().join("");
	if (reverseWord === word) {
		return true;
	} else {
		return false;
	}
}
// main function
function findPalindromes (str) {
	
	var words = str.toLowerCase().split(/[ .,!?:;%()]+/);
	var results = [];

	for (var i = 0; i < words.length - 1; i++) {
		if (isPalindrome(words[i])) {
			results.push(words[i]);
		};
	};
	console.log(results);
}

findPalindromes('There is a man, his name was Bob.');