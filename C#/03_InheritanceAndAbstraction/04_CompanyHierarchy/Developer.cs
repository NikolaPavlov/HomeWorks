using System;
using System.Collections.Generic;
using _04_CompanyHierarchy.SalesAndProjects;

namespace _04_CompanyHierarchy
{
    class Developer : Employee
    {
        private List<Project> projects = new List<Project>();

        // Prop
        public List<Project> Projects { get; private set; }

        // Constructors
        public Developer(int id, string firstName, string lastName, decimal salary, string department)
            : base(id, firstName, lastName, salary, department)
        {
        }

        public Developer(int id, string firstName, string lastName, decimal salary, string department, List<Project> projects)
            : base(id, firstName, lastName, salary, department)
        {
            this.projects = projects;
        }

        // Method for add projects on the fly
        public void AddProject(Project proj)
        {
            this.projects.Add(proj);
        }

        // To String
        public override string ToString()
        {
            string str = "";
            str += base.ToString();
            str += "\nProjects for this developer: \n";
            foreach (var project in projects)
            {
                str += project.ToString() + "\n";
            }
            return str;
        }

    }
}
