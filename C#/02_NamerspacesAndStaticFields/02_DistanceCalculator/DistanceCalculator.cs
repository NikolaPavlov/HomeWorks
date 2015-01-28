using System;
// I added reference from 02_DistanceCalculator to 01_Point3D
// that alow me to reuse my Point3D class from 01 project
// import the namespace from the firs project bellow:
using Point;

public static class DistanceCalculator
{
    public static double CalculateDistance(Point3D a, Point3D b)
    {
        double deltaX = a.X - b.X;
        double deltaY = a.Y - b.Y;
        double deltaZ = a.Z - b.Z;

        double distance = Math.Sqrt(deltaX * deltaX + deltaY * deltaY + deltaZ * deltaZ);
        return distance;
    }
}
