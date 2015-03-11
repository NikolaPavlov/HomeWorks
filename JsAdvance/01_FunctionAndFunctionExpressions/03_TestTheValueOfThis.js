function testContest () {
	console.log(this);
}

function insideAnotherFunc () {
	testContest();
}

var obj = new testContest();




// testContest();
// insideAnotherFunc();
console.log(obj);
