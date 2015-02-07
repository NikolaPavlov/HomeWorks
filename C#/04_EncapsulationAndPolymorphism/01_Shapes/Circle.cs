namespace _01_Shapes
{
    using System;
     
    class Circle : BasicShape, IShape
    {
        private double radius;

        // Constructor
        public Circle(double radius)
        {
            this.Radius = radius;
        }

        // Prop
        public double Radius
        {
            get
            {
                return this.radius;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Radius should be positive number!"); 
                }
                this.radius = value;
            }
        }

        // Methods
        public override double CalculateArea()
        {
            double area = Math.PI * this.Radius * this.Radius;
            return area;
        }

        public override double CalculatePerimeter()
        {
            double perimeter = 2 * Math.PI * this.Radius;
            return perimeter;
        }
    }
}
