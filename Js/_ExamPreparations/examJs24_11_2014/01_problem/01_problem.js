// 90pts from 100pts
//before or on 25.05.1973 are haters
//biggest hater oldest person born before 25.05.1973
//after 25.05.1973 are fans
//biggest fan is youngest person born after 25.05.1973
//exclude before 01.01.1900 and after 01.01.2015

//-GO- Kal4o e pedal!!!
function solve(arr) {
	//create target date
	var targetDateStr = '25.05.1973';
	var targetDateParts = targetDateStr.split('.');
	var targetDate = new Date(targetDateParts[2], (targetDateParts[1] - 1), targetDateParts[0]);
	//create maxAllowDate
	var maxAllowDateStr = '01.01.2015';
	var maxAllowDateParts = maxAllowDateStr.split('.');
	var maxAllowDate = new Date(maxAllowDateParts[2], (maxAllowDateParts[1] - 1), maxAllowDateParts[0]);
	//create minAllowDate
	var minAllowDateStr = '01.01.1900';
	var minAllowDateParts = minAllowDateStr.split('.');
	var minAllowDate = new Date(minAllowDateParts[2], (minAllowDateParts[1] - 1), minAllowDateParts[0]);

	//create arrays for haters and fans
	var haters = [];
	var fans = [];

	for (var i = 0; i < arr.length; i++) {
		var strDate = arr[i];
		var dateParts = strDate.split('.');
		var date = new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
		// removing out of range dates
		if (date <= targetDate && date > minAllowDate) {
			haters.push(date);
		} else if (date > targetDate && date < maxAllowDate) {
			fans.push(date);
		}
		//sorting the haters and fans
		haters.sort(function(a, b) {
			return a.getTime() - b.getTime()
		});
		fans.sort(function(a, b) {
			return a.getTime() - b.getTime()
		});
	}

	//format the output
	if (haters.length == 0 && fans.length == 0) {
		console.log('No result');
	} else {
		if (fans.length > 0) {
			console.log('The biggest fan of ewoks was born on ' + fans[fans.length - 1].toDateString());
		};

		if (haters.length > 0) {
			console.log('The biggest hater of ewoks was born on ' + haters[0].toDateString());
		};
	}
}



// solve([
// '22.03.2014',//months and days are changed
// '17.05.1933',
// '10.10.1954',
// '11.11.1950',
// '11.11.2222',
// // '11.11.1932'
// 	]);

// solve([
// 	'22.03.2000'
// ]);

// solve([
// '22.03.1700',
// '01.07.2020'
// 	]);