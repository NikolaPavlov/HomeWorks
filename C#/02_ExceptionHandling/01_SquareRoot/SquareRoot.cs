using System;

class SquareRoot
{
    static void Main()
    {
        try
        {
            Console.WriteLine("Enter number dude:");
            int num = int.Parse(Console.ReadLine());
            if (num < 0)
            {
                throw new ArgumentException("The enter num should be positive number!"); 
            }
            double sqrt = Math.Sqrt(num);
            Console.WriteLine(sqrt);
        }
        catch (ArgumentException ex)
        {
            Console.WriteLine(ex.Message);
        }
        catch (OverflowException ex)
        {
            Console.WriteLine(ex.Message);
        }
        finally
        {
            // This code will always execute FINALLY block 
            Console.WriteLine("Cool go drink now, have a life to live!");
        }
    }
}



