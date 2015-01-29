using System;
using Point;

/* 
    I added reference from this project to 01_Point3D.
    This allow me to use the namespace Point after declarate it 
    with using statment; 
 */

public static class DistanceCalculator
{
    public static double CalculateDistance(Point3D point1, Point3D point2)
    {
        double deltaX = point1.X - point2.X;
        double deltaY = point1.Y - point2.Y;
        double deltaZ = point1.Z - point2.Z;

        double distance = Math.Sqrt(deltaX * deltaX + deltaY * deltaY + deltaZ * deltaZ);
        return distance;
    }
}

class TestDistanceCalculator
{
    static void Main()
    {
        // Calc the distance betwen Earth and Pluto
        Point3D Earth = new Point3D(0, 10, 20);
        Point3D Pluto = new Point3D(888, 999, 21324.342);
        Console.WriteLine(DistanceCalculator.CalculateDistance(Earth, Pluto));
    }
}