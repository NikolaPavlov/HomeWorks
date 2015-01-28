using System;
using Point;

class DistanceCalculatorTest
{
    static void Main()
    {
        // Calculate the distance between The Earth and The Moon AWSOME!
        Point3D Earth = new Point3D(1, 1, 1);
        Point3D TheMoon = new Point3D(100, 100, 100);
        Console.WriteLine(DistanceCalculator.CalculateDistance(Earth, TheMoon));
    }
}