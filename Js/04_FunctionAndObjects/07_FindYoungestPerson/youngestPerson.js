function findYoungestPerson (persons) {
	var minAge = Number.MAX_VALUE;
	var minAgeName = '';
	var minAgeLastName = '';
	for (var i = 0; i < persons.length; i++) {
		var age = Number(persons[i].age);
		if (age < minAge) {
			minAge = age;
			minAgeName = persons[i].firstname;
			minAgeLastName = persons[i].lastname;
		}
	}
	console.log('The younges person is ' + minAgeName + ' ' + minAgeLastName);
}


//input test
var persons = [
  { firstname : 'George', lastname: 'Kolev', age: 32}, 
  { firstname : 'Bay', lastname: 'Ivan', age: 81},
  { firstname : 'Baba', lastname: 'Ginka', age: 40}];


findYoungestPerson(persons);