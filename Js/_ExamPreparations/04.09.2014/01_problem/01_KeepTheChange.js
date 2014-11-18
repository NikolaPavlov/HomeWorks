function calcTip (arr) {
	var bill = Number(arr[0]);
	var mood = arr[1];
	var tip = 0;

	if (mood == "happy") {
		tip = 0.1 * bill;
	}

	else if (mood == "married") {
		tip = 0.005 * bill;
	}

	else if (mood == "drunk") {
		var drunkTip = 0.15 * bill;
		var pow = drunkTip.toString().split("");
		tip = Math.pow(drunkTip, pow[0]);
	}

	else {
		tip = 0.05 * bill;
	}
	console.log(tip.toFixed(2));
	// console.log(typeof(bill));
	// console.log(typeof(tip));
	// console.log("bill" + " " + bill);
	// console.log("tip" + " " + tip);
}


calcTip([1230.83, "drunk"]);
// calcTip([120.44, 'happy']);   
// calcTip([79.33, 'bored']);
