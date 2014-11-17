var cols = 10;
var rows = 16;
var board = [];
var lose;
var interval;
var score = 0;
var current; // current moving shape
var currentX, currentY; // position of current shape
//shapes variables 7 types
var shapes = [
    [1, 1, 1, 1],
    [1, 1, 1, 0,
      1],
    [1, 1, 1, 0,
      0, 0, 1],
    [1, 1, 0, 0,
      1, 1],
    [1, 1, 0, 0,
      0, 1, 1],
    [0, 1, 1, 0,
      1, 1],
    [0, 1, 0, 0,
      1, 1, 1]
];
var colors = [
    'black', 'magenta', 'pink', 'yellow', 'red', 'green', 'purple'
];


// creates a new 4x4 shape in global variable 'current'
// 4x4 so as to cover the size when the shape is rotated
function newShape() {
    var id = Math.floor(Math.random() * shapes.length);
    var shape = shapes[id]; // maintain id for color filling

    current = [];
    for (var y = 0; y < 4; ++y) {
        current[y] = [];
        for (var x = 0; x < 4; ++x) {
            var i = 4 * y + x;
            if (typeof shape[i] != 'undefined' && shape[i]) {
                current[y][x] = id + 1;
            }
            else {
                current[y][x] = 0;
            }
        }
    }
    // position where the shape will evolve
    currentX = Math.floor(Math.random() * (cols - 3)); //random spawn position
    currentY = 0;
}

// clears the board
function init() {
    for (var y = 0; y < rows; ++y) {
        board[y] = [];
        for (var x = 0; x < cols; ++x) {
            board[y][x] = 0;
        }
    }
}

// keep the element moving down, creating new shapes and clearing lines
function tick() {
    if (valid(0, 1)) {
        ++currentY;
    }
        // if the element settled
    else {
        freeze();
        clearLines();

        if (lose) {
            alert("You Lose!");
            location.reload();
            //newGame();
            return false;
        }
        newShape();
    }
}

// stop shape at its position and fix it to board
function freeze() {
    for (var y = 0; y < 4; ++y) {
        for (var x = 0; x < 4; ++x) {
            if (current[y][x]) {
                board[y + currentY][x + currentX] = current[y][x];
            }
        }
    }
}

// returns rotates the rotated shape 'current' perpendicularly anticlockwise
function rotate(current) {
    var newCurrent = [];
    for (var y = 0; y < 4; ++y) {
        newCurrent[y] = [];
        for (var x = 0; x < 4; ++x) {
            newCurrent[y][x] = current[3 - x][y];
        }
    }

    return newCurrent;
}


// check if any lines are filled and clear them
function clearLines() {

    for (var y = rows - 1; y >= 0; --y) {
        var rowFilled = true;

        for (var x = 0; x < cols; ++x) {
            if (board[y][x] == 0) {
                rowFilled = false;
                break;
            }
        }
        if (rowFilled) {
            //function for point
            score = addScore(score);
            document.getElementById("score").innerHTML = score;
            
            

            for (var yy = y; yy > 0; --yy) {
                for (var x = 0; x < cols; ++x) {
                    board[yy][x] = board[yy - 1][x];

                }
            }
            ++y;
        }
    }
}
function addScore(num) {
    num += 100;
    return num;
}


function keyPress(key) {
    switch (key) {
        case 'left':
            if (valid(-1)) {
                --currentX;
            }
            break;
        case 'right':
            if (valid(1)) {
                ++currentX;
            }
            break;
        case 'down':
            if (valid(0, 1)) {
                ++currentY;
            }
            break;
        case 'rotate':
            var rotated = rotate(current);
            if (valid(0, 0, rotated)) {
                current = rotated;
            }
            break;

        case 'esc':
            lose = true;
            if (lose) {
                alert("You Lose!");
                location.reload();
            }

        case 'pause':
            alert("Pause");
    }
}

// checks if the resulting position of current shape will be feasible
function valid(offsetX, offsetY, newCurrent) {
    offsetX = offsetX || 0;
    offsetY = offsetY || 0;
    offsetX = currentX + offsetX;
    offsetY = currentY + offsetY;
    newCurrent = newCurrent || current;



    for (var y = 0; y < 4; ++y) {
        for (var x = 0; x < 4; ++x) {
            if (newCurrent[y][x]) {
                if (typeof board[y + offsetY] == 'undefined'
                  || typeof board[y + offsetY][x + offsetX] == 'undefined'
                  || board[y + offsetY][x + offsetX]
                  || x + offsetX < 0
                  || y + offsetY >= rows
                  || x + offsetX >= cols) {
                    if (offsetY == 1) lose = true; // lose if the current shape at the top row when checked
                    return false;
                }
            }
        }
    }
    return true;
}

function newGame() {
    clearInterval(interval);
    init();
    newShape();
    lose = false;
    score = 0;
    interval = setInterval(tick, 500);
}


//newGame();

