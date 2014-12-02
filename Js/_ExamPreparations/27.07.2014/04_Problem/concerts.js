function solve (arr) {
	var concertInfo = {};

	//taking the input
	for(var i in input) {
		var tokens = input[i].split('|');
		var band = tokens[0].trim();
		var town = tokens[1].trim();
		var date = tokens[2].trim();
		var venue = tokend[3].trim();

		if (!concertInfo[town]) {
			concertInfo[town] = {};
		}
		if (!concertInfo[town].venue) {
			consoleInfo[town].venue = [];
		}
		if (concertInfo[town].venue.indexOf(band) == -1) {
			concertInfo[town.venue.push(band)];
		}

	//sort the concertInfo structure
	

	}
}