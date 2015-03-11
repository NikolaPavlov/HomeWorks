function add(a) {
	var sum = a;

	function inside(b) {
		sum += b;
		return inside;
	}
	inside.toString = function() {
		return sum;
	};
	return inside;
}

console.log(+add(1));
var addTwo = add(2);
console.log(+addTwo(3));