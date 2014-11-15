var cols = 10;
var rows = 20;
var board = [];
var current, currentX, currentY;
//shapes variables 7 types
var shapes = [
    [ 1, 1, 1, 1 ],
    [ 1, 1, 1, 0,
      1 ],
    [ 1, 1, 1, 0,
      0, 0, 1 ],
    [ 1, 1, 0, 0,
      1, 1 ],
    [ 1, 1, 0, 0,
      0, 1, 1 ],
    [ 0, 1, 1, 0,
      1, 1 ],
    [ 0, 1, 0, 0,
      1, 1, 1 ]
];

function newShape () {
	var shape = shapes[Math.floor(Math.random() * shapes.length)];

	current = [];
		for (var y = 0; y < 4; ++y) {
			current[y] = [];
			for (var x = 0; x < 4; ++x) {
				var i = 4 * y + x;
				if (typeof shape[i] != 'undefined') {
					current[y][x] = shape[i];
				}
				else {
					current[y][x] = 0;
				}
			};
		};
	currentX = 5;
	currentY = 0;
}

function init  () {
	for (var y = 0; y < rows; ++y) {
		board[y] = [];
		for (var x = 0; x < cols; ++x) {
			board[y][x] = 0;
		};
	};
}

function tick () {
	// body...
}

init();
newShape();