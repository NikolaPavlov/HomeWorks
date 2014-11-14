function findCardFrequency (str) {
	//remove the suits and put all cards in array (aka Ninja Style)
	var cards = str.replace(/[♥♣♠♦]+/g, '').split(" ");
	var counter = 1;
	var results = [];
	var n = cards.length;

	for (var i = 0; i < cards.length; i++) {
		for (var j = i + 1; j < cards.length; j++) {
			if (cards[i] === cards[j]) {
				counter++;
				cards.splice(j, 1);
				j--;
			}
		}
		results.push(((counter / n) * 100).toFixed(2) + '%');
		counter = 1;
	}
	for (var i = 0; i < cards.length; i++) {
		console.log(cards[i] + ' -> ' + results[i]);
	}
	console.log("---->gg we are awsome<----    ----> don`t be slave of the system <----")
}

findCardFrequency('8♥ 2♣ 4♦ 10♦ J♥ A♠ K♦ 10♥ K♠ K♦');
findCardFrequency('J♥ 2♣ 2♦ 2♥ 2♦ 2♠ 2♦ J♥ 2♠');
findCardFrequency('10♣ 10♥');