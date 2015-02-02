using System;
// Kitten always female
namespace _03_Animals
{
    class Kitten : Cat
    {
        // Constructor
        public Kitten(string name, int age)
            : base(name, age, Gender.Female)
        {
        }

        // To String
        public override string ToString()
        {
            return base.ToString() + " This animal is a kitten!";
        }
    }
}
