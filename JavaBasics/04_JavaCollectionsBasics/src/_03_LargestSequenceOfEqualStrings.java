import java.util.Scanner;


public class _03_LargestSequenceOfEqualStrings {

	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		String[] line = input.nextLine().split(" ");
		int currentlength = 1;
		int bestlength = 1;
		String bestString = line[0]; 
		for (int i = 0; i < line.length - 1; i++) {
			if (line[i].equals(line[i+ 1]) ) {
				currentlength ++;
			}
			else {
				currentlength = 1;
			}
			if (currentlength > bestlength) {
				bestlength = currentlength;
				bestString = line[i];
			}		
		}
			 for (int i = 0; i < bestlength; i++) {
					System.out.print(bestString + " ");
				}		
		}         
	}

