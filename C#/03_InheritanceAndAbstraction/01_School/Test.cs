using System;
using System.Collections.Generic;

namespace _01_School
{
    class Test
    {
        static void Main()
        {
            // *create List of students
            List<Student> students = new List<Student>{
                new Student("Stamat", 13),
                new Student("Iosif", 1),
                new Student("Kalcho", 4)
            };
            //Console.WriteLine(students[1].ToString());

            // *create Disciplines
            Discipline oop = new Discipline("OOP", 7);
            oop.AddStudent(students[0]);
            oop.AddStudent(students[1]);
            //Console.WriteLine(oop.ToString());
            Discipline kpk = new Discipline("KPK", 14, students);
            //Console.WriteLine(kpk.ToString());

            // *create Teacher
            Teacher proTeacher = new Teacher("Iuleto");
            Teacher weakTeacher = new Teacher("Nakovica");
            proTeacher.AddDiscipline(oop);
            //Console.WriteLine(proTeacher.ToString());

            // *create Class
            Class myClass = new Class("ID-hackerClass");
            myClass.AddTeacher(proTeacher);
            myClass.AddTeacher(weakTeacher);
            //Console.WriteLine(myClass.ToString());

            students[0].Details("details about student");
        }
    }
}
