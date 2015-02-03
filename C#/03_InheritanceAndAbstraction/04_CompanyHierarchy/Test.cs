using System;
using System.Collections.Generic;
using _04_CompanyHierarchy.SalesAndProjects;
using _04_CompanyHierarchy.EmployeesAndCustomers;

namespace _04_CompanyHierarchy
{
    class Test
    {
        static void Main()
        {
            // *test Employee
            Employee me = new Employee(1, "nik", "pav", 1111, "Production");
            Employee iosif = new Employee(2, "yo", "yordanov", 10, "Production");

            // *test Manager
            Manager iuleto = new Manager(007, "Iule", "Stamatova", 4444, "Production");
            iuleto.AddEmployee(me);
            iuleto.AddEmployee(iosif);
            //Console.WriteLine(iuleto.ToString());


            // *test Sale
            Sale sale1 = new Sale("ssd", "01-01-2015", 111);
            Sale sale2 = new Sale("ram", "02/01/2015", 200);
            //Console.WriteLine(sale1.ToString());

            // *test Project
            Project project1 = new Project("proek antiNakov", "02-02-2015", "detronate the bitch", "Open");
            //Console.WriteLine(project1.ToString());
            project1.CloseProject();
            //Console.WriteLine(project1.ToString());

            // *test SalesEmployee
            SalesEmployee petq = new SalesEmployee(99, "Petq", "Petrova", 100, "Production");
            petq.AddSale(sale1);
            petq.AddSale(sale2);
            //Console.WriteLine(saleEmp1.ToString());

            // *test Developer
            Developer stami = new Developer(1, "Stamat", "Kiriakov", 999999, "Production");
            stami.AddProject(project1);
            //Console.WriteLine(stami.ToString());

            // *test Customer (first and last are the same WTF!)
            Customer nakov = new Customer(44, "Svetlincho", "Nakov", 12000);
            //Console.WriteLine(nakov.ToString());

            // *test single collection, put various person in List<>
            var collection = new List<Person>
            {
                iuleto,
                petq,
                stami
            };

            foreach (var person in collection)
            {
                Console.WriteLine(person.ToString()); 
            }
        }
    }
}
