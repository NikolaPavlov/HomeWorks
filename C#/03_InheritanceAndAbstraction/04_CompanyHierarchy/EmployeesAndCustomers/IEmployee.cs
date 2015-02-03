using System;

namespace _04_CompanyHierarchy.EmployeesAndCustomers
{
    interface IEmployee
    {
        decimal Salary { get; set; }
        string Department { get; set; }
    }
}
