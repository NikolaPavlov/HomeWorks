namespace _01_StringBuilderExtension
{
    using System;
    using System.Text;
    using System.Collections.Generic;

    class SbTest
    {
        static void Main()
        {
            var sbTest = new StringBuilder("Test this string builder like never before!");
            Console.WriteLine(sbTest.Substring(0, 9));
            Console.WriteLine(sbTest.RemoveText("never "));

            List<int> nums = new List<int>() { 1, 2, 3, 4, 5 };
            sbTest.AppendAll(nums);
            Console.WriteLine(sbTest);
        }
    }
}
