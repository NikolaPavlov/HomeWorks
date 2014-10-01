import java.util.Random;
import java.util.Scanner;


public class _06_RandomHandsOf5Cards {

	public static void main(String[] args) {

		Scanner input = new Scanner(System.in);
		int numHands = input.nextInt();
		
		String[] cards = { "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A" };
		String[] suits = { "♣", "♦", "♥", "♠" };
		
		
		Random rdn = new Random();
		
		for (int i = 0; i < numHands; i++) {
			for (int j = 0; j < 5; j++) {
				int cardFace = rdn.nextInt(cards.length - 1) + 1;
				int cardSuit = rdn.nextInt(suits.length - 1) + 1;
				System.out.printf("%s%s ", cards[cardFace], suits[cardSuit]);
			}
			System.out.println();
		}
	}
}
