using System;
using System.Collections.Generic;
using _04_CompanyHierarchy.SalesAndProjects;

namespace _04_CompanyHierarchy.EmployeesAndCustomers
{
    interface IDeveloper
    {
        List<Project> Projects { get; set; }
        void AddProject(Project proj);
    }
}
