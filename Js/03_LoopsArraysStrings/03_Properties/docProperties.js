function displayProperties() {
	var sortedProp = [];
	for (var word in document) {
		sortedProp.push(word);
	}
	sortedProp.sort();
	for (var word in sortedProp) {
		console.log(sortedProp[word]);
	}
}
displayProperties();