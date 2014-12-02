function solve(arr) {
	var results = {};

	for (var i = 0; i < arr.length; i++) {
		var row = arr[i].split(/\s+/g);
		var file = row[0];
		var extension = row[1];
		var memory = parseFloat(row[2]);

		if (!results[extension]) {
			results[extension] = {
				'files': [],
				'memory': 0
			}
		}

		results[extension].files.push(file);
		results[extension].memory.push(memory);

		for (var key in results) {
			results[key].memory = getAvg(results[key].memory);
			results[key].files.sort();
		}

	}
	console.log(JSON.stringify(results));
}

function getAvg(arr) {
	var sum = 0;
	for (var i = 0; i < arr.length; i++) {
		sum += arr[i];
	}
	return sum;
}



solve([
	"eclipse .tar.gz 198.00MB",
	"uTorrent .gyp 33.02MB",
	"nodeJS .gyp 14MB",
	"nakov-naked .jpeg 3MB",
	"gnuGPL .pdf 5.6MB",
	"skype .tar.gz 66MB",
	"selfie .jpeg 7.24MB",
	"myFiles .tar.gz 783MB"
]);