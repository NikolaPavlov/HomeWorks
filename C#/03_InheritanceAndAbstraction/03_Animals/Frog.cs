using System;

namespace _03_Animals
{
    class Frog : Animal, ISound
    {
        // Constructor
        public Frog(string name, int age, Gender gender)
            : base(name, age, gender)
        {
        }

        // To String
        public override string ToString()
        {
            return base.ToString() + " This animal is a frog!";
        }

        // Implement Produce Sound
        public void ProduceSound()
        {
            Console.WriteLine("Kvak Kvak!");
        }
    }
}
