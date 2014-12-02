function getDivs() {
	var divs = getElementsByTagName('div');
	var ul = getElementsById('ul');
	for (var i in divs) {
		var li = document.createElement('li');
		var text = document.createTextNode(divs[i].innerText);
		li.appendChild(text);
		ul.appendChild(li);
	}
}