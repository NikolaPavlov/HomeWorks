import java.util.Date;
import java.util.Scanner;


public class _07_DaysBetweenTwoDates {

	public static void main(String[] args) {
		
		Scanner input = new Scanner(System.in);
		String startDay = input.next();
		String endDay = input.next();

		
		int days = daysDifference(startDay, endDay);
		System.out.println(days);
		
	}
	private static int daysDifference(String startDay, String endDay){
		String[] startDaySplit = startDay.split("-");
		String[] endDaySplit = endDay.split("-");
		int startYear = Integer.parseInt(startDaySplit[2]);
		int startMonth = Integer.parseInt(startDaySplit[1]);
		int startDayLocal = Integer.parseInt(startDaySplit[0]);
		int endYear = Integer.parseInt(endDaySplit[2]);
		int endMonth = Integer.parseInt(endDaySplit[1]);
		int endDayLocal = Integer.parseInt(endDaySplit[0]);
		Date startDate = new Date(startYear, startMonth, startDayLocal);
		Date endDate = new Date(endYear, endMonth, endDayLocal);
		int days = (int) ((endDate.getTime() - startDate.getTime()) / (1000 * 60 * 60 * 24) );
		return days;
	}

}
