using System;

namespace Point
{
    public class Point3D
    {
        // properties
        public double X { get; set; }
        public double Y { get; set; }
        public double Z { get; set; }

        // read only startingPoint 
        private static readonly Point3D startingPoint = new Point3D(0, 0, 0);
        public static Point3D StartingPoint
        {
            get { return startingPoint; }
        }

        // constructor
        public Point3D(double x = 0, double y = 0, double z = 0)
        {
            this.X = x;
            this.Y = y;
            this.Z = z;
        }

        // ToString()
        public override string ToString()
        {
            return String.Format("Coordinates: X:{0} Y:{1} Z:{2}", this.X, this.Y, this.Z);
        }
    }
}