using System;
using System.Linq;

class EnterNumbers
{
    public static int ReadNumber(int start, int end)
    {
        string input = Console.ReadLine();
        try
        {
            int num = int.Parse(input);
            if (num > end || num < start)
            {
                throw new ArgumentOutOfRangeException(String.Format
                    ("Enter num should be between {0} and {1}", start, end)); 
            }
            return num;
        }
        catch (ArgumentOutOfRangeException ex)
        {
            Console.WriteLine("Enter number is out of range 0 - 100, or the enter num isn't greater than one before");
            return ReadNumber(start, end);
        }
        catch (Exception ex)
        {
            Console.WriteLine("You should enter number between 0 and 100");
            return ReadNumber(start, end);
        }
    }


    static void Main()
    {
        int[] numbers = new int[10];
        for (int i = 0; i < 10; i++)
        {
            int maxArrayElement = numbers.Max();
            int min = Math.Max(2, maxArrayElement + 1);
            int max = 100 - 10 + i;
            Console.Write("Enter a number: ");
            numbers[i] = ReadNumber(min, max);
        }
        Console.WriteLine("\nYou entered the following 10 numbers:");
        for (int i = 0; i < 10; i++)
        {
            Console.WriteLine("Number {0}: {1}", i + 1, numbers[i]);
        }
    }
    
}