import java.util.Scanner;


public class _04_LongestIncreasingSequence {

	public static void main(String[] args) {
		Scanner reader = new Scanner(System.in);
		String[] input = reader.nextLine().split(" ");
		int[] numbers = new int[input.length];
		for (int i = 0; i < numbers.length; i++) {
			numbers[i] = Integer.parseInt(input[i]);
		}
		int currentLength = 1;
		int bestLength = 1;
		int bestPosition = 0;
		int startPosition = 0;
		System.out.print(numbers[0]);

		for (int i = 1; i < numbers.length; i++) {
			if (numbers[i] > numbers[i - 1]) {
				System.out.print(" " + numbers[i]);// If
				currentLength++;
			} else {
				System.out.println();
				System.out.print(numbers[i]);
				currentLength = 1;
			}
			if (currentLength > bestLength) {
				bestLength = currentLength;
				bestPosition = i;
				startPosition = i - (bestLength - 1);

			}
		}
		System.out.println();
		System.out.print("Longest: ");
		for (int i = startPosition; i <= bestPosition; i++) {
			System.out.print(numbers[i] + " ");
		}

	}

}
