//to the stars
function solve (arr) {
	var firstLine = arr[0].split(' ');
	var secondLine = arr[1].split(' ');
	var thirdLine = arr[2].split(' ');
	var fourthLine = arr[3].split(' ');
	var fifthLine = arr[4].split(' ');

	var star1name = firstLine[0];
	var star1x = Number(firstLine[1]);
	var star1y = Number(firstLine[2]);
	var star2name = secondLine[0];
	var star2x = Number(secondLine[1]);
	var star2y = Number(secondLine[2]);
	var star3name = thirdLine[0];
	var star3x = Number(thirdLine[1]);
	var star3y = Number(thirdLine[2]);
	var normandyX = Number(fourthLine[0]);
	var normandyY = Number(fourthLine[1]);
	var turns = Number(fifthLine);


	for (var i = 0; i <= turns; i++) {
		if ((normandyX >= star1x-1 && normandyX <= star1x+1) && 
			(normandyY >= star1y-1 && normandyY <= star1y+1)) {
			console.log(star1name.toLowerCase());
		} else if((normandyX >= star2x-1 && normandyX <= star2x+1) && 
			(normandyY >= star2y-1 && normandyY <= star2y+1)){
			console.log(star2name.toLowerCase());
		} else if((normandyX >= star3x-1 && normandyX <= star3x+1) && 
			(normandyY >= star3y-1 && normandyY <= star3y+1)){
			console.log(star3name.toLowerCase());
		} else {
			console.log('space');
		}	
		normandyY++;
	}
}



// solve([
// 'Sirius 3 7',
// 'Alpha-Centauri 7 5',
// 'Gamma-Cygani 10 10',
// '8 1',
// '6'
// 	]);

solve([
'Terra-Nova 16 2',
'Perseus 2.6 4.8',
'Virgo 1.6 7',
'2 5',
'4'
	]);
