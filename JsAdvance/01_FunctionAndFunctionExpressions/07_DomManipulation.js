function birdEvent() {
	return alert("Im Bird");
}
var domModule = (function() {
	return {
		appendChild: function(element, child) {
			var parentElement = document.querySelector(child);
			var childElement = element;
			if (parentElement.nodeType === 1) {
				parentElement.appendChild(childElement);
			}
		},
		removeChild: function(element, child) {
			var parentElement = document.querySelector(child);
			var childElement = document.querySelector(element);
			if (parentElement && childElement) {
				parentElement.removeChild(childElement);
			}
		},
		addHandler: function(element, eventType, eventHandler) {
			var i,
				len;
			var elements = document.querySelectorAll(element);
			for (i = 0, len = elements.length; i < len; i += 1) {
				elements[i].addEventListener(eventType, eventHandler);
			}
		},
		retrieveElements: function(selector) {
			return document.querySelectorAll(selector);
		}
	};
}());