var time = new Date();

var hour = time.getHours();
var minutes = time.getMinutes();

if (minutes < 10) {
	minutes = "0" + minutes;
};

console.log(hour + ":" + minutes);