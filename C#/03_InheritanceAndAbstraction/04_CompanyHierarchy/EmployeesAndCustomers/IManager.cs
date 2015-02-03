using System;
using System.Collections.Generic;

namespace _04_CompanyHierarchy.EmployeesAndCustomers
{
    interface IManager
    {
        List<Employee> Employees { get; set; }
        void AddEmployee(Employee emp);
    }
}
