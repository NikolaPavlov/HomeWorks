using System;
using System.Collections.Generic;
using System.Linq;

namespace _01_School
{
    class Discipline : School
    {
        private string disciplineName;
        private int numberOfLectures;
        private List<Student> students = new List<Student>();

        // Prop
        public string DisciplineName
        {
            get
            {
                return this.disciplineName;
            }
            set
            {
                if (string.IsNullOrEmpty(value))
                {
                    throw new ArgumentException("Discipline name can't be empty or null!"); 
                }
                this.disciplineName = value;
            }
        }
        public int NumberOfLectures
        {
            get
            {
                return this.numberOfLectures;
            }
            set
            {
                if (value < 0)
                {
                   throw new ArgumentException("Number of lectures should be positive integer number!"); 
                }
                this.numberOfLectures = value;
            }
        }

        // Constructors
        public Discipline(string disciplineName, int numberOfLectures, string details = null)
            : base(details)
        {
            this.DisciplineName = disciplineName;
            this.NumberOfLectures = numberOfLectures;
        } 

        public Discipline(string disciplineName, int numberOfLectures, List<Student> students, string details = null)
            : this(disciplineName, numberOfLectures, details)
        {
            this.students = students;
        }

        // Method for add student on the fly (aka like a boss) :D
        public void AddStudent(Student student)
        {
            this.students.Add(student);
        }

        // ToString
        public override string ToString()
        {
            string str = "";
            str += "Discipline: " + this.DisciplineName + "\n";
            str += "Number of lectures in "+ this.DisciplineName + " " + this.NumberOfLectures + "\n";
            str += "Students in " + this.DisciplineName + ":" + "\n";

            foreach (Student student in this.students)
            {
                str += student.ToString() + "\n";
            }

            if (base.Details != null)
            {
                str += "Details about this discipline: " + base.Details; 
            }

            return str;
        }
    }
}
