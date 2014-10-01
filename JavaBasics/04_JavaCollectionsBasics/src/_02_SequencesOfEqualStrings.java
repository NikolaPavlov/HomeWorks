import java.util.Scanner;

public class _02_SequencesOfEqualStrings {

	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		String line = input.nextLine();
		String[] splitted = line.split(" ");
		System.out.print(splitted[0]);

		for (int i = 1; i < splitted.length; i++) {
			if (splitted[i].equals(splitted[i - 1])) {
				System.out.print(" " + splitted[i]);
			} else {
				System.out.println();
				System.out.print(splitted[i]);
			}

		}

	}

}
