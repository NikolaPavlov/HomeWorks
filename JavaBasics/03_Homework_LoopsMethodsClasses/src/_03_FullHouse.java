
public class _03_FullHouse {

	public static void main(String[] args) {

		String[] cards = {"2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A"};
		char[] suits = {'♣', '♦', '♥', '♠'};
		int counter = 0;
		
		
		
		for (int i = 0; i < cards.length; i++) {
			for (int j = 0; j < cards.length; j++) {
				if (i != j) {
					
					for (int first = 0; first < 4; first++) {
						for (int second = first + 1; second < 4; second++) {
							for (int third = second + 1; third < 4; third++) {
								for (int four = 0; four < 4; four++) {
									for (int five = four + 1; five < 4; five++) {
										
										counter++;
										System.out.println("" + cards[i] + suits[first] +
										                        cards[i] + suits[second] +
										                        cards[i] + suits[third] +
										                        cards[j] + suits[four] + 
										                        cards[j] + suits[five]);
									}
								}
							}
						}
					}
					
					
				}
			}
		}
		System.out.println(counter);
	}

}
