function stars (arr) {
	//split the 5 lines of input 
	var firstLine = arr[0].split(/\s+/g);
	var secondLine = arr[1].split(/\s+/g);
	var thirdLine = arr[2].split(/\s+/g);
	var fourLine = arr[3].split(/\s+/g);
	var fiveLine = arr[4].split(/\s+/g);

	var firstSystemX = Number(firsLine[1]);
	var firstSystemY = Number(firstLine[2]);

	console.log(firstSystemX);
	console.log(firstSystemY);

}



//input
stars(['Sirius 3 7
Alpha-Centauri 7 5
Gamma-Cygni 10 10
8 1
6']);