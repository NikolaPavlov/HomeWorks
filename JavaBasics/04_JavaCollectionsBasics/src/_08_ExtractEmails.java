import java.util.Scanner;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class _08_ExtractEmails {

	public static void main(String[] args) {
		Scanner reader = new Scanner(System.in);
		String text = reader.nextLine();

		String emailRegEx = "[\\w-+]+(?:\\.[\\w-+]+)*@(?:[\\w-]+\\.)+[a-zA-Z]{2,7}";
		Pattern emailPattern = Pattern.compile(emailRegEx);

		Matcher match = emailPattern.matcher(text);
		while (match.find()) {
			System.out.println(match.group());

		}

	}

}
