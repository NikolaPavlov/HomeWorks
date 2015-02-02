using System;

namespace _04_CompanyHierarchy
{
    class Employee : Person
    {
        private decimal salary;
        private string department;
        private string[] allowDepartments = { "Production", "Accounting", "Sales", "Marketing" };

        // Prop
        public decimal Salary
        {
            get
            {
                return this.salary;
            }
            set
            {
                if (value < 0)
                {
                    throw new ArgumentException("Employee salary should be positive decimal number!"); 
                }
                this.salary = value;
            }
        }

        public string Department
        {
            get
            {
                return this.department;
            }
            set
            {
                // check if the input department is in allowDepartments array
                if (Array.IndexOf(allowDepartments, value) == -1)
                {
                    throw new ArgumentException("Employee department field should be: Production, Accounting, Sales or Marketing!"); 
                }
                this.department = value;
            }
        }

        // Constructor
        public Employee(int id, string firstName, string lastName, decimal salary, string departmen)
            : base(id, firstName, lastName)
        {
            this.Salary = salary;
            this.Department = departmen;
        }

        // To String 
        public override string ToString()
        {
            return base.ToString() + string.Format(" Salary: {0}, Department: {1}", 
                this.Salary, this.Department);
        }

    }
}
