function inputCheck() {
	var input = document.getElementById('inputText');
	var inputValue = input.value;
	var isNumber = /^\d+$/.test(inputValue);
	if (!isNumber) {
		inputText.style.backgroundColor = 'red';
		inputText.value = inputValue.substr(0, inputValue.length - 1);
		setTimeout(function(){
			inputText.style.backgroundColor = 'white';
		}, 500);
	};
}