function printArgsInfo () {
	for(var i in arguments){
		console.log(arguments[i] + " (" + typeof arguments[i] + ")");
	}	
}

// printArgsInfo.call();
// printArgsInfo.call(2, 3, 2.5, -110.5564, false);
// console.log("------------------");

printArgsInfo.call();
printArgsInfo.call(2, 3, 2.5, -110.5564, false);
console.log("------------");
printArgsInfo.apply();
printArgsInfo.apply(this, [2, 3, 2.5, -110.5564, false]);


