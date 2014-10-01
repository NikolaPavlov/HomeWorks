import java.util.Scanner;

public class _05_CountAllWords {

	public static void main(String[] args) {
		Scanner reader = new Scanner(System.in);
		String input = reader.nextLine();
		String[] splitted = input.split("[^a-zA-Z]+");
		int countOfWords = splitted.length;
		System.out.println(countOfWords);

	}

}
