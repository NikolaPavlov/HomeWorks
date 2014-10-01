import java.util.Scanner;


public class _05_AngleUnitConverter {
	
	public static double convertDegreesToRadians(double degrees){
		double radians = (degrees * Math.PI) / 180;
		return radians;
	}
	
	public static double convertRadiansToDegrees(double radians){
		double degree = (radians * 180) / Math.PI;
		return degree;
	}

	public static void main(String[] args) {
		
		Scanner input = new Scanner(System.in);
		int num = input.nextInt();
		
	
		
		for (int i = 0; i < num; i++) {
			double localNum = input.nextDouble();
			String localStr = input.next();
			
			if (localStr.equals("deg")) {
				System.out.printf("%.6f rad", convertDegreesToRadians(localNum));
			}
			else if (localStr.equals("rad")) {
				System.out.printf("%.6f deg", convertRadiansToDegrees(localNum));
			}
			System.out.println();
		}
	}

}
