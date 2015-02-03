using System;

namespace _01_School
{
    class Student : People
    {
        private int classNumber;

        // Prop
        public int ClassNumber
        {
            get
            {
                return this.classNumber;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Class Number should be positive number!"); 
                }
                this.classNumber = value;
            }
        }

        // Constructor
        public Student(string name, int classNumber, string details = null)
            : base(name, details)
        {
            this.ClassNumber = classNumber;
        }

        // ToString
        public override string ToString()
        {
            string str = "";
            str += base.Name + " No:" + this.ClassNumber;

            if (base.Details != null)
            {
                str += "\nDetails about this student: " + base.Details; 
            }
            
            return str;
        }
    }
}
