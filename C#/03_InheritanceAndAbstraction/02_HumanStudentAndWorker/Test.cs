using System;
using System.Collections.Generic;
using System.Linq;

namespace _02_HumanStudentAndWorker
{
    class Test
    {
        static void Main()
        {
            Student student1 = new Student("stamatkata", "piperchev", "454adfa");
            //Console.WriteLine(student1.ToString());
            Worker worker1 = new Worker("Svetlicho", "Nakata", 1000, 8);
            //Console.WriteLine(worker1.ToString());
            //Console.WriteLine(worker1.MoneyPerHour());

            List<Student> students = new List<Student>
            {
                new Student("Pepa", "Petrova", "4354232"),
                new Student("Ginka", "Yankowa", "fds332324"),
                new Student("Svetlina", "Nakova", "dsdf343"),
                new Student("Iuleto", "Pro", "364fhsf"),
                new Student("Iosif", "Iosifov", "aer7Adf"),
                new Student("Rossi", "Ross", "131211"),
                new Student("Nakovica", "Nakova", "d4354232"),
                new Student("Pro", "Coder", "me4354232"),
                new Student("Boiko", "BorisovPedal", "007007"),
                new Student("Barak", "ObamaFaget", "111111"),
            };

            List<Worker> workers = new List<Worker>
            {
                new Worker("Pavlinka", "Petrova", 333, 22),
                new Worker("Pamela", "Anderson", 12000, 2),
                new Worker("Brirany", "Bui", 33333, 3),
                new Worker("Rossy", "Ross", 120, 7),
                new Worker("Alks", "Aleksieva", 522, 11),
                new Worker("Angela", "Merkel", 3333, 44),
                new Worker("Jeni", "Kalkandjieva", 342, 7),
                new Worker("Nikoleta", "Lozanova", 1, 40),
                new Worker("Nikoleta", "Milanova", 44, 2),
                new Worker("Petq", "Petq", 43543, 19)
            };

            // Sort students by fNumber
            var sortedStudentsByFacNumber = students.OrderBy(s => s.FaultyNumber);
            foreach (var student in sortedStudentsByFacNumber)
            {
                Console.WriteLine(student.ToString()); 
            }

            Console.WriteLine(new String('-', 50));

            // Sorted workers by pay per hour
            var sortedWorkersByPaymentPerHour = workers.OrderBy(w => w.MoneyPerHour());
            foreach (var worker in sortedStudentsByFacNumber)
            {
                Console.WriteLine(worker.ToString()); 
            }

            Console.WriteLine(new String('-', 50));

            // Merge humans
            var humans = new List<Human>();
            humans.AddRange(students);
            humans.AddRange(workers);
            // Sort humans list by first name then by last name
            var humansSorted = humans.OrderBy(h => h.FirstName).ThenBy(h => h.LastName);

            foreach (var human in humansSorted)
            {
                Console.WriteLine(human.FirstName + " " + human.LastName);
            }

            Console.WriteLine(new String('-', 50));
        }
    }
}
