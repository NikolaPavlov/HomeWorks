function variablesTypes(arr) {
	var name = arr[0];
	var age = arr[1];
	var isMale = arr[2];
	var food = new Array();

	for (var i = 3; i < arr.length - 1; i++) {
		arr[i - 3] = arr[i];
	}

	return "My name is: " + name + " //type is " + typeof(name) + "\nMy age: " +
		age + " //type is " + typeof(age) + "\nI am male: " + isMale + " //type is " + typeof(isMale) + "\nMy favourite foods are: " +
		food + " //type is " + typeof(food);

}

//output
console.log(variablesTypes(['Pesho', 22, true, ['fries', 'banana', 'cake']]));