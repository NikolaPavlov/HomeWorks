using System;

namespace Point
{
    public class Point3D
    {
        // Read only starting point 
        private static readonly Point3D startingPoint = new Point3D(0, 0, 0);

        // Automatic properties
        public double X { get; set; }
        public double Y { get; set; }
        public double Z { get; set; }

        // Static property for returning the start point
        public static Point3D StartingPoint
        {
            get
            {
                return startingPoint;
            }
        }

        // Constructor
        public Point3D(double x = 0, double y = 0, double z = 0)
        {
            this.X = x;
            this.Y = y;
            this.Z = z;
        }

        // Override ToString()
        public override string ToString()
        {
            return String.Format("x: {0}, y: {1}, z: {2}", this.X, this.Y, this.Z);
        }
    }

    class TestPoint3D
    {
        static void Main()
        {
            // check the get prop of startingPoint
            Point3D start = Point3D.StartingPoint;
            
            // printing the point
            Point3D p1 = new Point3D(1, 1, 1);
            Console.WriteLine(p1.ToString());
        }
    }
}