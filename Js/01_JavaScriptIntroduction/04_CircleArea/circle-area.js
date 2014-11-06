function circleArea () {
	var radius = document.getElementById("radius").value;
	var area = Math.PI * radius * radius;
	var result = document.getElementById("sum") ;
	result.innerHTML = "";
	result.innerHTML = "r = " + radius + "; area = " + area;
}