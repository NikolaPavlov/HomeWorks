using System;

namespace _03_Animals
{
    public enum Gender
    {
        Male,
        Female
    }

    abstract class Animal
    {
        private string name;
        private int age;
        private string gender;
        
        // Prop
        public string Name
        {
            get
            {
                return this.name;
            }
            set
            {
                if (string.IsNullOrEmpty(value))
                {
                    throw new ArgumentException("Animal name can't be null or empty!"); 
                }
                this.name = value;
            }
        }

        public int Age
        {
            get
            {
                return this.age;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Animal age should be positive integer number!"); 
                }
                this.age = value;
            }
        }

        public Gender Gender { get; private set; }

        // Constructor
        public Animal(string name, int age, Gender gender)
        {
            this.Name = name;
            this.Age = age;
            this.Gender = gender;
        }

        // To String 
        public override string ToString()
        {
            return string.Format("Animal name: {0}, age: {1}, gender: {2}", 
                this.Name, this.Age, this.Gender);
        }
    }
}
