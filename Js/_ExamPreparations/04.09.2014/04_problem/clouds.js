function cloud(arr) {
	var inputs = [];
	var obj = {};
	for (var i = 0; i < arr.length; i++) {
		inputs[i] = arr[i].split(/\s+/g);
	}
	for (i = 0; i < inputs.length; i++) {
		var k = inputs[i][0];
		inputs[i][0] = inputs[i][1];
		inputs[i][1] = k;
	}
	inputs.sort();
	for (var i = 0; i < inputs.length; i++) {
		var key = inputs[i][0];
		if (obj[key] == undefined) {
			obj[key] = {
				'files': [],
				'memory': 0
			};
		}
		obj[key]['files'].push(inputs[i][1]);
		obj[key]['memory'] += parseFloat(inputs[i][2]);
	}
	for (var h in obj) {
		obj[h]['memory'] = obj[h]['memory'].toFixed(2);
	}
	console.log(JSON.stringify(obj));
}
cloud([
	"eclipse .tar.gz 198.00MB",
	"uTorrent .gyp 33.02MB",
	"nodeJS .gyp 14MB",
	"nakov-naked .jpeg 3MB",
	"gnuGPL .pdf 5.6MB",
	"skype .tar.gz 66MB",
	"selfie .jpeg 7.24MB",
	"myFiles .tar.gz 783MB"
]);