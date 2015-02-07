namespace _01_Shapes
{
    using System;

    class Triangle : BasicShape, IShape
    {
        private double thirdSide;
        
        // Constructor
        public Triangle(double width, double height, double thirdSide)
            : base(width, height)
        {
            this.ThirdSide = thirdSide;
        }

        // Prop
        public double ThirdSide
        {
            get
            {
                return this.thirdSide;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Third side of a triangle should be positive number!"); 
                }
                this.thirdSide = value;
            }
        }

        public override double CalculateArea()
        {
            // using Heron's formula
            double halfPerimeter = (this.Width + this.Height + this.ThirdSide) / 2;
            double area = Math.Sqrt(halfPerimeter * 
                (halfPerimeter - this.Width) *
                (halfPerimeter - this.Height) * 
                (halfPerimeter - this.ThirdSide));
            return area;
        }

        public override double CalculatePerimeter()
        {
            double perimeter = this.Width + this.Height + this.ThirdSide;
            return perimeter;
        }
    }
}
