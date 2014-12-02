//field = value, filed is separate from value with '=';
//series of pairs are separeted by '&';

//split symbol '&'

function solve(input) {
	//getting the input 
	for (var i = 0; i < input.length; i++) {
		var str = input[i].replace(/[^a-zA-Z0-9\/:.?+%&=]/g, '');
		// str = str.replace(/%20|\+/g, '');
		var splitedLine = str.split('&');
		//iterate over splited value pairs
		for (var j = 0; j < splitedLine.length; j++) {
			var associativeArr = {};
			var pear = splitedLine[j].split('=');
			var arrayName = pear[0];
			var arrayValue = pear[1];
			if (!associativeArr[arrayName]) {
				associativeArr[arrayName] = {
					value: []
				};
			}
			associativeArr[arrayName].value.push(arrayValue);


			
		};

	// console.log(associativeArr);
	console.log(arrayName + '=[' +associativeArr[arrayName].value + ']')
	}
}






// solve([
// 'login=student&password=student'
// 	]);

solve([
// 'field=value1&field=value2&field=value3',
// 'http://example.com/over/there?name=ferret'
	]);

solve([
// 'foo=%20foo&value=+val&foo+=5+%20+203',
'foo=poo%20&value=valley&dog=wow+',
// 'url=https://softuni.bg/trainings/coursesinstances/details/1070',
// 'https://softuni.bg/trainings.asp?trainer=nakov&course=oop&course=php'
	]);
