using System;

namespace _03_Animals
{
    class Cat : Animal, ISound
    {
        // Constructor
        public Cat(string name, int age, Gender gender)
            : base(name, age, gender)
        {
        }

        // To String
        public override string ToString()
        {
            return base.ToString() + " This animal is a cat!";
        }


        // ISound implement
        public void ProduceSound()
        {
            Console.WriteLine("Miau Murrrr!");
        }
    }
}
