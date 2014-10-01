import java.util.Scanner;


public class _07_CountSubstringOccurrences {

	public static void main(String[] args) {
		Scanner reader = new Scanner(System.in);
		String text= reader.nextLine().toLowerCase();
		String subsrig = reader.nextLine().toLowerCase();
		int index = text.indexOf(subsrig);
		int counter = 0;
		
		
		while (index != -1) {
			index = text.indexOf(subsrig, index + 1);
			counter ++;
		}
		System.out.println(counter);
		
	}

}
