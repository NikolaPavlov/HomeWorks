using System;
using System.Text.RegularExpressions;
using System.Collections.Generic;
using System.Linq;

namespace _02_HumanStudentAndWorker
{
    class Student : Human
    {
        private string faultyNumber; // 5-10 letters and digits

        // Prop
        public string FaultyNumber
        {
            get
            {
                return this.faultyNumber;
            }
            set
            {
                string regexStr = "[a-zA-z\\d]{5,10}";
                if (!Regex.IsMatch(value, regexStr))
                {
                    throw new ArgumentException("Faulty number should be between 5 and 10 chars and digits!"); 
                }
                this.faultyNumber = value;
            }
        }

        // Constructor
        public Student(string firstName, string lastName, string faultyNumber)
            : base(firstName, lastName)
        {
            this.FaultyNumber = faultyNumber;
        }

        // ToString
        public override string ToString()
        {
            return base.ToString() + " " + this.FaultyNumber;
        }
            
    }
}
