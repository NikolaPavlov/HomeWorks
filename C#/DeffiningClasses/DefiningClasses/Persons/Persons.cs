/*Define a class Person that has name, age and email. The name and age are mandatory. 
 * The email is optional. Define properties that accept non-empty name and age in the range [1...100]. 
 * In case of invalid argument, throw an exception. Define a property for the email that accepts either 
 * null or non-empty string containing '@'. Define two constructors. The first constructor should take name, 
 * age and email. The second constructor should take name and age only and call the first constructor. 
 * Implement the ToString() method to enable printing persons at the console.*/
using System;

    public class Persons
    {
        private string name; 
        private int age; 
        private string email;

        // Properties
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
                    throw new ArgumentNullException("name can't be null dude!");
                }
                else
                {
                    this.name = value;
                }
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
                if (value >= 1 && value <= 100)
                {
                    this.age = value;
                }
                else
                {
                    throw new ArgumentException("age should be in range 1-100 dude!");
                }
            }
        }
        public string Email
        {
            get
            {
                return this.email;
            }
            set
            {
                if (value.Contains("@") || value == null)
                {
                    this.email = value; 
                }
                else
                {
                    throw new ArgumentException("email should be null or it should contains @!");
                }
            }
        }

        // Constructor
        public Persons(string name, int age, string email)
        {
            this.Name = name;
            this.Age = age;
            this.Email = email;
        }
        //the second constructor should call the first one
        public Persons(string name, int age)
            : this(name, age, null)
        {
        }
        // Override ToString
        public override string ToString()
        {
            return string.Format("name: {0}, age: {1}, email: {2}", this.name, this.age, this.email);
        }
    }

    public class playWithPersons
    {
        static void Main()
        {
            Persons me = new Persons("Nikola", 29, "nekviGeiskiZada4i@lulzse");
            //Persons iosif = new Persons("Iosif", 22);
            //Persons me1 = new Persons("", 111, "nekviGeiskiZada4@ilulzse");
            Console.WriteLine(me.ToString());
            //Console.WriteLine(iosif.ToString());
            //Console.WriteLine(me1.ToString());
        }
    }
