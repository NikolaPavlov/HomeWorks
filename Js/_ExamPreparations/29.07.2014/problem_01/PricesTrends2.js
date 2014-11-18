function trends(arrStr) {
	var trend = '';
	console.log('<table>');
	console.log('<tr><th>Price</th><th>Trend</th></tr>');
	console.log(<'tr><td>' + + '</td><td><img src="fixed.png"/></td></tr>');

	for (var i = 0; i < arrStr.length; i++) {
		num = parseFloat(arrStr[i]);

		if (Number(arrStr[i]) == Number(arrStr[i + 1])) {
			trend = 'img src=\"fixed.png';
		} else if (Number(arrStr[i]) < Number(arrStr[i + 1])) {
			trend = "img src=\"up.png";
		} else if (Number(arrStr[i]) > Number(arrStr[i + 1])) {
			trend = "img src=\"down.png";
		}
		printRow(num, trend);
	} 
	console.log('</table>');
}

function printRow (num, trend) {
	console.log('<tr><td>' + num + '</td><td>' + trend + '/></td></tr>');
}



//tests
trends(['50', '60']);
trends(['134', '3424234', '232', '341234']);
// trends(['36.333'
// '36.5',
// '37.019',
// '35.4',
// '35',
// '35.001',
// '36.225']);