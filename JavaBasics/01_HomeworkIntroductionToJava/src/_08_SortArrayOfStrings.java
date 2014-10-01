import java.util.Arrays;
import java.util.Scanner;


public class _08_SortArrayOfStrings {

	public static void main(String[] args) {
		
		Scanner input = new Scanner(System.in);
		int n = input.nextInt();
		String[] strings = new String[n];
		
		// Loading The arr
		for (int i = 0; i < n; i++) {
			strings[i] = input.next();
		}
		
		Arrays.sort(strings);
		System.out.println();
		
		// Print The arr
		for (int i = 0; i < n; i++) {
			System.out.println(strings[i]);
		}

	}

}
