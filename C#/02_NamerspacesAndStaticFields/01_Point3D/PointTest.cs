using System;

namespace Point
{
    public class PointTest
    {
        static void Main()
        {
            Point3D p1 = new Point3D(3, 3, 3);
            Point3D p2 = new Point3D(x: 1, z: 2);
            Console.WriteLine(p1.ToString());
            Console.WriteLine(p2.ToString());
            Console.WriteLine(Point3D.StartingPoint);
        }
    }
}