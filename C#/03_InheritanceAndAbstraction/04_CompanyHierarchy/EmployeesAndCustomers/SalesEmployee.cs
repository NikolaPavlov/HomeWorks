using System;
using System.Collections.Generic;
using _04_CompanyHierarchy.SalesAndProjects;

namespace _04_CompanyHierarchy.EmployeesAndCustomers
{
    class SalesEmployee : Employee, ISalesEmployee
    {
        private List<Sale> sales = new List<Sale>();

        // Prop
        public List<Sale> Sales
        {
            get
            {
                return this.sales;
            }
            set
            {
            }
        }

        // Cosntructors
        public SalesEmployee(int id, string firstName, string lastName, decimal salary, string department)
            : base(id, firstName, lastName, salary, department)
        {
        }

        public SalesEmployee(int id, string firstName, string lastName, decimal salary, string department, List<Sale> sales)
            : base(id, firstName, lastName, salary, department)
        {
            this.sales = sales;
        }

        // Add sales on the fly
        public void AddSale(Sale s1)
        {
            this.sales.Add(s1);
        }

        // To String
        public override string ToString()
        {
            string str = "";
            str += base.ToString();
            str += "\nSales for this sales employee: \n";
            foreach (var sale in sales)
            {
                str += sale.ToString() + "\n"; 
            }
            return str;
        }

        
    }
}
