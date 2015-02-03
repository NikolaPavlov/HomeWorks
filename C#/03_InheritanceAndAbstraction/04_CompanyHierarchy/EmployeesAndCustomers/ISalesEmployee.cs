using System;
using System.Collections.Generic;
using _04_CompanyHierarchy.SalesAndProjects;

namespace _04_CompanyHierarchy.EmployeesAndCustomers
{
    interface ISalesEmployee
    {
        List<Sale> Sales { get; set; }
        void AddSale(Sale s1);
    }
}
