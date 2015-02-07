namespace _01_Shapes
{
    using System;

    class ShapesTest
    {
        static void Main()
        {
            Triangle tri = new Triangle(5, 5, 5);
            Console.WriteLine(tri.CalculateArea());
            Console.WriteLine(tri.CalculatePerimeter());

            Rectangle rect = new Rectangle(3, 2);
            Console.WriteLine(rect.CalculateArea());
            Console.WriteLine(rect.CalculatePerimeter());

            Circle circ = new Circle(3);
            Console.WriteLine(circ.CalculateArea());
            Console.WriteLine(circ.CalculatePerimeter());

            // Create array of shapes and iterate over them
            BasicShape[] arrayOfShapes = {new Triangle(2, 34, 32.3243),
                                         new Rectangle(323, 13),
                                         new Circle(4343769.3242)};

            foreach (BasicShape shape in arrayOfShapes)
            {
                string str = "";
                str += shape.GetType().Name + ":\n";
                str += "The perimeter of this shape: " + shape.CalculatePerimeter() + "\n";
                str += "the area of this shape: " + shape.CalculateArea();
                Console.WriteLine(str);
            }
        }
    }
}
