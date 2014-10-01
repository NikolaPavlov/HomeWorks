import java.util.ArrayList;
import java.util.Scanner;

public class _09_CombineListsOfLetters {

	public static void main(String[] args) {
		Scanner reader = new Scanner(System.in);
		char[] l1 = reader.nextLine().replaceAll(" ", "").toCharArray();
		char[] l2 = reader.nextLine().replaceAll(" ", "").toCharArray();
		
		ArrayList<Character> list1 = new ArrayList<>();
		ArrayList<Character> list2 = new ArrayList<>();     
		for (int i = 0; i < l1.length; i++) {
			list1.add(l1[i]);
		}
		for (int i = 0; i < l2.length; i++) {
		    list2.add(l2[i]);	
		}

		list2.removeAll(list1);
		list1.addAll(list2);
		for (Character character : list1) {
			System.out.print(character + " ");
		}
		System.out.println();
	}
}
