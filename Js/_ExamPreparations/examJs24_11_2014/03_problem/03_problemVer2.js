function solve (input) {

for (var i = 0; i < input.length; i++) {
	//probably replace charackters here
	var str = input[i];
	str = str.replace('%20', '');
	str = str.replace('+', '');
	var splitedLine = str.split('&');
	//going into splitedLine arr
	var obj = {};
	for (var j = 0; j < splitedLine.length ; j++) {
		var localRow = splitedLine[j];
		localRow = localRow.split('=');
		var name = localRow[0];
		var value = localRow[1];
		// console.log(name + '=[' + value + ']')
		if (!obj.name) {
			obj.name = [];
		};
		obj.name.push(value);
	}
	// console.log(obj);
	console.log(name + '=[' + obj.name.join(', ') + ']');

};


}









// solve([
// 'login=student&password=student'
// 	]);

// solve([
// 'field=value1&field=value2&field=value3',
// 'http://example.com/over/there?name=ferret'
// 	]);

solve([
// 'foo=%20foo&value=+val&foo+=5+%20+203',
'foo=poo%20&value=valley&dog=wow+',
// 'url=https://softuni.bg/trainings/coursesinstances/details/1070',
// 'https://softuni.bg/trainings.asp?trainer=nakov&course=oop&course=php'
	]);
