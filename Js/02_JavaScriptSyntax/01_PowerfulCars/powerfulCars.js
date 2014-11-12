function convert(kW) {
	var hp = kW / 0.745699872;
	return hp.toFixed(2)
}

//output
	console.log("70kw are " + convert(75) + "hp");
	console.log("150kw are " + convert(150) + "hp");
	console.log("1000kw are " + convert(1000) + "hp");