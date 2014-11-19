function tetris (arr) {
	var gameField = [];
	var figuresCount = {'I':0, 'L':0, 'J':0, 'O':0, 'Z':0, 'S':0, 'T':0};

	//loading the input
	for (var i = 0; i < arr.length; i++) {
		gameField.push(arr[i].split(''));
	};

	console.log(gameField);
}






//test
tetris(['--o--o-', '--oo-oo', 'ooo-oo-', '-ooooo-', '---oo--']);