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
            var studentsSorted = students.OrderBy(s => s.FaultyNumber);
            string orderedStudentsStr = "Sorted students: \n";
            foreach (Student student in studentsSorted)
            {
                orderedStudentsStr += student.ToString() + "\n";
            }
            //Console.WriteLine(orderedStudentsStr);

            // Sort workers by payment per hour in descending order
            var workersSorted = workers.OrderBy(w => w.MoneyPerHour());
            string orderedWorkersStr = "Sorted workers: \n";
            foreach (Worker worker in workersSorted)
            {
                orderedWorkersStr += worker.ToString() + "\n"; 
            }
            //Console.WriteLine(orderedWorkersStr);

            // Merge the lists and sort the new one
            var mergeHumans = new List<Human>();
            mergeHumans.AddRange(students);
            mergeHumans.AddRange(workers);
            var sortedMergedHumans = mergeHumans
                .OrderBy(h => h.FirstName)
                .ThenBy(h => h.LastName)
                .Select(h => h.FirstName + " " + h.LastName);

            foreach (var human in sortedMergedHumans)
            {
                Console.WriteLine(human.ToString()); 
            }
        }
    }
}
