using System;
using System.Collections.Generic;

namespace _04_CompanyHierarchy.EmployeesAndCustomers
{
    class Manager : Employee, IManager
    {
        private List<Employee> employees = new List<Employee>();

        // Prop
        public List<Employee> Employees { get; set; }

        // Constructors
        public Manager(int id, string firestName, string lastName, decimal salary, string department)
            : base(id, firestName, lastName, salary, department)
        {
        }

        public Manager(int id, string firstName, string lastName, decimal salary, string department, List<Employee> employees)
            : base(id, firstName, lastName, salary, department)
        {
            this.Employees = employees;
        }

        // Method for add employees on the fly
        public void AddEmployee(Employee emp)
        {
            this.employees.Add(emp);
        }

        // To String
        public override string ToString()
        {
            string str = "";
            str += base.ToString();
            str += "\nEmployees for this manager: \n";
            foreach (var employee in employees)
            {
                str += employee.FirstName + " " + employee.LastName + "\n"; 
            }
            return str;
        }
    }
}
