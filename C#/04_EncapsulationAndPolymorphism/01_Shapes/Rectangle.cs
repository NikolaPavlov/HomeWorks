namespace _01_Shapes
{
    using System;

    class Rectangle : BasicShape, IShape
    {
        // Constructor
        public Rectangle(double width, double height)
            : base(width, height)
        {
        }

        // Methods

        public override double CalculateArea()
        {
            double area = this.Width * this.Height;
            return area;
        }

        public override double CalculatePerimeter()
        {
            double perimeter = 2 * (this.Width + this.Height);
            return perimeter;
        }
    }
}
