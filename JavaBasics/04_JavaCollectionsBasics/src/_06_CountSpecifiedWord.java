import java.util.Scanner;

public class _06_CountSpecifiedWord {
	
	public static void main(String[] args) {
		Scanner reader = new Scanner(System.in);
		String input = reader.nextLine();
		String word = reader.nextLine();
		String[] splitted = input.split("[^a-zA-Z]+");
		int counter = 0;
		String comparedString = "";
		for (int i = 0; i < splitted.length; i++) {
			comparedString = splitted[i].toLowerCase();
			if (comparedString.equals(word.toLowerCase())) {
				counter ++;
			}
		}
		System.out.println(counter);

	}

}
