function sortStudents(arr) {
	var input;
	var courseData = {};
	var output = {};

	for (var i = 0; i < arr.length; i += 1) {
		input = arr[i].split('|');
		var student = input[0].trim();
		var course = input[1].trim();
		var score = Number(input[2].trim());
		var visits = Number(input[3].trim());
		
		if (!courseData[course]) {
			courseData[course] = {
				score: [],
				visits: [],
				students: []
			};
		}
		courseData[course].score.push(score);
		courseData[course].visits.push(visits);
		if (courseData[course].students.indexOf(student) == -1) {
			courseData[course].students.push(student);
		}
	}
	var sortedCourses = Object.keys(courseData).sort();
	for (i in sortedCourses) {
		var courseName = sortedCourses[i];
		var courseInfo = {
			avgGrade: getAvg(courseData[courseName].score),
			avgVisits: getAvg(courseData[courseName].visits),
			students: courseData[courseName].students.sort()
		};
		output[courseName] = courseInfo;
	}
	console.log(JSON.stringify(output));

	function getAvg(obj) {
		var sum = 0;
		for (var i = 0; i < obj.length; i += 1) {
			sum += obj[i];
		}
		var avgSum = sum / obj.length;
		avgSum = Number(avgSum.toFixed(2));
		return avgSum;
	}
}



// sortStudents(['Peter Nikolov | PHP | 5.50 | 8',
// 	'Maria Ivanova | Java | 5.83 | 7',
// 	'Ivan Petrov | PHP | 3.00 | 2',
// 	'Ivan Petrov | C# | 3.00 | 2',
// 	'Peter Nikolov | C# | 5.50 | 8',
// 	'Maria Ivanova | C# | 5.83 | 7',
// 	'Ivan Petrov | C# | 4.12 | 5',
// 	'Ivan Petrov | PHP | 3.10 | 2',
// 	'Peter Nikolov | Java | 6.00 | 9]'
// ]);