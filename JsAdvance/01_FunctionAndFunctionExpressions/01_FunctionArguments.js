function printArgsInfo () {
	for(var i in arguments){
		console.log(arguments[i] + " (" + typeof arguments[i] + ")");
	}	
}

printArgsInfo(2, 3, 2.5, -110.5564, false);
console.log("-------------");
printArgsInfo([[1, [2, [3, [4, 5]]]], ["string", "array"]]);