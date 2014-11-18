function trends(arrStr) {
		var trend = '';
		var num1 = Number(arrStr[0]);
		var num2 = Number(arrStr[1]);

		console.log('<table>');
		console.log('<tr><th>Price</th><th>Trend</th></tr>'); 
		console.log('<tr><td>' + num1 + '</td><td>img src=\"fixed.png</td></tr>');

			for (var i = 1; i < arrStr.length; i++) {
				if (Number(arrStr[i]) == Number(arrStr[i + 1])) {
					trend = 'img src=\"fixed.png';
				} else if (Number(arrStr[i]) < Number(arrStr[i + 1])) {
					trend = "img src=\"up.png";
				} else if (Number(arrStr[i]) > Number(arrStr[i + 1])) {
					trend = "img src=\"down.png";
				}
				printRow(Number(arrStr[i]), trend);
			}
			console.log('</table>');
		}

function printRow (num, trend) {
	console.log('<tr><td>' + num + '</td><td>' + trend + '/></td></tr>');
}

// trends(['50', '60']);
trends(['36.333'
'36.5',
'37.019',
'35.4',
'35',
'35.001',
'36.225']);