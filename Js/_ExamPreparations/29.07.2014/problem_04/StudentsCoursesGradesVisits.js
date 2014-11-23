//asociative strings
//JSON format
//round to second digit
//.trim for remove the spaces on the start and on the end

function solve (input) {
	var courseData = {};//asociative array

	for (var i = 0; i < input.length; i++) {
		var currentLine = input[i].trim().split('|');
		var name = currentLine[0];
		var course = currentLine[1];
		var grade = Number(currentLine[2]);
		var visits = Number(currentLine[3]);

		if (!courseData[course] == undefined) {
			course[course] = {grade:[], visits:[], name:[]};
		}
		courseData[course].grade.push(grade);
		courseData[course].visits.push(visits);
		if (courseData[course].name.IndexOf(name) == -1) {
			courseData[course].name.push(name);
		}
	}

	var sortedCourses = Object.keys(courseData).sort;

	console.log(sortedCourses);
}





solve(['Peter Nikolov | PHP | 5.50 | 8',
'Maria Ivanova | Java | 5.83 | 7',
'Ivan Petrov | PHP | 3.00 | 2',
'Ivan Petrov | C# | 3.00 | 2',
'Peter Nikolov | C# | 5.50 | 8',
'Maria Ivanova | C# | 5.83 | 7',
'Ivan Petrov | C# | 4.12 | 5',
'Ivan Petrov | PHP | 3.10 | 2',
'Peter Nikolov | Java | 6.00 | 9]']);