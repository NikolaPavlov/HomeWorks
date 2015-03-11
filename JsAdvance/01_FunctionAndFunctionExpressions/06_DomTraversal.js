//Paste code in Browser Console!!!!!

function traverse(selector) {

	var currElement = document.querySelector(selector);
	traverseChildElements(currElement, '');

	function traverseChildElements(currElement, spacing) {
		var i,
			len,
			child;

		spacing = spacing || ' ';
		var elementId = currElement.getAttribute('id');
		var elementClass = currElement.getAttribute('class');
		var elementName = currElement.nodeName;
		var output = spacing + elementName.toLowerCase() + ':';

		if (elementId !== null) {
			output += ' id="' + elementId + '"';
		}

		if (elementClass !== null) {
			output += ' class="' + elementClass + '"';
		}

		console.log(output);
		for (i = 0, len = currElement.childNodes.length; i < len; i += 1) {
			child = currElement.childNodes[i];
			if (child.nodeType === 1) {
				traverseChildElements(child, spacing + ' ');
			}
		}
	}
}

var selector = ".birds";
traverse(selector);