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
        public People(string name, string details = null)
            : base(details)
        {
            this.Name = name;
        }

        //ToString
        public override string ToString()
        {
            string str = "";
            str += this.Name;

            if (base.Details != null)
            {
                str += "\nDetails: " + base.Details; 
            }

            return str;
        }
    }
}
