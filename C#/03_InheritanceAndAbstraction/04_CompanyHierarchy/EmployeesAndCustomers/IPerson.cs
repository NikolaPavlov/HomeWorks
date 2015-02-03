using System;

namespace _04_CompanyHierarchy.EmployeesAndCustomers
{
    interface IPerson
    {
        int Id { get; set; }
        string FirstName { get; set; }
        string LastName { get; set; }
    }
}
