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
                    new Student("Iosif", "Iordanov", 22, 3243543, "+359332244", "email@mail.bg", new List<int>(){3,3,3,3,3}, 1),
                    new Student("Rossy", "Petrova", 21, 4342234, "+334359332244", "eeemail@mail.bg", new List<int>(){6,6,6,6,6}, 2),
                    new Student("Hristo", "Stoichkov", 25, 324353243, "+359332242344", "email@mail.bg", new List<int>(){3,2,2,3,2}, 3),
                    new Student("Aron", "Shwartz", 44, 132435343, "+359332242443", "email@maail.bg", new List<int>(){3,2,3,3,3}, 2),
                    new Student("Linux", "Rulz", 99, 223243543, "+359332244234", "email@maaail.bg", new List<int>(){3,3,6,6,6}, 2),
                    new Student("Suck", "Microsoft", 11, 773243543, "+359332242344", "email@maaaaail.bg", new List<int>(){3,2,6,3,6}, 111),
                    new Student("Nakov", "Bradichka", 22, 123243543, "+359332234344", "email@mailll.bg", new List<int>(){3,3,6,6,6}, 12),
                    new Student("Dumb", "Lector", 16, 133243543, "+359332242344", "email@maaaaail.bg", new List<int>(){3,3,6,6,6}, 11),
                }; 

            // Problem 04 Group students by group
            Console.WriteLine("Problem 04 Group students by group:");
            var studentsByGroup = students.Where(s => s.GroupNumber == 2);
            foreach (var student in studentsByGroup)
            {
                Console.WriteLine(student.ToString()); 
            }

            Console.WriteLine();

            // Problem 05 Students by first and last name
            Console.WriteLine("Problem 05 Students by first and last name");
            var studentsByNames = students.Where(s => string.Compare(s.FirstName, s.LastName) < 0);
            foreach (var student in studentsByNames)
            {
                Console.WriteLine(student.ToString()); 
            }

            Console.WriteLine();

            // Problem 06 Students by age
            Console.WriteLine("Problem 06 Students by age");
            var studentsByAge = students.Where(s => s.Age >= 18 && s.Age <= 24);
            foreach (var student in studentsByAge)
            {
                Console.WriteLine(student.ToString()); 
            }
        }
    }
}
