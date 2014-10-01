import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;
import java.util.Set;
import java.util.TreeSet;

public class _10_ExtractAllUniqueWords {

	public static void main(String[] args) {
		Scanner reader = new Scanner(System.in);
		String input = reader.nextLine().toLowerCase();
		String[] split = input.split("[^a-zA-Z]+");

		Arrays.sort(split);

		ArrayList<String> listOfStrings = new ArrayList<>();
		for (String string : split) {
			if (!listOfStrings.contains(string)) {
				listOfStrings.add(string);
			}
		}

		for (String string : listOfStrings) {
			System.out.print(string + " ");
		}
		System.out.println();
		Set<String> unique = new TreeSet<>();
		for (String string : split) {
			unique.add(string);
		}
		for (String string : unique) {
			System.out.print(string + " ");
		}
	}
}
