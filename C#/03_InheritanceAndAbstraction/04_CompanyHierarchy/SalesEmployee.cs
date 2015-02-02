using System;
using _04_CompanyHierarchy.SalesAndProjects;
using System.Collections.Generic;

namespace _04_CompanyHierarchy
{
    class SalesEmployee : Employee
    {
        private List<Sale> sales = new List<Sale>();

        // Prop
        public List<Sale> Sales { get; private set; }

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
        public void AddSale(Sale sl)
        {
            this.sales.Add(sl);
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
