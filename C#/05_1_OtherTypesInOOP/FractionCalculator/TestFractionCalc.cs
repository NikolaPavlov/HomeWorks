namespace FractionCalculator
{
    using System;

    class TestFractionCalc
    {
        static void Main()
        {
            var a = new Fraction(22, 7);
            var b = new Fraction(40, 4);
            var c = a + b;
            Console.WriteLine(c.Numerator);
            Console.WriteLine(c.Denominator);
            Console.WriteLine(c);
        }
    }
}
