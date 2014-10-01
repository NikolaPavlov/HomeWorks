import java.util.Arrays;
import java.util.Scanner;
import java.util.TreeMap;

public class _11_MostFrequentWord {

	public static void main(String[] args) {
		Scanner reader = new Scanner(System.in);
		String[] text = reader.nextLine().toLowerCase().split("[^a-zA-Z]+");

		Arrays.sort(text);

		TreeMap<String, Integer> words = new TreeMap<>();
		for (String word : text) {
			Integer frequency = words.get(word);
			if (frequency == null) {
				frequency = 0;
			}
			words.put(word, frequency + 1);
		}

		int count = 0;
		int bestCount = 0;
		for (String word : words.keySet()) {
			count = words.get(word);
			if (count > bestCount) {
				bestCount = count;
			}
		}
		int counter = 0;
		for (String word : words.keySet()) {
			counter = words.get(word);
			if (counter == bestCount) {
				System.out.println(word + " -> " + bestCount + " times");
			}
		}

	}

}
