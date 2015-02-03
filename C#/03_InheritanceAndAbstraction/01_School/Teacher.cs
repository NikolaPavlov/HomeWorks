using System;
using System.Collections.Generic;
using System.Linq;

namespace _01_School
{
    class Teacher : People
    {
        List<Discipline> disciplines = new List<Discipline>();

        // Constructors
        public Teacher(string name, string details = null)
            : base(name, details)
        {
        }

        public Teacher(string name, List<Discipline> disciplines, string details) 
            : base(name, details)
        {
            this.disciplines = disciplines;
        }

        // Method for add disciplines on the fly
        public void AddDiscipline(Discipline discipline)
        {
            this.disciplines.Add(discipline);
        }

        // ToString
        public override string ToString()
        {
            string str = "";
            str += "Teacher: " + base.Name + "\n";
            str += base.Name + " teach these disciplines:" + "\n";

            foreach (Discipline discipline in disciplines)
            {
                str += discipline.DisciplineName + "\n";
            }

            if (base.Details != null)
            {
                str += "Details about this teacher: " + base.Details; 
            }

            return str;
        }
    }
}
