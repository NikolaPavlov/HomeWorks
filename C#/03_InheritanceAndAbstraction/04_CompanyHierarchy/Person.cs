using System;

namespace _04_CompanyHierarchy
{
    public abstract class Person
    {
        private int id;
        private string firstName;
        private string lastName;

        // Prop
        public int Id
        {
            get
            {
                return this.id;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Person id should be positive integer number!"); 
                }
                this.id = value;
            }
        }
        public string FirstName
        {
            get
            {
                return this.firstName;
            }
            set
            {
                if (string.IsNullOrEmpty(value))
                {
                    throw new ArgumentException("Person first name can't be null or empty!"); 
                }
                this.firstName = value;
            }
        }
        public string LastName
        {
            get
            {
                return this.lastName;
            }
            set
            {
                if (string.IsNullOrEmpty(value))
                {
                    throw new ArgumentException("Person last name can't be null or empty!"); 
                }
                this.lastName = value;
            }
        }

        // Constructor
        public Person(int id, string firstName, string lastName)
        {
            this.Id = id;
            this.FirstName = firstName;
            this.LastName = lastName;
        }

        // To String
        public override string ToString()
        {
            return string.Format("Person id: {0}, Names: {1} {2}", 
                this.Id, this.FirstName, this.LastName);
        }
    }
}
