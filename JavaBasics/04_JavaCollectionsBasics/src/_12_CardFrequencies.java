import java.util.LinkedHashMap;
import java.util.Scanner;

public class _12_CardFrequencies {

	public static void main(String[] args) {
		Scanner reader = new Scanner(System.in);
		String[] input = reader.nextLine().split(" ");
		int length = input.length;
	    String[] faces = new String[length];
	    String currentString = "";
	    for (int i = 0; i < length; i++) {
			currentString = "" + input[i].charAt(0);
			if (input[i].charAt(0) == '1') {
				currentString = "" + 10;
			}
			faces[i] = currentString; 
		}
	    
	    LinkedHashMap<String, Double> cardsFrequency = new LinkedHashMap<>();
	    for (String face : faces) {
			Double count = cardsFrequency.get(face);
			if (count == null) {
				count = 0d;
			}
			cardsFrequency.put(face, count + 1);
		}
	    String percent = "%";
	    for (String face : cardsFrequency.keySet()) {
			double frequency = cardsFrequency.get(face);
			double percentige = (frequency/(double)length) * 100;
			System.out.printf("%s -> %.2f %s", face, percentige,percent);
			System.out.println();
		}
    
	}
}
