// need fix for multipale vale with same value ... Weakkkkkkk... Some shitty dot TOO !!!
function findMostFreqWord (str) {
	var strArr = str.split(" ");
	var counter = 1;
	var maxCounter = 1;
	var word = strArr[0];

	for (var i = 0; i < strArr.length - 1; i++) {
		for (var j = i + 1; j < strArr.length; j++) {
			if (strArr[i] === strArr[j]) {
				counter++;
				word = strArr[i];
			}
			if (counter > maxCounter) {
				maxCounter = counter;
			}
		}
		counter = 1;
	}
	console.log(word + " -> " + maxCounter + "times");
}

findMostFreqWord('in the middle of the night');
findMostFreqWord('Welcome to SoftUni. Welcome to Java. Welcome everyone.');
findMostFreqWord('Hello my friend, hello my darling. Come on, come here. Welcome, welcome darling.');