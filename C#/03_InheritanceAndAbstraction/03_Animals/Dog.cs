using System;

namespace _03_Animals
{
    class Dog : Animal, ISound
    {
        // Constructor
        public Dog(string name, int age, Gender gender)
            : base(name, age, gender)
        {
        }

        // To String
        public override string ToString()
        {
            return base.ToString() + " This animal is a dog!";
        }

        // Implement Produce Sound
        public void ProduceSound()
        {
            Console.WriteLine("Bau Bau !");
        }
    }
}
