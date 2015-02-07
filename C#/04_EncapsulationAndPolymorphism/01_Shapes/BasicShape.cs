namespace _01_Shapes
{
    using System;

    public abstract class BasicShape : IShape
    {
        private double width;
        private double height;

        // Constructor
        public BasicShape()
        {
        }

        public BasicShape(double width, double height)
        {
            this.width = width;
            this.height = height;
        }

        // Prop
        public double Width
        {
            get
            {
                return this.width;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Width should be positive number!"); 
                }
                this.width = value;
            }
        }

        public double Height
        {
            get
            {
                return this.height;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Height should be positive number!"); 
                }
            }
        }

        // Methods
        public abstract double CalculateArea();

        public abstract double CalculatePerimeter();

    }
}
