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
        public Student(string name, int classNumber)
            : base(name)
        {
            this.ClassNumber = classNumber;
        }

        // ToString
        public override string ToString()
        {
            return base.Name + " No:" + this.ClassNumber;
        }
    }
}
