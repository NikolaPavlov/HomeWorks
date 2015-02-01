using System;

namespace _01_School
{
    class People : School
    {
        private string name;

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
                    throw new ArgumentException("Name can't be null or empty");
                }
                this.name = value;
            }
        }

        // Constructor
        public People(string name)
        {
            this.Name = name;
        }

        //ToString
        public override string ToString()
        {
            return this.Name;
        }
    }
}
