using System;
using System.Collections.Generic;
using System.Linq;

namespace _02_HumanStudentAndWorker
{
    class Worker : Human
    {
        private decimal weekSalary;
        private decimal workHoursPerDay;

        // Prop
        public decimal WeekSalary
        {
            get
            {
                return this.weekSalary;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Salary should be positive number!"); 
                }
                this.weekSalary = value;
            }
        }

        public decimal WorkHoursPerDay
        {
            get
            {
                return this.workHoursPerDay;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Work Hours shoud be positive number!"); 
                }
                this.workHoursPerDay = value;
            }
        }

        // Constructor
        public Worker(string firstName, string lastName, decimal weekSalary, decimal workHoursPerDay)
            : base(firstName, lastName)
        {
            this.WeekSalary = weekSalary;
            this.WorkHoursPerDay = workHoursPerDay;
        }

        // Methods
        public decimal MoneyPerHour()
        {
            return this.WeekSalary / this.workHoursPerDay * 7;
        }

        // To String
        public override string ToString()
        {
            string str = "";
            str += "Name: " + base.ToString();
            str += " " + "| Money per hour: " + MoneyPerHour().ToString("f2");
            return str;
        }
    }
}
