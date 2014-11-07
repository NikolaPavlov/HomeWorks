//random function 
function randomNumber () {
	var randomNum = Math.floor(Math.random()* 4);
	return randomNum;
}

//main function
function soothsayer(numsArr, langsArr, citiesArr, carsArr) {
	 var result;
	result = [];
	result[0] = numsArr[randomNumber()];
	result[1] = langsArr[randomNumber()];
	result[2] = citiesArr[randomNumber()];
	result[3] = carsArr[randomNumber()];

	console.log("You will work " + result[0] + " years on " + result[1] + 
	". You will live in " + result[2] +
	" and drive " + result[3] + ".");
}

//input
soothsayer([3, 5, 2, 7, 9],
['Java', 'Python', 'C#', 'JavaScript', 'Ruby'],
['Silicon Valley', 'London', 'Las Vegas', 'Paris','Sofia'],
['BMW', 'Audi', 'Lada', 'Skoda', 'Opel']);