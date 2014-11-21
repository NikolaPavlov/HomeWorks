function matrixRotation () {
	
var grid = [
  [0,0], [0,1], [0,2], [0,3], [0,4],
  [1,0], [1,1], [1,2], [1,3], [1,4],
  [2,0], [2,1], [2,2], [2,3], [2,4],
  [3,0], [3,1], [3,2], [3,3], [3,4],
  [4,0], [4,1], [4,2], [4,3], [4,4]
]; 

var side = Math.sqrt(grid.length);

var rotate = function(d,i){
       // return [Math.abs(i % side - side+1), Math.floor(i/side)]
       // console.log([Math.abs(i % side - side+1), Math.floor(i/side)]);
       grid = grid.map(rotate);
       console.log(grid);
    }
}

matrixRotation();