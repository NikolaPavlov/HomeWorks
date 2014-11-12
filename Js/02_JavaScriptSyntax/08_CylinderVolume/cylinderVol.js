function calcCylinderVol(arr) {
	var radius = arr[0];
	var height = arr[1];
	var volume = Math.PI * radius * radius * height;
	return volume.toFixed(3);
}

//output
console.log(calcCylinderVol([2, 4]));
console.log(calcCylinderVol([5, 8]));
console.log(calcCylinderVol([12, 3]));