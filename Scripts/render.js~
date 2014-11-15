var canvas = document.getElementsByTagName('canvas')[0];
//declaring ctx for draw on the canvas
var ctx = canvas.getContext('2d');
var width = 300;
var height = 600;
var cols = 10;
var rows = 20;
// block element dimensions: 30width*30hight
var blockWidth = width / cols;
var blockHeight = height / rows;

function drawBlock(x, y,) {
	ctx.fillRect(blockWidth * x, blockHeight * y, blockWidth - 1, blockHeight - 1);
	ctx.strokeRect(blockWidth * x, blockHeight * y, blockWidth - 1, blockHeight - 1);
}

function render() {
	ctx.fillStyle = 'green';
	ctx.strokeStyle = 'black';
	for (var x = 0; x < cols; ++x) {
		for (var y = 0; y < rows; ++y) {
			if (board[y][x]) {
				drawBlock(x, y);
			};
		};
	};

	ctx.fillStyle = 'red';
	ctx.strokeStyle = 'black';
	for (var y = 0; y < 4; ++y) {
		for (var x = 0; x < 4; ++x) {
			if (current[y][x]) {
				drowBlock(currentX + x,currentY + y);
			};
		};
	};
}

//refresh rate for render function
setInterval(render, 30);