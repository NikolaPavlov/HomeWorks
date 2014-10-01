import java.util.Scanner;


public class _01_SymmetricNumbersInRange {

	public static void main(String[] args) {
		
		Scanner input = new Scanner(System.in);
		int startNum = input.nextInt();
		int endNum = input.nextInt();
		
		for (int i = startNum; i <= endNum; i++) {
			if (i < 10) {
				System.out.print(i + " ");
			}
			else if (i >= 10 && i <= 99) {
				if (i % 10 == i / 10) {
					System.out.print(i + " ");
				}
			}
			else {
				if (i % 10 == i / 100) {
					System.out.print(i + " ");
				}
			}
		}
		
		
	}

}
