using System;

namespace _03_Animals
{
    class Tomcat : Cat
    {
        // Constructor 
        public Tomcat(string name, int age)
            : base(name, age, Gender.Male)
        {
        }

        // To Strong
        public override string ToString()
        {
            return base.ToString() + " This animal is a tomcat!";
        }
    }
}
