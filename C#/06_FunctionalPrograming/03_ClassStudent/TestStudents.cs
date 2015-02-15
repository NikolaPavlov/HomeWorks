namespace _03_ClassStudent
{
    using System;
    using System.Linq;
    using System.Collections.Generic;
    
    class TestStudents
    {
        static void Main()
        {
            List<Student> students = new List<Student>()
                {
                    new Student("Iosif", "Iordanov", 22, 324314, "+359332244", "email@mail.bg", new List<int>(){3,3,3,3,3}, 1),
                    new Student("Rossy", "Petrova", 21, 434223, "+334359332244", "eeemail@mail.bg", new List<int>(){6,6,6,6,6}, 2),
                    new Student("Hristo", "Stoichkov", 25, 121213, "+359332242344", "email@mail.bg", new List<int>(){3,2,2,3,2}, 3),
                    new Student("Aron", "Shwartz", 44, 221133, "+359232242443", "email@maail.bg", new List<int>(){3,2,3,3,3}, 2),
                    new Student("Linux", "Rulz", 99, 111128, "+359332244234", "email@maaail.bg", new List<int>(){3,3,6,6,6}, 2),
                    new Student("Suck", "Microsoft", 11, 665562, "+359332242344", "email@maaaaail.bg", new List<int>(){3,2,6,3,6}, 111),
                    new Student("Nakov", "Bradichka", 22, 222142, "+359332234344", "email@abv.bg", new List<int>(){3,3,6,6,6}, 12),
                    new Student("Dumb", "Lector", 16, 1212114, "+359332242344", "email@abv.bg", new List<int>(){3,3,6,6,6}, 11),
                }; 

            Console.WriteLine(new string('-', 50));

            // Problem 04 Group students by group
            Console.WriteLine("Problem 04 Group students by group:");
            var studentsByGroup = students.Where(s => s.GroupNumber == 2);
            foreach (var student in studentsByGroup)
            {
                Console.WriteLine(student.ToString()); 
            }

            Console.WriteLine(new string('-', 50));

            // Problem 05 Students by first and last name
            Console.WriteLine("Problem 05 Students by first and last name:");
            var studentsByNames = students.Where(s => string.Compare(s.FirstName, s.LastName) < 0);
            foreach (var student in studentsByNames)
            {
                Console.WriteLine(student.ToString()); 
            }

            Console.WriteLine(new string('-', 50));

            // Problem 06 Students by age
            Console.WriteLine("Problem 06 Students by age:");
            var studentsByAge = students.Where(s => s.Age >= 18 && s.Age <= 24);
            foreach (var student in studentsByAge)
            {
                Console.WriteLine(student.ToString()); 
            }

            Console.WriteLine(new string('-', 50));

            // Problem 07 Students by names descending
            Console.WriteLine("Problem 07 Students by names descending:");
            var studentsByNamesDescending = students.OrderByDescending(s => s.FirstName).ThenByDescending(s => s.LastName);
            foreach (var student in studentsByNamesDescending)
            {
                Console.WriteLine(student.ToString()); 
            }

            Console.WriteLine(new string('-', 50));

            // Problem 08 Students by email domain
            Console.WriteLine("Problem 08 Students by email domain:");
            var studentsByEmail = students.Where(s => s.Email.Contains("@abv.bg"));
            foreach (var student in studentsByEmail)
            {
                Console.WriteLine(student.ToString()); 
            }

            Console.WriteLine(new string('-', 50));

            // Problem 09 Students by phone number
            Console.WriteLine("Problem 09 Students by phone number:");
            var studentsByPhone = students.Where(s => 
                s.Phone.IndexOf("02") == 0 ||
                s.Phone.IndexOf("+3592") == 0 || 
                s.Phone.IndexOf("+359 2") == 0);
            foreach (var student in studentsByPhone)
            {
                Console.WriteLine(student.ToString()); 
            }

            Console.WriteLine(new string('-', 50));

            // Problem 12 Students enrolled in 2014
            Console.WriteLine("Problem 12 Students enrolled in 2014:");
            var studentsEnrolled = students.Where(s => s.FacultyNumber % 100 == 14);
            foreach (var student in studentsEnrolled)
            {
                Console.WriteLine(student); 
            }

            Console.WriteLine(new string('-', 50));
        }
    }
}
